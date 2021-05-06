 <?php
        // SDK de Mercado Pago
        require __DIR__ .  '/vendor/autoload.php';
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken('APP_USR-2572771298846850-120119-a50dbddca35ac9b7e15118d47b111b5a-681067803');
        MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");
        
         // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();
        $preference->back_urls = array(
            "success" => "https://dyfe2008-mp-commerce-php.herokuapp.com/success.php",
            "failure" => "https://dyfe2008-mp-commerce-php.herokuapp.com/failure.php",
            "pending" => "https://dyfe2008-mp-commerce-php.herokuapp.com/pending.php"
        );
        $preference->auto_return = "approved";
        
        $preference->payment_methods = array(
            "excluded_payment_methods" => array(
              array("id" => "amex")
            ),
            "excluded_payment_types" => array(
              array("id" => "atm")
            ),
            "installments" => 6
        );
        
        $preference->external_reference ="dorianyesid09@hotmail.com";
                
        // Crea un ítem en la preferencia
        $item = new MercadoPago\Item();
        $item->id = "1234";
        $item->title = $_POST['title'];
        $item->description = "Dispositivo móvil de Tienda e-commerce";
        $item->category_id = "phones"; //existe una lista predeterminada en la docuentación si no está tu categoría colocar others
        $item->picture_url = __DIR__ . $_POST['img'];
        $item->quantity = $_POST['unit'];
        $item->currency_id = "COP";
        $item->unit_price = $_POST['price'];
        $preference->items = array($item);
        
        $payer = new MercadoPago\Payer();
        $payer->name = "Lalo Landa";
        $payer->surname = "Luevano";
        $payer->email = "test_user_83958037@testuser.com";
        //$payer->date_created = "2018-06-02T12:58:41.425-04:00";
        $payer->phone = array(
          "area_code" => "52",
          "number" => "5549737300"
        );

        $payer->identification = array(
          "type" => "DNI",
          "number" => "12345678"
        );

        $payer->address = array(
          "street_name" => "Insurgentes Sur",
          "street_number" => 1602,
          "zip_code" => "03940"
        );
        
        $preference->payer = $payer;
        $preference->notification_url = "https://dyfe2008-mp-commerce-php.herokuapp.com/NotificacionesIPN.php";
        $preference->save();
 ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
        <title>Tienda e-commerce</title>

        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
    </head>
    <body>
        <img src="./assets/music-audio-alp-201709" class="img-fluid" max-width="100%" height¨="auto" alt="Imagen Tienda e-comerce">
        <div class="container">
            
        </div>
    </body>

    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script src="https://www.mercadopago.com/v2/security.js" view="item"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script>
        // Agrega credenciales de SDK
        const mp = new MercadoPago('APP_USR-a98b17ae-47a6-4a35-b92d-01919002b97e', {
              locale: 'es-CO'
        });
         
        // Inicializa el checkout
        mp.checkout({
            preference: {
                id:'<?php echo $preference->id; ?>'
            },
            render: {
                container: '.pagarMP' // Indica dónde se mostrará el botón de pago
                label: 'Pagar la compra', // Cambia el texto del botón de pago (opcional)
            }
        });
    </script>

</html>