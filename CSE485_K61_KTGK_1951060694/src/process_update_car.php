<?php
$id = $_POST['vehicle_id'];
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
$sql = "UPDATE cars SET license_no='$license',model='$model',year='$year',ctype='$ctype',drate='$drate',
wrate='$wrate',status='$status' WHERE vehicle_id = '$id'";

$result = mysqli_query($conn, $sql);

// Bước 3:
if ($result) {
    header('location: ./index.php');
} else {
     header('location:error.php');
    // echo 'Lỗi';
}

?>