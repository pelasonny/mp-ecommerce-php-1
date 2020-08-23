<?php
 
  require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

  MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398"); // Either Production or SandBox AccessToken

  MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");


	http_response_code(200);

	$fichero = 'notificaciones.txt';
	//$data = json_encode(var_export($_POST, TRUE));
	$data = file_get_contents('php://input', true);

	// Escribe el contenido al fichero
	file_put_contents($fichero, $data);

?>
