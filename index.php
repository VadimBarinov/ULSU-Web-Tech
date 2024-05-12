<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$PDO = PdoConnect::getInstance();

$result = $PDO->PDO->query("
    SELECT * FROM products LIMIT 3
");

$products = array();

while ($productInfo = $result -> fetch()) {
    $products[] = $productInfo;
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

include 'main.php';