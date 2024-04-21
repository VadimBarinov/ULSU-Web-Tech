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

	$inputEmail = $requestData['loginFormEmail'];
    $inputPassword = $requestData['loginFormPassword'];

	$resultUsers = $PDO->PDO->query("
    	SELECT * FROM users WHERE id_login = '$inputEmail'
	");
	$selectUsers = $resultUsers -> fetch();

	if (($selectUsers['id_login'] == $inputEmail) && (($selectUsers['password'] == $inputPassword))){

		$response['values'] = $selectUsers;

		setcookie('id_login', $selectUsers['id_login']);
		setcookie('password', $selectUsers['password']);
		setcookie('name', $selectUsers['name']);
		
		$response['res'] = true;

	} else {
		$response['res'] = false;
	}

	echo json_encode($response);
}