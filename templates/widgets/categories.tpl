<aside class="aside">
    <div class="aside__header">Categories</div>
    <ul class="aside-list">
        <?php if (!empty($categories)): ?>
            <?php foreach ($categories as $category): ?>
            <li class="aside-list__item"><?= htmlspecialchars($category) ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="aside-list__item">No categories found</li>
        <?php endif; ?>
    </ul>
</aside>
