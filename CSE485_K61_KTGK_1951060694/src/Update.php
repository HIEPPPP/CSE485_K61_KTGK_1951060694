<?php
include 'header.php';
include 'config.php';
?>

<?php
$id = $_GET['id'];
echo $id;
$sql = "SELECT * FROM `cars` WHERE vehicle_id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$license = $row['license_no'];
$model = $row['model'];
$year = $row['year'];
$ctype = $row['ctype'];
$drate = $row['drate'];
$wrate = $row['wrate'];
$status = $row['status'];
?>
<main class="container vh-100">
    <div class="row d-flex justify-content-center h-100">
        <div class="col-12">
            <div class="text-center">
                <h1 class="mt-3 mb-4">Update Car</h1>
            </div>
            <form action="process_update_car.php" method="POST">

                <table class="">
                    <tr>
                        <td class="p-2"> Biển số xe: </td>
                        <td>
                            <input type="text" name="license_no" value="<?php echo $license ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2"> Model: </td>
                        <td>
                            <input type="text" name="model" value="<?php echo $model ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Năm sản xuất: </td>
                        <td>
                            <input type="year" name="year" value="<?php echo $year ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2">Kiểu oto: </td>
                        <td>
                            <input type="text" name="ctype" value="<?php echo $ctype ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Giá cho thuê theo ngày: </td>
                        <td>
                            <input type="double" name="drate" value="<?php echo $drate ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2">  Giá cho thuê theo tuần: </td>
                        <td>
                            <input type="double" name="wrate" value="<?php echo $wrate ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Trạng thái: </td>
                        <td>
                            <input type="text" name="status" value="<?php echo $status ?>">
                        </td>
                    </tr>


                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="vehicle_id" value="<?php echo $id ?>">

                            <input type="submit" name="submit" value="Update Car" class="btn btn-success">
                        </td>
                    </tr>

                </table>

            </form>
        </div>
    </div>
</main>
<?php
include 'footer.php';