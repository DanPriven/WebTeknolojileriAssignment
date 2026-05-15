<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>
<?php

$email = $_POST["email"];
$password = $_POST["password"];

$correctEmail = "b241210570@sakarya.edu.tr";
$correctPassword = "b241210570";

if($email == $correctEmail && $password == $correctPassword) {

    echo "<h1>Welcome b241210570</h1>";

}

else {

    echo "<h1>Wrong information</h1>";

}

?>
<br>
<br>
<a href="index.html">Back to Login Page</a>
</body>
</html>
