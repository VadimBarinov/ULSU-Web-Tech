<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$PDO = PdoConnect::getInstance();

$cookieLogin = $_COOKIE['id_login'];
$productsFavorites = array();
$massWithFavorites = array();
if($cookieLogin){
    // проверка на существование
    $resultFav = $PDO->PDO->query(" 
        SELECT * FROM favorites WHERE users_id = '$cookieLogin'
    ");
    while ($resultFavInfo = $resultFav -> fetch()) {
        $massWithFavorites[] = $resultFavInfo['products_id'];
    }

    $resultFavorites = $PDO->PDO->query("
    SELECT products.id, products.name, products.image, products.description, 
    products.brand, products.season, products.sex, products.age, products.type, 
    products.purpose, products.fastening, products.level, products.material, products.speeds 
    FROM favorites, products WHERE favorites.products_id = products.id and favorites.users_id = '$cookieLogin' GROUP BY favorites.id
    ");

    while ($productInfoFavorites = $resultFavorites -> fetch()) {
        $productsFavorites[] = $productInfoFavorites;
    }
    $productsFavorites = array_reverse($productsFavorites);

} 

include 'favorites_printed.php';