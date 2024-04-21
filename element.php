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

$cookieLogin = $_COOKIE['id_login'];
$massWithFavorites = array();
if($cookieLogin){
    // проверка на существование
    $resultFav = $PDO->PDO->query(" 
        SELECT * FROM favorites WHERE users_id = '$cookieLogin'
    ");
    while ($resultFavInfo = $resultFav -> fetch()) {
        $massWithFavorites[] = $resultFavInfo['products_id'];
    }

} 

include 'element_printed.php';