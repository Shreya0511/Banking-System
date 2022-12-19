<?php
$link = mysqli_connect('localhost', 'root','', '21bcs195') or die ('Unable to connect the server.');

$row = "CREATE TABLE customer(customer_name VARCHAR(15) NOT NULL, Customer_street VARCHAR(15), Customer_city
VARCHAR(15), PRIMARY KEY(Customer_name))";

$results = mysqli_query($link,$row);
if($results == false)
echo mysqli_error($link);
else
echo "Customer table created";
?>