<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-7448852130109970-082217-984cc9aee821a0bfeede7b1016044f95-629974774');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $_POST['title'];
$item->quantity = $_POST['unit'];
$item->unit_price = $_POST['price'];
$item->description = $_POST['price'];
$item->picture_url = $_POST['img'];
$payer = new MercadoPago\Payer();
$payer->email = "test_user_35072561@testuser.com";
$preference->items = array($item);
$preference->payer = $payer;
$preference->save();
?>

<form action="" method="POST">
  <script
   src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
   data-preference-id="<?php echo $preference->id; ?>">
  </script>
</form>