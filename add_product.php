<?php
include "db_connection.php"

$title = $_POST["title"];
$price = $_POST["price"];



$sql = "INSER INTO product VALUS ($title,$price)";

if($conn->query($sql) === TRUE){
    echo"dodałeś ogłoszenie";
}
$conn->close();
?>