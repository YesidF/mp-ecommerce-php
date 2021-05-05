<script src="https://sdk.mercadopago.com/js/v2"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
</script>
<?php

    // SDK de Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken('APP_USR-2572771298846850-120119-a50dbddca35ac9b7e15118d47b111b5a-681067803');
    MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

    $merchant_order = null;
       
    switch($_GET["topic"]) {
        case "payment":
            $payment = MercadoPago\Payment::find_by_id($_GET["id"]);
            // Get the payment and the corresponding merchant_order reported by the IPN.
            $merchant_order = MercadoPago\MerchantOrder::find_by_id($payment->order->id);
            break;
        case "merchant_order":
            $merchant_order = MercadoPago\MerchantOrder::find_by_id($_GET["id"]);
            break;
    }
    $array = json_decode( json_encode( $payment ), true );
    $array2 = (array) $payment;
//echo var_dump($array);
//echo var_dump($array2);
echo $array2['*status'];
    $paid_amount = 0;
    /*foreach ($merchant_order->payments as $payment) {
        echo $payment->status;
        if ($payment['status'] == 'approved'){
            echo '2.0';
            $paid_amount += $payment['transaction_amount'];
            echo '2.1';
        }
        echo '2,2';
    }
echo "3";    
 
    // If the payment's transaction amount is equal (or bigger) than the merchant_order's amount you can release your items
    if($paid_amount >= $merchant_order->total_amount){
        if (count($merchant_order->shipments)>0) { // The merchant_order has shipments
            if($merchant_order->shipments[0]->status == "ready_to_ship") {
                print_r("Totally paid. Print the label and release your item.");
            }
        } else { // The merchant_order don't has any shipments
            print_r("Totally paid. Release your item.");
        }
    } else {
        print_r("Not paid yet. Do not release your item.");
    }
*/
    http_response_code(200);
