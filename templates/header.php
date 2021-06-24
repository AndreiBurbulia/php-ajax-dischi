<header>
    <img src="./dist/img/logo.png" alt="">

    <div>
        <a href="./index.php" class="<?= $_SERVER['REQUEST_URI'] === '/php/php-ajax-dischi/index.php' ? 'active' : '' ?>">PHP</a>
        <a href="./indexVue.php" class="<?= $_SERVER['REQUEST_URI'] === '/php/php-ajax-dischi/indexVue.php' ? 'active' : '' ?>">VUE</a>
    </div>
</header>