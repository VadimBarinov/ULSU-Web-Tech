<?php

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

include 'main.php';