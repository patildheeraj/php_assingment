<?php
$c_name = $_POST['categoryname'];


$con = mysqli_connect("localhost", "root", "", "shop");
$sql = "INSERT INTO category(cname) VALUES ('{$c_name}')";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/Assignment4/list_categories.php");

mysqli_close($con);