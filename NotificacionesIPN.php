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
    
    //Notificaciones IPN
    /*if($_GET){
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

    
        $paid_amount = 0;
        foreach ($merchant_order->payments as $payment) {      
            if ($payment->status == 'approved'){
                $paid_amount += $payment->transaction_amount;
            }
        }    

        // If the payment's transaction amount is equal (or bigger) than the merchant_order's amount you can release your items
        if($paid_amount >= $merchant_order->total_amount){
            if (count((array)$merchant_order->shipments)>0) { // The merchant_order has shipments
                echo var_dump($merchant_order->shipments);
                if($merchant_order->shipments[0]->status == "ready_to_ship") {
                    print_r("Totally paid. Print the label and release your item.");
                }
            } else { // The merchant_order don't has any shipments
                print_r("Totally paid. Release your item.");
            }
        } else {
            print_r("Not paid yet. Do not release your item.");
        }
   
    }*/
    
    http_response_code(200);
    //Notificaciones Webhook
    if ($_POST){
        //echo var_dump($_POST['json']);
        switch($_POST["type"]) {
            case "payment":
                $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
                break;
            case "plan":
                $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
                break;
            case "subscription":
                $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
                break;
            case "invoice":
                $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
                break;
        }
    }    

