<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/genres.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/settings/config.php';

$genres_array = getGenres();

$main = 'Главная';
$preference = 'Избранное';
?>

<link rel="stylesheet" href="../../css/reset.css">
<link rel="stylesheet" href="../../css/style.css">

<a href="../../public/index.php" class="logo-link">
    <img src="../../data/images/BITFILIX_logo.svg" alt="logo">
</a>
<nav class="menu">
    <ul>
        <li class="menu-item"><a href="#" class="menu-link"><?= $main ?></a></li>
        <li class="menu-item"><a href="#" class="menu-link"><?= $preference ?></a></li>
        <?php
            foreach ($genres_array as $genre_en => $genre_ru)
            {
        ?>
        <li class="menu-item"><a href="#" class="menu-link"><?= $genre_ru ?></a></li>
<?php } ?>
    </ul>
</nav>
