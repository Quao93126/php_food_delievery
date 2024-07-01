<?php
include '../includes/connect.php';

$name = $_POST['name'];
$created = date('Y-m-d');
$status = 1;
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$sql = "INSERT INTO category (name, image, created, status) VALUES ('$name', '$image','$created', '$status')";
$con->query($sql);
if(!$con)
{
    echo mysqli_error($con);
}
var_dump($con->error);
header("location: ../category.php");
?>