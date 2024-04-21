<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$PDO = PdoConnect::getInstance();

$resultCatalog = $PDO->PDO->query("
    SELECT * FROM products
");

$productsCatalog = array();

while ($productInfoCatalog = $resultCatalog -> fetch()) {
    $productsCatalog[] = $productInfoCatalog;
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

include 'catalog_printed.php';