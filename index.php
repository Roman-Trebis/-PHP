<?php
require_once __DIR__ . '/config.php';

$pageTitle = 'Home';
$currentPage = 'home';

require_template(ROOT . 'templates/head.tpl', [
    'pageTitle' => $pageTitle,
    'currentPage' => $currentPage
]);

require_template(ROOT . 'templates/nav.tpl', [
    'currentPage' => $currentPage
]);

require_template(ROOT . 'templates/header.tpl');
?>

<main class="container">
    <div class="content-wrapper">
        <div class="content">
            <?php if (!empty($site_data['posts'])): ?>
                <?php foreach ($site_data['posts'] as $post): ?>
                <article class="post">
                    <div class="post-img" style="background-image: url(<?= HOST . htmlspecialchars($post['image']) ?>);"></div>
                    <div class="post-content">
                        <div class="post__cat"><?= htmlspecialchars($post['category']) ?></div>
                        <div class="post__title"><?= htmlspecialchars($post['title']) ?></div>
                        <div class="post__text"><?= htmlspecialchars($post['text']) ?></div>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="error">Посты не найдены</p>
            <?php endif; ?>
            
            <a href="#" class="load-more">Load More</a>
        </div>

        <aside class="sidebar">
            <?php
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
            ?>
        </aside>
    </div>
</main>

<?php
require_template(ROOT . 'templates/footer.tpl', [
    'currentPage' => $currentPage
]);
