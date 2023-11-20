<?php
$root = 'http://localhost:63342';

$settings = [
    'main_page_config' => [
        'link' => (string)$root.'/public/index.php',
        'title' => 'Главная'],
    'chosen_page_config' => [
        'link' => (string)$root.'/public/detail.php',
        'title' => 'Избранное'],
    ];
function getSettings()
{
    return $GLOBALS["settings"];
}