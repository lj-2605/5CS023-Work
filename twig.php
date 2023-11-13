<?php

// Point to library
require_once '../vendor/autoload.php';

// Set up Environment
$loader = new \Twig\Loader\FilesystemLoader('.');
$twig = new \Twig\Environment($loader);

// Some data
$data['FirstName'] = "Luke";
$data['Surname'] = "Johnson";

// Load and render template
echo $twig->render('template.html', $data);

?>
