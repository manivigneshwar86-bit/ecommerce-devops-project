<?php

$name = $_POST['name'];
$product = $_POST['product'];

$data = "Name: $name , Product: $product \n";

file_put_contents("orders.txt", $data, FILE_APPEND);

shell_exec("aws s3 cp orders.txt s3://ecommerce-form-storage/orders-apache.txt");

echo "Data Submitted Successfully";

?>
