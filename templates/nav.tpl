<nav class="nav">
    <div class="nav__menu">
        <a href="#">
            <img src="<?= HOST ?>img/icons/menu-button.svg" width="20" alt="Меню">
        </a>
    </div>
    <div class="navigation">
        <a href="<?= HOST ?>index.php" class="navigation__item <?= $currentPage === 'home' ? 'active' : '' ?>">Home</a>
        <a href="<?= HOST ?>about.php" class="navigation__item <?= $currentPage === 'about' ? 'active' : '' ?>">About me</a>
        <a href="<?= HOST ?>post.php" class="navigation__item <?= $currentPage === 'post' ? 'active' : '' ?>">Post</a>
        <a href="<?= HOST ?>contact.php" class="navigation__item <?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a>
    </div>
    <div class="nav__search">
        <a href="#">
            <img src="<?= HOST ?>img/icons/magnifying-glass.svg" width="20" alt="Поиск">
        </a>
    </div>
</nav>
