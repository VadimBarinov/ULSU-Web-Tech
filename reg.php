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

	$inputEmail = $requestData['regFormEmail'];

	$resultUsers = $PDO->PDO->query("
    	SELECT id_login FROM users WHERE id_login = '$inputEmail'
	");
	$selectUsers = $resultUsers -> fetch();

	if (!$selectUsers){

		$sqlInsert = "INSERT INTO users SET id_login = :regFormEmail, password = :regFormPassword, name = :regFormName";
		$set = $PDO->PDO->prepare($sqlInsert);
		$response['values'] = $set->execute($requestData);
		$response['res'] = true;

	} else {
		$response['res'] = false;
	}

	echo json_encode($response);
}