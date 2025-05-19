<?php
if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('Прямой доступ запрещен');
}

if (defined('ROOT')) {
    die('Конфигурация уже была загружена ранее');
}

define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
define('HOST', (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/');
define('SITE_NAME', 'Travel Blog');
define('DATA_FILE', ROOT . 'data.php');

if (!file_exists(DATA_FILE)) {
    die('Ошибка: Файл с данными не найден');
}

$site_data = require DATA_FILE;

function require_template($template_path, $variables = []) {
    if (!file_exists($template_path)) {
        error_log("Template not found: {$template_path}");
        return false;
    }
    
    extract($variables);
    require $template_path;
    return true;
}
