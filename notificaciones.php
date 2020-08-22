<?php
 
  require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

  MercadoPago\SDK::setAccessToken("TEST-7448852130109970-082217-984cc9aee821a0bfeede7b1016044f95-629974774"); // Either Production or SandBox AccessToken

  MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

	http_response_code(200);

	$fichero = 'notificaciones.txt';
	//$data = json_encode(var_export($_POST, TRUE));
	$data = file_get_contents('php://input', true);

	// Escribe el contenido al fichero
	file_put_contents($fichero, $data);

?>