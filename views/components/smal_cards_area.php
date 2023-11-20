<div class="area-small-cards" >
<?php

//todo Переписать эту часть кода, так чтобы подключался только /card_data
require_once $_SERVER['DOCUMENT_ROOT'] . '/services/card_data.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/movie.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/genres.php';

$page_genre = isset($_GET['genre_id'])? $_GET['genre_id']: 'null';
//echo $page_genre;
$movies = getMovie();
$genres = getGenres();

foreach ($movies as $movie)
{
$card_arr = getArrElemForCard($movie['id']);
$film_genres = implode(getOneElem($movie['id'],'genres'));
    if (($page_genre ==='null') || (strpos($film_genres, $page_genre) !== false))
    {
?>

<link rel="stylesheet" href="../../css/reset.css">
<link rel="stylesheet" href="../../css/style.css">

<div class="movie-item">
    <img class="movie-item-image" src=<?= $card_arr["image_adres"] ?>>
    <div class="movie-item-title">
        <p class="font-for-card-1"><?= $card_arr["title"] ?></p>
        <p class="font-for-card-1" style="color: #999; font-size: 14px; font-weight: 500"><?= $card_arr["original-title"] ?></p>
    </div>
    <div class="movie-item-description">
        <p class="font-for-card-2"><?= $card_arr["description"] ?></div>
    <div class="movie-item-teg">
        <img src="../../data/images/clock%201.png" style="width: 22px">
        <p class="font-for-card-3" style="text-transform: none"><?= $card_arr["duration"] ?></p>
        <p class="font-for-card-3"><?= $card_arr["genres"] ?></p>
        <div class="movie-item-hover">
            <button class="info-button" ><a style="text-decoration: none" href="http://localhost:63342/structure_pr/public/detail.php?film_id=<?= $card_arr["id"] ?>" ><p class="font-for-info-button">Подробнее</p></a></button>
        </div>
    </div>
</div>
<?php }}?> </div>
