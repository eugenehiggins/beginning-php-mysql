<?php
session_start();
if($_SESSION["userID"] && $_GET['id']){
    
    $sql = "DELETE FROM classicmodels.customers WHERE customers.customerNumber = " . $_GET["id"];

    header("Location: customer-list.php");
    
} else {
    header("Location: index.php");
}