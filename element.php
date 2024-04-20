<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$PDO = PdoConnect::getInstance();

$idElement = $_GET['paramId'];

$resultElement = $PDO->PDO->query("
    SELECT * FROM products WHERE id = $idElement
");

$elementInfo = $resultElement -> fetch();

include 'element_printed.php';