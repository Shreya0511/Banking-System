<?php
$link = mysqli_connect ('localhost', 'root', '','21BCS195') or die
('Unable to connect the server.');

$row="CREATE TABLE customer( customer_name VARCHAR(15)
NOT NULL, customer_street VARCHAR(15), customer_city
VARCHAR(15), PRIMARY KEY(customer_name))";
$results = mysqli_query($row);
if($results == FALSE)

echo mysqli_error();

else

echo "Customer table created.";