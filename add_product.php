<?php
include "db_conection.php";

$title = $_POST["title"];
$price = $_POST["price"];



$sql = "INSERT INTO `product` (`title`, `price`) VALUES ('$title', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "dodałeś ogłoszenie";
} else {
    echo "Błąd podczas dodawania produktu" . $conn->error;
}
$conn->close();
?>