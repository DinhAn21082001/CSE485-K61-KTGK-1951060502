<?php

?>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">DANH SÁCH NHÂN VIÊN AZ</h5>
        <div>
            <a class="btn btn-primary" href="add_employee.php">Thêm Nhân Viên</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Chức vụ</th>
                    <th scope="col">Phòng ban</th>
                    <th scope="col">Lương</th>
                    <th scope="col">Ngày vào làm</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            < <main>
                <div class="container">
                    <h5 class="text-center text-primary mt-5">DANH SÁCH NHÂN VIÊN AZ</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Mã nhân viên</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Chức vụ</th>
                                <th scope="col">Phòng Ban</th>
                                <th scope="col">Lương</th>
                                <th scope="col">Ngày vào làm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //  Kết nối Database Server
                            $conn = mysqli_connect('localhost', 'root', '', '1951060502_employees');
                            if (!$conn) {
                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                            }
                            // Thực hiện truy vấn
                            $sql = "SELECT * FROM db_nhanvien";
                            $result = mysqli_query($conn, $sql);
                            //  Xử lý kết quả truy vấn
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['STT']; ?></th>
                                        <td><?php echo $row['maNV']; ?></td>
                                        <td><?php echo $row['hovaten']; ?></td>
                                        <td><?php echo $row['chucvu']; ?></td>
                                        <td><?php echo $row['phongban']; ?></td>
                                        <td><?php echo $row['luong']; ?></td>
                                        <td><?php echo $row['ngayvaolam']; ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
</main>

<?php
include("template/footer.php");
?>