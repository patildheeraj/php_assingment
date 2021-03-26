<?php

$p_id = $_GET['id'];

$con = mysqli_connect("localhost", "root", "", "shop");
$sql = "DELETE FROM product WHERE pid = {$p_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/Assignment4/list_products.php");


mysqli_close($con);