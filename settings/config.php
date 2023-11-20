<?php
$root = 'http://localhost:63342/';

$settings = [
    'main_page_config' => [
        'link' => (string)$root.'structure_pr/public/index.php',
        'title' => 'Главная'],
    'chosen_page_config' => [
        'link' => (string)$root.'structure_pr/public/chosen.php',
        'title' => 'Избранное'],
    ];
function getSettings()
{
    return $GLOBALS["settings"];
}