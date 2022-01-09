<?php
require 'view/template/header.php';
//file hiển thị thông báo lỗi
require_once 'view/commons/message.php';
?>
<main>
    <div class="container">
        <div class="row">
            <div class="">
                <p><?php echo isset($_GET['tt']) ? $_GET['tt'] : ''?></p>
            </div>
            <a href="index.php?controller=docgia&action=index" class="text-decoration-none"><i class="bi bi-arrow-left"></i> Quay Lại</a>
            <div class="col-md-12 d-flex justify-content-center mb-3">
                <h3>Danh Sách Chi Tiết Thư Viện</h3>
            </div>
            <div class="col-md-12 mb-3">
                <a href="index.php?controller=docgia&action=add"><button class="btn btn-primary">Thêm độc giả</button></a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã độc giả</th>
                            <th scope="col">Tên độc giả</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Năm sinh</th>
                            <th scope="col">Nghề nghiệp</th>
                            <th scope="col">Ngày cấp thẻ</th>
                            <th scope="col">Ngày hết hạn</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($bdonor as $bd) {
                            $urlEdit =
                            "index.php?controller=docgia&action=edit&bdid=" . $madg['madg'];
                            $urlDelete =
                            "index.php?controller=docgia&action=delete&bdid=" . $madg['madg'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $madg['madg'] ?></th>
                                <td><?php echo $hovaten['hovaten'] ?></td>
                                <td><?php echo $bd['gioitinh'] ?></td>
                                <td><?php echo $bd['namsinh'] ?></td>
                                <td><?php echo $bd['nghenghiep'] ?></td>
                                <td><?php echo $bd['"ngaycapthe'] ?></td>
                                <td><?php echo $bd['ngayhethan'] ?></td>
                                <td><?php echo $bd['diachi'] ?></td>
                                <td><a href="<?php echo $urlEdit ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo $urlDelete ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>