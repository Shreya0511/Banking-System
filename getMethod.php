<html>
<head><title>
Directed From post Method Example
</title></head>
<body>
Welcome
<?php
echo $_POST["fname"]." ".$_POST["lname"].".";
echo "<br>Length of your first name: ".
strlen($_POST["fname"]);
echo "<br>Length of your last name: ".
strlen($_POST["lname"]);


?>
</body></html>