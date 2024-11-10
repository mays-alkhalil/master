<?php

include('connection.php');

$stmt = $conn->prepare("select * from products where product_category='coats' limit 4");

$stmt->execute();

$coats_products = $stmt->get_result();


?>