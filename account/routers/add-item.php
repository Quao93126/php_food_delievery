<?php
include '../includes/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$sql = "INSERT INTO items (`name`, `price`, `image`, `catetory_name`) VALUES ('$name', $price,'$image', '$category')";
$con->query($sql);
if(!$con)
{
    echo mysqli_error($con);
}
var_dump($con->error);
header("location: ../admin-page.php");
?>