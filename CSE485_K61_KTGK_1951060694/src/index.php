<?php
 include './header.php';
?>
    <main>
            <table class="table">
        <thead>
            <tr>
            <th scope="col">Mã phương tiện</th>
            <th scope="col">Model</th>
            <th scope="col">Giá cho thuê theo ngày($)</th>
            <th scope="col">Giá cho thuê theo tuần($)</th>
            <th scope="col">Trạng thái</th>
            </tr>
        </thead>
        <tbody>
                <!-- Dữ liệu thay đổi theo CSDL -->
                <?php
                //quy trình 4 bước
                //B1:Đã tạo sẵn, gọi lại: Kết nối cơ sở dữ liệu
                include './config.php';
                //b2: Thực hiện truy vấn 
                $sql = " SELECT  vehicle_id, model, drate,  wrate, `status` FROM cars"; //khai báo biến để lưu câu lệnh
                $result= mysqli_query($conn, $sql);//lưu kết quả về vào biến result
                //conn là đối số 1 , sql là đôi số 2
                //b3:Phân tích và xử lí kết quả (nếu kq trả về 0=> truy vấn thất bại,khác 0=> truy vấn thành công )
                if(mysqli_num_rows($result)>0) {
                    while($row=mysqli_fetch_assoc($result))
                    {
                            echo '<tr>';
                            echo '<th scope="row">'.$row['vehicle_id'].'</th>'; 
                            echo '<td>'.$row['model'].'</td>';
                            echo '<td>'.$row['drate'].'</td>';
                            echo '<td>'.$row['wrate'].'</td>';
                            echo '<td>'.$row['status'].'</td>';
                            echo '<td><a href="Detail.php?id='.$row['vehicle_id'].'">Chi tiết</a></td>';
                            echo '</tr>';
                    }
                }
            ?>
            
        </tbody>
        </table>
    </main>


    <?php
 include './footer.php';
?>