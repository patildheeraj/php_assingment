<?php

$c_id = $_POST['cid'];
$c_name = $_POST['firstname'];

$con = mysqli_connect("localhost", "root", "", "shop") or die("Connection failed");
$sql = "UPDATE category SET cname = '{$c_name}' WHERE cid = {$c_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/Assignment4/list_categories.php");

mysqli_close($con);