<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});


if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
&& !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	
	$requestData = $_POST;

	$response = array();
	$response['res'] = true;

	$PDO = PdoConnect::getInstance();

	$inputProduct = $requestData['product_login'];
    $cookieLogin = $_COOKIE['id_login'];
    if($cookieLogin){
        // проверка на существование
        $resultFav = $PDO->PDO->query(" 
            SELECT id FROM favorites WHERE users_id = '$cookieLogin' and products_id = '$inputProduct'
        ");
        $selectFav = $resultFav -> fetch();
    
        if ($selectFav){
            $selectId = $selectFav["id"];
            $resultUsers = $PDO->PDO->query("
                DELETE FROM favorites WHERE favorites.id = '$selectId'
            ");
            $response['res'] = true;
    
        } else {
            $response['res'] = false;
        }
    } else {
        $response['res'] = false;
    }

	echo json_encode($response);
}