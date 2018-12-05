<?php

function debug($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
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
    return $header;
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

    $linksFileName = './templates/header/links.html';
    $linksTemplateHtml = getSourceContent($linksFileName);
    $linksHtml = '';
    $links = $navigationData['links'];
    foreach ($links as $link) {
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