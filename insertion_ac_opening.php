<?php

$link = mysqli_connect ('localhost', 'root',"", '21bcs195') or die
('Unable to connect the server. ');
$name1 = $_POST['fname'];
$address = $_POST['addresss'];
$city = $_POST['city'];

$insert = "INSERT INTO mastercustomer (CUSTOMER_NAME,
ADDRESS, CITY) VALUES('$name1','$address','$city')";

$results = mysqli_query($link,$insert) or die(mysqli_error($link));

echo "Data inserted successfully!";
?>