<footer class="footer">
    <div class="container">
        <div class="footer-nav-wrapper">
            <div class="footer-nav">
                <a href="<?= HOST ?>index.php" class="footer-nav__link <?= $currentPage === 'home' ? 'active' : '' ?>">HOME</a>
                <a href="<?= HOST ?>about.php" class="footer-nav__link <?= $currentPage === 'about' ? 'active' : '' ?>">ABOUT ME</a>
                <a href="<?= HOST ?>post.php" class="footer-nav__link <?= $currentPage === 'post' ? 'active' : '' ?>">POST</a>
                <a href="<?= HOST ?>contact.php" class="footer-nav__link <?= $currentPage === 'contact' ? 'active' : '' ?>">CONTACT</a>
            </div>
            <form class="footer-form" action="">
                <input class="footer-form__input" type="text" />
                <input class="footer-form__submit" type="submit" value="" />
            </form>
        </div>

        <div class="footer-contacts">
            <p>travel@gmail.com</p>
            <p>(123) 456 789</p>
        </div>

        <div class="footer-line"></div>
        <div class="footer-copyright">
            <p><i class="far fa-copyright"></i> Copyrights <?= date('Y') ?>. <?= SITE_NAME ?> By VictorThemes</p>
        </div>
    </div>
</footer>
</body>
</html>
