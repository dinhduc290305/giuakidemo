<?php
require_once('connnect.php');
global $conn;
$hmid=$_GET['hid'];
require_once("index.php");
$edit_sql="SELECT * FROM danhsachlop WHERE id='$hmid'";
$result=mysqli_query($conn,$edit_sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa nội dung</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading text-center">
            <h2><strong>Bảng sửa nội dung</strong></h2>
        </div>
        <div class="panel-body">
            <form action="update.php" method="post">
                <input type="hidden" name="oid" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" name="id" placeholder="Điền ID" class="form-control" value="<?php echo $row['id']?>">
                </div>
                <div class="form-group">
                    <label for="fullname">Họ và tên</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Điền họ và tên" class="form-control" value="<?php echo $row['fullname']?>">
                </div>
                <div class="form-group">
                    <label for="gob">Ngày sinh</label>
                    <input type="date" id="gob" name="gob" class="form-control" value="<?php echo $row['gob']?>">
                </div>
                <div class="form-group">
                    <label>Giới tính</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="male" value="male"> Nam
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="female" value="female"> Nữ
                    </label>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Điền Email" class="form-control" value="<?php echo $row['email']?>">
                </div>
                <div class="form-group">
                    <label for="group_id">ID nhóm</label>
                    <input type="text" id="group_id" name="group_id" placeholder="Điền ID nhóm" class="form-control" value="<?php echo $row['group_id']?>">
                </div>
                <div class="form-group">
                    <label for="position">Chức vụ</label>
                    <input type="text" id="position" name="position" placeholder="Điền chức vụ" class="form-control" value="<?php echo $row['position']?>">
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="number" id="phone" name="phone" placeholder="Điền số điện thoại" class="form-control" value="<?php echo $row['phone']?>">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">Cập nhật thông tin</button>
                    <button type="reset" class="btn btn-danger btn-lg">Hủy</button>
                    <a href="display.php" class="btn btn-info">Quay lại trang chủ</a>

                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

