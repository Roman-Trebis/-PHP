<?php
if (!defined('ROOT')) {
    die('Доступ запрещен');
}

require_template(ROOT . 'templates/widgets/author.tpl');
require_template(ROOT . 'templates/widgets/categories.tpl', [
    'categories' => $site_data['categories']
]);
require_template(ROOT . 'templates/widgets/popular-posts.tpl', [
    'popularPosts' => $site_data['popularPosts']
]);
require_template(ROOT . 'templates/widgets/photo.tpl', [
    'photos' => $site_data['photos']
]);
