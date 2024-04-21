<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});


if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
&& !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	
	$response = array();

	$PDO = PdoConnect::getInstance();

    $cookieLogin = $_COOKIE['id_login'];
    if($cookieLogin){
        $resultDelAll = $PDO->PDO->query("
            DELETE FROM favorites WHERE favorites.users_id = '$cookieLogin'
        ");
    } 

	echo json_encode($response);
}