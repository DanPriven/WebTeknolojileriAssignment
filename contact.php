<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>
<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$language = $_POST["language"];

echo "<h1>Contact Information</h1>";

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Phone: " . $phone . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Favorite Language: " . $language . "<br>";

if(isset($_POST["terms"])) {
    echo "Terms accepted";
}
?>
</body>
</html>
