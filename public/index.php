<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href= "../css/style.css" >

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;600&display=swap');
    </style>
</head>
<body class="body">
<div class="wrapper">
    <header class="slidebar">
        <a href="/" class="logo-link">
            <img src="./img/BITFILIX_logo.svg" alt="logo">
        </a>
        <nav class="menu">
            <ul>
                <li class="menu-item"><a href="#" class="menu-link">Главная</a></li>
                <li class="menu-item"><a href="#" class="menu-link">Триллер</a></li>
                <li class="menu-item"><a href="#" class="menu-link">Комедия</a></li>
                <li class="menu-item"><a href="#" class="menu-link">...</a></li>
                <li class="menu-item"><a href="#" class="menu-link">Фантастика</a></li>
                <li class="menu-item"><a href="#" class="menu-link">Избранное</a></li>
            </ul>
        </nav>
    </header>
    <header class="toolbar">
        <div class="search-line">
            <img src="./img/search%201.png" style="width: 24px;height: 24px;padding-right: 10px">
            <p class="font-for-search-line">Поиск по каталогу...</p>
        </div>
        <div class="standart-button">
            <p class="font-for-standart-button">Искать</p>
        </div>
        <div class="add-button">
            <p class="font-for-standart-button">Добавить Фильм</p>
        </div>
    </header>
    <header class="content">
        <div class="area-in-row">
            <div class="movie-item">
                <img class="movie-item-image" src="./img/Rik_and_Morty_poster.png">
                <div class="movie-item-title">
                    <p class="font-for-card-1">Рик и Морти</p>
                    <p class="font-for-card-1" style="color: #999; font-size: 14px; font-weight: 500">Rick and Morty</p>
                </div>
                <div class="movie-item-description">
                    <p class="font-for-card-2">В центре сюжета - школьник по имени Морти и его дедушка Рик. Морти - самый обычный мальчик, который ничем не отличается от своих сверстников. А вот его дедуля занимается необычными научными...</p>
                </div>
                <div class="movie-item-teg">
                    <img src="./img/clock%201.png" style="width: 22px">
                    <p class="font-for-card-3" style="text-transform: none">163 мин./02:43</p>
                    <p class="font-for-card-3">боевик, триллер, приключения</p>
                    <div class="movie-item-hover">
                        <button class="info-button"><p class="font-for-info-button">Подробнее</p></button>
                    </div>
                </div>
            </div>
            <div class="movie-item">
                <img class="movie-item-image" src="./img/Bond_logo.png">
                <div class="movie-item-title">
                    <p class="font-for-card-1">Не время умирать (2021)</p>
                    <p class="font-for-card-1" style="color: #999; font-size: 14px; font-weight: 500">No Time to Die</p>
                </div>
                <div class="movie-item-description">
                    <p class="font-for-card-2">Джеймс Бонд оставил оперативную службу и наслаждается спокойной жизнью на Ямайке. Все меняется, когда на острове появляется его старый друг Феликс Лейтер из ЦРУ с просьбой о помощи.</p>
                </div>
                <div class="movie-item-teg">
                    <img src="./img/clock%201.png" style="width: 22px">
                    <p class="font-for-card-3" style="text-transform: none">163 мин./02:43</p>
                    <p class="font-for-card-3">боевик, триллер, приключения</p>
                    <div class="movie-item-hover">
                        <button class="info-button"><p class="font-for-info-button">Подробнее</p></button>
                    </div>
                </div>
            </div>
            <div class="movie-item">
                <img class="movie-item-image" src="./img/Dune_poster.png">
                <div class="movie-item-title">
                    <p class="font-for-card-1">Дюна (2021)</p>
                    <p class="font-for-card-1" style="color: #999; font-size: 14px; font-weight: 500">Dune</p>
                </div>
                <div class="movie-item-description">
                    <p class="font-for-card-2">Человечество расселилось по далёким планетам, а за власть над обитаемым пространством постоянно борются разные могущественные семьи. В центре противостояния оказывается пустынная...</p>
                </div>
                <div class="movie-item-teg">
                    <img src="./img/clock%201.png" style="width: 22px">
                    <p class="font-for-card-3" style="text-transform: none">163 мин./02:43</p>
                    <p class="font-for-card-3">боевик, триллер, приключения</p>
                    <div class="movie-item-hover">
                        <button class="info-button"><p class="font-for-info-button">Подробнее</p></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="area-in-row">
            <div class="movie-item">
                <img class="movie-item-image" src="./img/Wonder_Woman_1984_poster.png">
                <div class="movie-item-title">
                    <p class="font-for-card-1">Чудо-женщина: 1984 (2020)</p>
                    <p class="font-for-card-1" style="color: #999; font-size: 14px; font-weight: 500">Wonder Woman 1984</p>
                </div>
                <div class="movie-item-description">
                    <p class="font-for-card-2">1984 год. Диана всё ещё грустит по погибшему Стиву, борется с мелким криминалом и работает в музее Смитсоновского института. Однажды она знакомится с новой коллегой Барбарой, специалисткой широкого...</p>
                </div>
                <div class="movie-item-teg">
                    <img src="./img/clock%201.png" style="width: 22px">
                    <p class="font-for-card-3" style="text-transform: none">163 мин./02:43</p>
                    <p class="font-for-card-3">боевик, триллер, приключения</p>
                    <div class="movie-item-hover">
                        <button class="info-button"><p class="font-for-info-button">Подробнее</p></button>
                    </div>
                </div>
            </div>
            <div class="movie-item">
                <img class="movie-item-image" src="./img/Paper_house_poster.png">
                <div class="movie-item-title">
                    <p class="font-for-card-1">Бумажный дом</p>
                    <p class="font-for-card-1" style="color: #999; font-size: 14px; font-weight: 500">La casa de parel</p>
                </div>
                <div class="movie-item-description">
                    <p class="font-for-card-2">Восемь воров берут заложников и запираются в Королевском монетном дворе Испании, пока криминальный авторитет манипулирует полицией, чтобы реализовать свой план.</p>
                </div>
                <div class="movie-item-teg">
                    <img src="./img/clock%201.png" style="width: 22px">
                    <p class="font-for-card-3" style="text-transform: none">163 мин./02:43</p>
                    <p class="font-for-card-3">боевик, триллер, приключения</p>
                    <div class="movie-item-hover">
                        <button class="info-button"><p class="font-for-info-button">Подробнее</p></button>
                    </div>
                </div>
            </div>
            <div class="movie-item">
                <img class="movie-item-image" src="./img/Raiya_poster.png">
                <div class="movie-item-title">
                    <p class="font-for-card-1">Райя и последний дракон</p>
                    <p class="font-for-card-1" style="color: #999; font-size: 14px; font-weight: 500">Raya and the Last Dragon</p>
                </div>
                <div class="movie-item-description">
                    <p class="font-for-card-2">Давным-давно в волшебной стране Кумандре бок о бок с людьми жили драконы — создатели и хранители воды. Мирной жизни пришел конец, когда появились друуны. Порождения тьмы обращали людей и драконов в ...</p>
                </div>
                <div class="movie-item-teg">
                    <img src="./img/clock%201.png" style="width: 22px">
                    <p class="font-for-card-3" style="text-transform: none">163 мин./02:43</p>
                    <p class="font-for-card-3">боевик, триллер, приключения</p>
                    <div class="movie-item-hover">
                        <button class="info-button"><p class="font-for-info-button">Подробнее</p></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="area-in-row">

        </div>
    </header>

</div>

</body>
</html>