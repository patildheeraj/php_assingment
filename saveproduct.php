<?php
$p_name = $_POST['firstname'];
$p_price = $_POST['price'];
$p_img = $_POST['img'];
$p_category = $_POST['category'];

$con = mysqli_connect("localhost", "root", "", "shop");
$sql = "INSERT INTO product(pname,pprice,pimg,pcategory) VALUES ('{$p_name}','{$p_price}','{$p_img}','{$p_category}')";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/Assignment4/list_products.php");

mysqli_close($con);
?>