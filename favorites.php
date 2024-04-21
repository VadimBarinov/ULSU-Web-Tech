<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$PDO = PdoConnect::getInstance();

// нужно переписать запрос чтобы выводил только избранное
$resultFavorites = $PDO->PDO->query("
    SELECT * FROM products
");

$productsFavorites = array();

while ($productInfoFavorites = $resultFavorites -> fetch()) {
    $productsFavorites[] = $productInfoFavorites;
}

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

include 'favorites_printed.php';