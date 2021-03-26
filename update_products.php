<?php

$p_id = $_POST['pid'];
$p_name = $_POST['firstname'];
$p_price = $_POST['price'];
$p_img = $_POST['pimg'];
$p_category = $_POST['category'];

$con = mysqli_connect("localhost","root","","shop") or die("Connection failed");
$sql = "UPDATE product SET pname = '{$p_name}', pprice = '{$p_price}', pimg = '{$p_img}', pcategory = '{$p_category}' WHERE pid = {$p_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/Assignment4/list_products.php");

mysqli_close($con);