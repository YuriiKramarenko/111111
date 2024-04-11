<?php
include "db_conection.php";

$title = $_POST["title"];
$price = $_POST["price"];



$sql = "INSERT INTO `product` VALUES ($title,$price)";

if($conn->query($sql) === TRUE) {
    echo "dodałeś ogłoszenie";
}
$conn->close();
?>