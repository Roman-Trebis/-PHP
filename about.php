<?php
require_once __DIR__ . '/config.php';

$pageTitle = 'About';
$currentPage = 'about';

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
        <div class="content content--full">
            <article class="post">
                <div class="post-content">
                    <div class="post__title text-center">About this blog</div>
                    <div class="post__text">
                        <p>Ted fermentum sed felis ut eleifend. Integer laoreet massa sed leo rhoncus, non posuere eros varius. Sed congue ligula leo, in molestie mauris viverra quis. Ut a dui a lectus molestie pulvinar id non magna. Nam blandit dictum ante id venenatis.</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, labore iusto sit, eligendi numquam at ex voluptates cumque ducimus sapiente reprehenderit, nihil adipisci nesciunt vitae mollitia illo animi modi explicabo.</p>
                        <p>Quasi quisquam accusamus ullam impedit animi, autem exercitationem laboriosam maxime praesentium quidem assumenda numquam aspernatur hic incidunt rerum architecto. Est ad ratione non impedit autem, quas culpa quasi facere reiciendis.</p>
                        <p>Beatae rem eligendi est aspernatur blanditiis ad nobis saepe voluptas reiciendis laborum tempora perspiciatis, suscipit ipsam soluta debitis sint provident amet dolorum voluptatibus hic dignissimos illo unde nihil odit. Dolore.</p>
                        <p>Ullam modi excepturi earum placeat beatae ad nostrum eius quia omnis, blanditiis quisquam voluptatum. Porro quisquam perspiciatis temporibus incidunt, vitae illo repellat quod dolorum? Esse aliquid nesciunt iure unde minus.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</main>

<?php
require_template(ROOT . 'templates/footer.tpl', [
    'currentPage' => $currentPage
]);
