<?php
include '../setup.php';
//var_dump($_SERVER);
// var_dump($_GET); // pour voir ce qu'on récupère dans l'URL : le controller + l'action
$controllerName = $_GET['controller']; // on récupère le nom du controlleur saisi dans l'URL
$methodName = $_GET['method']; // on récupèrera la méthode action

$controllerClassName = "controller\\$controllerName"; // un \ pour échapper le \
//$instance = new $controllerClassName();
//echo $controllerClassName;
try{
    // Code générique. Quand on arrive sur l'index, on sait qu'on va appeler un controller et une méthode, mais on ne sait pas encore lesquels.
    $class = new ReflectionClass($controllerClassName); // crée un objet ReflectionClass qui permet d'aller voir ce qu'il y a dans une classe, ici la classe du controller (informations sur les méthodes, constructeur, champs statiques...)
    $instance = $class->newInstance(); // cet objet ReflectionClass est aussi capable de créer une instance de la classe sur laquelle il est en train de travailler
    $method = $class->getMethod($methodName); // renvoie un objet qui représente des informations d'une méthode de la future instance
    $method->invoke($instance); // il peut invoquer cette méthode sur une instance. S'il y a un pb, jettera une exception (ce ne serait pas le cas sinon).
    //$instance->$methodName(); // avec cette méthode, renverra une fatal error au lieu d'une Exception si le nom du controller est faux.
} catch (Exception $ex){
    include VIEW . 'error.php';
}
//var_dump($instance);
//$instance->$methodName(); // sera remplacé par le nom de la méthode "action"
?>
