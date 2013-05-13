<?php
include '../setup.php';
//var_dump($_SERVER);
// var_dump($_GET); // pour voir ce qu'on récupère dans l'URL : le controller + l'action
$controllerName = $_GET['controller']; // on récupère le nom du controlleur saisi dans l'URL
$methodName = $_GET['method']; // onrécupèrera la méthode action

$controllerClassName = "controller\\$controllerName"; // un \ pour échapper le \
echo $controllerClassName;
$instance = new $controllerClassName();
//var_dump($instance);
$instance->$methodName(); // sera remplacé par le nom de la méthode "action"
?>
