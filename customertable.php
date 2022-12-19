<?php
$link = mysqli_connect ('localhost', 'root', '','21bcs195') or die
('Unable to connect the server. ');
$row = " CREATE TABLE depositor( customer_name
VARCHAR(15), account_number INTEGER,PRIMARY
KEY(customer_name, account_number),FOREIGN
KEY(customer_name) REFERENCES customer(customer_name),
FOREIGN KEY(account_number) REFERENCES
account(account_number))";

$results = mysqli_query($link,$row);
if($results == FALSE)

echo mysqli_error($link);

else

echo "Depositor table created.";

?>