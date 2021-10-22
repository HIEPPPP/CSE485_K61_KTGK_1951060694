<?php
$license = $_POST['license_no'];
$model = $_POST['model'];
$year = $_POST['year'];
$ctype = $_POST['ctype'];
$drate = $_POST['drate'];
$wrate = $_POST['wrate'];
$status = $_POST['status'];


//Bước 1:
include 'config.php';

// Bước 2:
$sql = "INSERT INTO cars(license_no, model, year, ctype, drate, wrate, status)
    VALUES ('$license','$model','$year','$ctype','$drate','$wrate','$status')";

$result = mysqli_query($conn, $sql);

// Bước 3:
if ($result > 0) {
    header('location:index.php');
} else {
    echo 'lỗi';
}

mysqli_close($conn);


?>