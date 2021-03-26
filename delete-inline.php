<?php

$c_id = $_GET['id'];

$con = mysqli_connect("localhost", "root", "", "shop");
$sql = "DELETE FROM category WHERE cid = {$c_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/Assignment4/list_categories.php");


mysqli_close($con);