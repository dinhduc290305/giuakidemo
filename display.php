<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center ">BẢNG DỮ LIỆU</h2>
    <br>
    <a href="index.html" class="btn btn-info">Thêm</a>
    <br>
    <form action="">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Email</th>
                <th>Nhóm</th>
                <th>Vị trí</th>
                <th>Số điện thoại</th>
                <th>Tùy chọn</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include("index.php");
            require_once("connnect.php");
            global $conn;
            $list= "SELECT * FROM `danhsachlop`";
            $result=mysqli_query($conn,$list);
            while($r = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $r['id'] ?></td>
                    <td><?php echo $r['fullname'] ?></td>
                    <td><?php echo $r['gob'] ?></td>
                    <td><?php echo $r['gender'] ?></td>
                    <td><?php echo $r['email'] ?></td>
                    <td><?php echo $r['group_id'] ?></td>
                    <td><?php echo $r['position'] ?></td>
                    <td><?php echo $r['phone'] ?></td>
                    <td>
                        <a href="edit.php?hid=<?php echo $r['id'] ?>" class="btn btn-warning">Sửa</a> <a class="btn btn-danger" href="delete.php?hid=<?php echo $r['id'] ?>">Xóa</a>
                    </td>

                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </form>
</div>

</body>
</html>
