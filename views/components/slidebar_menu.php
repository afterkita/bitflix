<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/genres.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/settings/config.php';

$genres_array = getGenres();
$setting = getSettings();

?>

<link rel="stylesheet" href="../../css/reset.css">
<link rel="stylesheet" href="../../css/style.css">

<a href="../../public/index.php" class="logo-link">
    <img src="../../data/images/BITFILIX_logo.svg" alt="logo">
</a>
<nav class="menu">
    <ul>
        <li class="menu-item"><a href="<?= ($setting['main_page_config']['link']) ?>" class="menu-link"><?= $setting['main_page_config']['title'] ?></a></li>
        <li class="menu-item"><a href="<?= ($setting['chosen_page_config']['link']) ?>" class="menu-link"><?= $setting['chosen_page_config']['title'] ?></a></li>
        <?php
            foreach ($genres_array as $genre_en => $genre_ru)
            {
        ?>
        <li class="menu-item"><a href="http://localhost:63342/structure_pr/public/index.php?genre_id=<?= $genre_ru ?>" class="menu-link"><?= $genre_ru ?></a></li>
<?php } ?>
    </ul>
</nav>
