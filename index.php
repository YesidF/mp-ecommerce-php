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
    <body class="as-theme-light-heroimage">
        <img src="./assets/music-audio-alp-201709" class="img-fluid" width="100%" height¨="auto" alt="Imagen Tienda e-comerce">
        <div class="container mt-3">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="./assets/g6-2_2048x.jpg" class="card-img-top" alt="Imagen Celular LG-G6" heigth="600">
                        <div class="card-body">
                            <h5 class="card-title">LG G6</h5>
                            <p class="card-text">Procesador: Qualcomm Snapdragon 821 con cuatro núcleos a 2.35 GHz.</p>
                            <p class="card-text">GPU: Adreno 530.</p>
                            <p class="card-text">Pantalla: 5.7 pulgadas de pantalla Quad HD+ 2880×1440 px.</p>
                            <p class="card-text">Memoria: 4 GB de RAM.</p>
                            <p class="card-text">Almacenamiento: 32/64 GB con microSD (hasta 2 TB).</p>
                            <p class="card-text">Cámara Trasera: Dual cámara de 13 Mpx con gran angular de 125º</p>
                        </div>
                        <form action="/detail.php" method="get">
                            <input type="hidden" name="img" value="https://dyfe2008-mp-commerce-php.herokuapp.com/assets/g6-2_2048x.jpg">
                            <input type="hidden" name="title" value="LG G6">
                            <input type="hidden" name="price" value="13000">
                            <input type="hidden" name="unit" value="1">
                            <button type="submit" class="btn btn-primary mb-3 mercadopago-button" formmethod="post">Comprar</button>
                        </form>
                    </div>                   
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./assets/iphone.png" class="card-img-top" alt="Imagen Celular iphone" heigth="600">
                        <div class="card-body">
                            <h5 class="card-title">Iphone 8</h5>
                            <p class="card-text">Retina HD.</p>
                            <p class="card-text">Pantalla panorámica LCD Multi‑Touch de 4,7 pulgadas (en diagonal) con tecnología IPS.</p>
                            <p class="card-text">Resolución de 1.334 por 750 píxeles a 326 p/p.</p>
                            <p class="card-text">Contraste de 1.400:1 (típico)</p>
                            <p class="card-text">Pantalla True Tone.</p>
                        </div>
                        <form action="/detail.php" method="get">
                            <input type="hidden" name="img" value="https://dyfe2008-mp-commerce-php.herokuapp.com/assets/iphone.png">
                            <input type="hidden" name="title" value="Iphone 8">
                            <input type="hidden" name="price" value="30000">
                            <input type="hidden" name="unit" value="1">
                            <button type="submit" class="btn btn-primary mb-3 mercadopago-button" formmethod="post">Comprar</button>
                        </form>
                    </div>             
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./assets/motorola-moto-g4-3.jpg" class="card-img-top" alt="Imagen Celular Motorola" heigth="600">
                        <div class="card-body">
                            <h5 class="card-title">Motorola G4</h5>
                            <p class="card-text">Pantalla: 5.5", 1080 x 1920 pixels.</p>
                            <p class="card-text">Procesador: Snapdragon 617 1.5GHz.</p>
                            <p class="card-text">RAM: 2GB.</p>
                            <p class="card-text">Almacenamiento: 16GB.</p>
                            <p class="card-text">Expansión: microSD.</p>
                        </div>
                        <form action="/detail.php" method="get">
                            <input type="hidden" name="img" value="https://dyfe2008-mp-commerce-php.herokuapp.com/assets/motorola-moto-g4-3.jpg">
                            <input type="hidden" name="title" value="Motorola G4">
                            <input type="hidden" name="price" value="20000">
                            <input type="hidden" name="unit" value="1">
                            <button type="submit" class="btn btn-primary mb-3 mercadopago-button" formmethod="post">Comprar</button>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./assets/motorola-moto-g5-plus-1.jpg" class="card-img-top" alt="Imagen Celular Motorola" heigth="600">
                        <div class="card-body">
                            <h5 class="card-title">Motorola G-5 Plus</h5>
                            <p class="card-text">Procesador Snapdragon 625.</p>
                            <p class="card-text">Pantalla de 5.2 pulgadas.</p>
                            <p class="card-text">Dual sim.</p>
                            <p class="card-text">32 GB de memoria rom.</p>
                            <p class="card-text">Memoria Ram de 2 GB.</p>
                        </div>
                        <form action="/detail.php" method="get">
                            <input type="hidden" name="img" value="https://dyfe2008-mp-commerce-php.herokuapp.com/assets/motorola-moto-g5-plus-1.jpg">
                            <input type="hidden" name="title" value="Motorola G-5 Plus">
                            <input type="hidden" name="price" value="15000">
                            <input type="hidden" name="unit" value="1">
                            <button type="submit" class="btn btn-primary mb-3 mercadopago-button" formmethod="post">Comprar</button>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./assets/samsung-galaxy-s9-xxl.jpg" class="card-img-top" alt="Imagen Celular Samsumg" heigth="600">
                        <div class="card-body">
                            <h5 class="card-title">Samsumg Galaxy S9</h5>
                            <p class="card-text">Pantalla: 5.8", 1440 x 2960 pixels</p>
                            <p class="card-text">Procesador: Snapdragon 845 / Exynos 9810</p>
                            <p class="card-text">RAM: 4GB</p>
                            <p class="card-text">Cámara: 12 MP</p>
                            <p class="card-text">Almacenamiento: 64GB/128GB</p>
                        </div>
                        <form action="/detail.php" method="get">
                            <input type="hidden" name="img" value="https://dyfe2008-mp-commerce-php.herokuapp.com/assets/samsung-galaxy-s9-xxl.jpg">
                            <input type="hidden" name="title" value="Samsumg Galaxy S9">
                            <input type="hidden" name="price" value="18000">
                            <input type="hidden" name="unit" value="1">
                            <button type="submit" class="btn btn-primary mb-3 mercadopago-button" formmethod="post">Comprar</button>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./assets/u_10168742.jpg" class="card-img-top" alt="Imagen Celular Iphone" heigth="600">
                        <div class="card-body">
                            <h5 class="card-title">Iphone 9</h5>
                            <p class="card-text">Sistema operativo IOS 13.4.</p>
                            <p class="card-text">Pantalla 4.7 pulgadas.</p>
                            <p class="card-text">Procesador Apple A13 Bionic - fabricación de precisión 7+ nm.</p>
                            <p class="card-text">El espacio interior 64/128/256 GB.</p>
                            <p class="card-text">Cámara 12 MP.</p>
                        </div>
                        <form action="/detail.php" method="get">
                            <input type="hidden" name="img" value="https://dyfe2008-mp-commerce-php.herokuapp.com/assets/u_10168742.jpg">
                            <input type="hidden" name="title" value="Iphone 9">
                            <input type="hidden" name="price" value="35000">
                            <input type="hidden" name="unit" value="1">
                            <button type="submit" class="btn btn-primary mb-3 mercadopago-button" formmethod="post">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row bg-dark">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p class="h6">© All right Reversed.</p>
            </div>
        </div>
        
        <script src="https://sdk.mercadopago.com/js/v2"></script>
        <script src="https://www.mercadopago.com/v2/security.js" view="home"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        
    </body>
</html>