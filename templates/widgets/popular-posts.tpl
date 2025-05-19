<aside class="aside">
    <div class="aside__header">Popular Posts</div>

    <?php if (isset($popularPosts) && is_array($popularPosts)): ?>
        <?php foreach ($popularPosts as $index => $post): ?>
        <div class="popular-post <?= $index === 0 ? 'popular-post--margin-top' : '' ?>">
            <div class="popular-post__img">
                <img src="<?= HOST . htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>">
            </div>
            <div class="popular-post-content">
                <div class="popular-post__title"><?= htmlspecialchars($post['title']) ?></div>
                <div class="popular-post__author"><?= htmlspecialchars($post['author']) ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
</aside>
