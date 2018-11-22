<?php

session_start();
require_once '../config/config.php';
checkSession();

function debug($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function getParams() {
    if (empty($_REQUEST)) {
        return false;
    }

    return $_REQUEST;
}

function login() {
    $params = getParams();
    if ($params) {
        if ($params['pass_1'] === $params['pass_2']) {
            $_SESSION['email'] = $params['email'];
            $_SESSION['time'] = time();
            setcookie("test_cookie", time());
            setcookie("test_cookie", time(), time() + 60);
            setcookie(
                "test_cookie",
                time(),
                time() + 60,
                '/opt/lampp/htdocs/php_course/RomaSlobodeniuk/10_11_lesson_HTML/',
                "localhost",
                1
            );
            $_SESSION['messages'] = [
                [
                    'type' => 'success',
                    'message' => 'You have logged in successfully! Your email: "' . $params['email'] . '"'
                ]
            ];
            header('Location: ' . ROOT_PATH);
            die();
        }

        $_SESSION['messages'] = [
            [
                'type' => 'danger',
                'message' => 'Sorry, your passwords did not match! Please enter passwords and try again.'
            ]
        ];
    }
}

function checkSession() {
    if (empty($_SESSION['email'])) {
        return;
    }

    $allowedSessionTime = 60;
    $currentTimestamp = time();
    $timeToLogout = $allowedSessionTime - ($currentTimestamp - $_SESSION['time']);
    $_SESSION['messages'] = [
        [
            'type' => 'info',
            'message' => 'You have "' . $timeToLogout . '" seconds to logout!'
        ]
    ];

    if ($currentTimestamp - $_SESSION['time'] > $allowedSessionTime) {
        unlogin();
    }
}

function unLogin() {
    unset($_SESSION['email']);
    unset($_SESSION['time']);
    unset($_COOKIE['test_cookie']);
    header('Location: ' . ROOT_PATH);
    die();
}

function getSourceData($fileName) {
    $sourceContent = getSourceContent($fileName);
    $sourceData = json_decode($sourceContent, true);
    return $sourceData;
}

function getSourceContent($fileName) {
    $sourceContent = file_get_contents($fileName);
    return $sourceContent;
}

function getHeader($data) {
    $fileName = './templates/header/header.html';
    $header = getSourceContent($fileName);
    $header = str_replace('{{title}}', $data['title'], $header);
    $navigation = getNavigation();
    $header = str_replace('{{navigation}}', $navigation, $header);
    $messages = getMessages();
    $header = str_replace('{{messages}}', $messages, $header);
    return $header;
}

function getMessages() {
    if (empty($_SESSION['messages'])) {
        return '';
    }

    $fileName = './templates/header/messages.html';
    $messageTemplate = getSourceContent($fileName);
    $messagesHtml = '';
    foreach ($_SESSION['messages'] as $message) {
        $tmpTemplate = $messageTemplate;
        $tmpTemplate = str_replace('{{type}}', $message['type'], $tmpTemplate);
        $tmpTemplate = str_replace('{{message}}', $message['message'], $tmpTemplate);
        $messagesHtml .= $tmpTemplate;
    }

    unset($_SESSION['messages']);
    return $messagesHtml;
}

function getNavigation() {
    $navigationFileName = './source/navigation.json';
    $navigationData = getSourceData($navigationFileName);
    if (empty($navigationData)) {
        return '';
    }

    $navigationTemplateName = './templates/header/navigation.html';
    $navigationTemplate = getSourceContent($navigationTemplateName);
    $navigationTemplate = str_replace('{{logo_title}}', $navigationData['logo_title'], $navigationTemplate);
    $userEmail = !empty($_SESSION['email']) ? $_SESSION['email'] : '';
    $navigationTemplate = str_replace('{{user_email}}', $userEmail, $navigationTemplate);

    $linksFileName = './templates/header/links.html';
    $linksTemplateHtml = getSourceContent($linksFileName);
    $linksHtml = '';
    $links = $navigationData['links'];
    $isLoggedIn = empty($_SESSION['email']) ? false : true;
    foreach ($links as $key => $link) {
        if ($isLoggedIn && $key === 'link_3') {
            continue;
        }

        if (!$isLoggedIn && $key === 'link_4') {
            continue;
        }

        $linksTemplate = $linksTemplateHtml;
        $linksTemplate = str_replace('{{name}}', $link['name'], $linksTemplate);
        $linksTemplate = str_replace('{{href}}', $link['href'], $linksTemplate);
        $linksHtml .= $linksTemplate;
    }

    $navigationTemplate = str_replace('{{links}}', $linksHtml, $navigationTemplate);
    return $navigationTemplate;
}

function getMainContent($data, $template) {
    $mainFileName = "./templates/$template.html";
    $mainTemplate = getSourceContent($mainFileName);
    $mainTemplate = str_replace('{{greetings}}', $data['greetings'], $mainTemplate);
    $mainTemplate = str_replace('{{description}}', $data['description'], $mainTemplate);
    $mainTemplate = str_replace('{{additional}}', $data['additional'], $mainTemplate);
    $mainTemplate = str_replace('{{link}}', $data['link'], $mainTemplate);
    $mainTemplate = str_replace('{{link_name}}', $data['link_name'], $mainTemplate);
    $pageContent = $data['page_content'];
    if (empty($pageContent)) {
        return $mainTemplate;
    }

    if ($template === 'index') {
        $sliderHtml = '';
        $sliderFileName = './templates/index/slider.html';
        $sliderTemplateHtml = getSourceContent($sliderFileName);
        $i = 1;
        foreach ($pageContent['slider'] as $slider) {
            $sliderTemplate = $sliderTemplateHtml;
            $active = $i === 1 ? 'active' : '';
            $sliderTemplate = str_replace('{{active}}', $active, $sliderTemplate);
            $sliderTemplate = str_replace('{{src}}', IMAGES_PATH . $slider['src'], $sliderTemplate);
            $sliderTemplate = str_replace('{{alt}}', $slider['alt'], $sliderTemplate);
            $sliderHtml .= $sliderTemplate;
            $i++;
        }

        $mainTemplate = str_replace('{{slider_content}}', $sliderHtml, $mainTemplate);
    }

    if ($template === 'articles') {
        $mainTemplate = str_replace('{{articles_title}}', $pageContent['title'], $mainTemplate);
        $mainTemplate = str_replace('{{articles_description}}', $pageContent['description'], $mainTemplate);

        $articlesHtml = '';
        $articleFileName = './templates/articles/article.html';
        $articleTemplateHtml = getSourceContent($articleFileName);
        foreach ($pageContent['articles'] as $article) {
            $articleTemplate = $articleTemplateHtml;
            $articleTemplate = str_replace('{{src}}', $article['src'], $articleTemplate);
            $articleTemplate = str_replace('{{name}}', $article['name'], $articleTemplate);
            $articleTemplate = str_replace('{{text}}', $article['text'], $articleTemplate);
            $articleTemplate = str_replace('{{date}}', $article['date'], $articleTemplate);
            $articlesHtml .= $articleTemplate;
        }

        $mainTemplate = str_replace('{{articles}}', $articlesHtml, $mainTemplate);
    }

    if ($template === 'login') {

    }

    return $mainTemplate;
}

function getFooter($data) {
    $footerFileName = './templates/footer/footer.html';
    $footer = getSourceContent($footerFileName);
    $footer = str_replace('{{heading}}', $data['footer']['heading'], $footer);
    return $footer;
}