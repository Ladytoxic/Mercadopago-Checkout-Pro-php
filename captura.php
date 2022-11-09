<?php

$payment = $_GET['payment_id'];
$status = $_GET['status'];
$payment_type = $_GET['payment_type'];
$order_id = $_GET['merchant_order_id'];

echo "<h3>Pago Relizado</h3>";
echo "<p>Id del pago:</p>", $payment,'<br>';
echo "<p>Estado del pago: </p>", $status,'<br>';
echo "<p>Pago con: </p>", $payment_type,'<br>';
echo "<p>Orden de pago: </p>", $order_id,'<br>';