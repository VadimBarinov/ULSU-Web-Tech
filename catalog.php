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

include 'catalog_printed.php';