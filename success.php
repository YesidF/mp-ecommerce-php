<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Información del pago</h4>
                    <p>La compra ha finalizado correctamente,Hemos recibido tu pago, el producto será despachado en brevedad y serás notificado por correo electrónico.</p>
                    <hr>
                    <h5 class="alert-heading">Información Query String</h5>
                    <p class="mb-0"><span class="fw-bold">collection_id:</span><?php echo $_GET['collection_id']?></p>
                    <p class="mb-0"><span class="fw-bold">collection_status:</span><?php echo $_GET['collection_status']?></p>
                    <p class="mb-0"><span class="fw-bold">payment_id:</span><?php echo $_GET['payment_id']?></p>
                    <p class="mb-0"><span class="fw-bold">status:</span><?php echo $_GET['status']?></p>
                    <p class="mb-0"><span class="fw-bold">external_reference:</span><?php echo $_GET['external_reference']?></p>
                    <p class="mb-0"><span class="fw-bold">payment_type:</span><?php echo $_GET['payment_type']?></p>
                    <p class="mb-0"><span class="fw-bold">merchant_order_id:</span><?php echo $_GET['merchant_order_id']?></p>
                    <p class="mb-0"><span class="fw-bold">preference_id:</span><?php echo $_GET['preference_id']?></p>
                    <p class="mb-0"><span class="fw-bold">site_id:</span><?php echo $_GET['site_id']?></p>
                    <p class="mb-0"><span class="fw-bold">processing_mode:</span><?php echo $_GET['processing_mode']?></p>
                    <p class="mb-0"><span class="fw-bold">merchant_account_id:</span><?php echo $_GET['merchant_account_id']?></p>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body>
</html>