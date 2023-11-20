<?php
var_dump($_GET);

require_once $_SERVER['DOCUMENT_ROOT'] . '/services/card_data.php';
if (isset($_GET['film_id']))
{
    $film = getArrElemForCard((int)$_GET['film_id']);
    //var_dump($film);
}
?>


<html lang="en">
<head>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/views/components/head.php';
    ?>
    <link rel="stylesheet" href="<?=$_SERVER['DOCUMENT_ROOT'] .'/css/reset.css'?>"
    <link rel="stylesheet" href= "<?=$_SERVER['DOCUMENT_ROOT'] .'/structure_pr/css/reset.css'?>"
</head>
<body class="body">
<div class="wrapper">
    <header class="slidebar">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/components/slidebar_menu.php';
        ?>
    </header>
    <header class="toolbar">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/views/components/toolbar_menu.php'
        ?>
    </header>
    <header class="content">

        <div class="content-detail-movie-item">
            <div class="detail-item">
                <div class="detail-item-header">
                    <div class="detail-item-header-main-name">
                        <p class="main-name-font"><?= $film['title'].'  ('.$film['release-date'].')' ?></p>
                        <img src="http://localhost:63342/structure_pr/data/images/add_to_pref_2.png">
                    </div>
                    <div class="detail-item-header-second-name">
                        <p class="sure-name-font"><?= $film['original-title']?></p>
                        <div class="grey-border-square"><p class="font-for-search-line"><?= $film['age-restriction'].'+'?></p></div>
                    </div>
                </div>
                <div class="detail-item-filling">
                    <img src='<?="http://localhost:63342/structure_pr".$film['image_adres'] ?>' class="detail-item-image">
                    <div class="detail-item-content">
                        <div class="movie-raiting">
                            <span class="fa fa-square checked "></span>
                            <span class="fa fa-square checked"></span>
                            <span class="fa fa-square checked"></span>
                            <span class="fa fa-square checked"></span>
                            <span class="fa fa-square checked"></span>
                            <span class="fa fa-square checked"></span>
                            <span class="fa fa-square checked"></span>
                            <span class="fa fa-square no-checked"></span>
                            <span class="fa fa-square no-checked"></span>
                            <span class="fa fa-square no-checked"></span>
                            <div class="movie-raiting-cycle"><p class="font-for-standart-button" style="font-size: 20px">7<?= $film['rating']?></p></div>
                        </div>
                        <div class="about-movie">
                            <div class="ab1"><p class="ser-font">О фильме</p></div>
                            <div class="ab2"><p class="ser-font" style="color: #666">Год производства:</p></div>
                            <div class="ab3"><p class="ser-min-font"><?= $film['release-date']?></p></div>
                            <div class="ab4"><p class="ser-font" style="color: #666">Режиссер:</p></div>
                            <div class="ab5"><p class="ser-min-font"><?= $film['director']?></p></div>
                            <div class="ab6"><p class="ser-font" style="color: #666">В главных ролях:</p></div>
                            <div class="ab7"><p class="ser-min-font"><?= $film['cast']?></p></div>
                        </div>
                        <div class="movie-description">
                            <p class="ser-font">Описание</p>
                            <p class="ser-min-font" style="padding-top: 10px; font-size: 18px"><?= $film['full-description']?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

</div>
</body>
</html>
