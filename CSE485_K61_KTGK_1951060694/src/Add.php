<?php
 include './header.php';
 include 'config.php';
?>
<main class="container vh-100">
    <div class="row d-flex justify-content-center h-100">
        <div class="col-12">
            <div class="text-center">
                <h1 class="mt-3 mb-4">ADD CAR</h1>
            </div>
            <form action="process_add_car.php" method="POST">
                <table class="">
                    <tr>
                        <td class="p-2"> Biển số xe: </td>
                        <td>
                            <input type="text" name="license_no" placeholder="Ex: 99F-970.22">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2"> Model: </td>
                        <td>
                            <input type="text" name="model" placeholder="Ex: Mustang, Fiesta, Beetle...">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Năm sản xuất: </td>
                        <td>
                            <input type="year" name="year" >
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Kiểu oto: </td>
                        <td>
                            <input type="text" name="ctype" >
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Giá cho thuê theo ngày: </td>
                        <td>
                            <input type="double" name="drate" >
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Giá cho thuê theo tuần: </td>
                        <td>
                            <input type="double" name="wrate">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Trạng thái: </td>
                        <td>
                            <input type="text" name="status" >
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add car" class="btn btn-success">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

<?php
 include './footer.php';
?>