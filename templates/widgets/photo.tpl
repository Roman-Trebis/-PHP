<aside class="aside">
    <div class="aside__header">Photogallery</div>
    <div class="photos">
        <?php if (isset($photos) && is_array($photos)): ?>
            <?php foreach ($photos as $photo): ?>
            <img src="<?= HOST ?>img/photos/<?= htmlspecialchars($photo) ?>" class="photos__img" alt="Фото из галереи блога">
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</aside>
