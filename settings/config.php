<?php
$settings = [
    'main_page_config' => [
        'link' => (string)($_SERVER['DOCUMENT_ROOT'].'/public/index.php'),
        'title' => 'Главная'],
    'chosen_page_config' => [
        'link' => (string)($_SERVER['DOCUMENT_ROOT'].'/public/chosen.php'),
        'title' => 'Избранное'],
    ];
function getSettings()
{
    return $GLOBALS["settings"];
}