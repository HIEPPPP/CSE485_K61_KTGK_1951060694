<?php
    include './config.php';
    $id = $_GET['id'];
    $sql = "DELETE from cars WHERE vehicle_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result > 0) {
        header("Location: ./index.php");
    }
?>