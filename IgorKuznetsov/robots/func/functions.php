<?php

require_once '../config/config.php';

function getParams() {
    if (empty($_REQUEST)) {
        return false;
    }
    return $_REQUEST;
}

function getSourceContent($fileName) {
    $sourceContent = file_get_contents($fileName);
    return $sourceContent;
}

function getSourceData($fileName) {
    $sourceContent = getSourceContent($fileName);
    $sourceData = json_decode($sourceContent, true);
    return $sourceData;
}

/**@slider**/

