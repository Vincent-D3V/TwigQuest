<?php
require_once '../vendor/autoload.php';
$loader = new Twig_Loader_Filesystem(__DIR__.'/../src/View');
$twig = new Twig_Environment($loader);
$products = [
    'ordinateur',
    'mobile',
    'télévision',
    'console',
    'enceinte'
];
echo $twig->render("index.html.twig",['array'=>$products]);