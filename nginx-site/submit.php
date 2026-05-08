<?php

$customer = $_POST['customer'];
$item = $_POST['item'];

$data = "Customer: $customer , Item: $item \n";

file_put_contents("orders.txt", $data, FILE_APPEND);

shell_exec("aws s3 cp orders.txt s3://ecommerce-form-storage/orders-nginx.txt");

echo "Data Submitted Successfully";

?>
