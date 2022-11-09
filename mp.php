<?php
require 'vendor/autoload.php';

MercadoPago\SDK::setAccessToken('TEST-3297158750397805-092911-ee0b1610d2ec670518b61305b5395daa-509583078');

$preference = new MercadoPago\Preference();
$item = new MercadoPago\Item();
$item->id = '0001';
$item->title = 'Anticipada';
$item->quantity = 1;
$item->unit_price = 300.00;
$preference->items = array($item);

$preference->back_urls = array (
    // "success"=>"http://localhost/mercadopago/captura.php",
    "success"=>"http://localhost:4200/",
    "failure"=>"http://localhost/mercadopago/fallo.php"
);

$preference->auto_return ="approved";
$preference->binary_mode = true;

$preference->save();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Anticipadas para eventos muy copados que hasta tu viejx quiere ir" />
    <meta name="theme-color" content="#4285f4" />
    <link rel="icon" type="image/png" href="/favicon.png" />
    <meta name="author" content="Una Tal LADY TOXIC" />
    <meta name="copyright" content="Propietario del copyright" />
    <title>Anticipada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>

<body>
    <div class="container text-center">
        <div class="border border-secondary rounded bg-body p-2">
            <h3 class="display-4">Anticipada</h3>
            <div>
                <p class="h3">TEATRO ÍNTIMO</p>
                <span>2da. Edición</span>
                <p>22 de Octubre - 21 hs.</p>
            </div>
            <div class="row">
                <p>Paga tu anticipada con MercadoPago</p>
                <div class="col">
                    <img src="assets/mp.png" width="110px" class="mb-2">
                </div>
                <div class="cho-container col mb-2"></div>
            </div>
        </div>
    </div>
    <script>
    const mp = new MercadoPago('TEST-b577e8cb-cc3d-49c4-86aa-8a6b26d7c8b2', {
        locale: 'es-AR'
    });
    mp.checkout({
        preference: {
            id: '<?php echo $preference->id; ?>'
        },
        render: {
            container: '.cho-container',
            label: 'Pagar',
        }
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>