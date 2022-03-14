<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/library/settings.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

echo $twig->render('index.html.twig', 
    [
        'title' => $template['title'],
        'mainmenu' => $template['mainmenu'],
        'price_bayi'=> $template['price_bayi'],
        'price_pelajar'=> $template['price_pelajar'],
        'price_personal'=> $template['price_personal'],
        'price_bisnis'=> $template['price_bisnis']
    ]
);