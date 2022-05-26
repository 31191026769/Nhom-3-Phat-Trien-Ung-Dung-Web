<?php
    //session_start();
    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $diachi = $_POST['diachi'];
        $matkhau = md5($_POST['matkhau']);
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO `tbl_dangky`(`tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES ('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
        if($sql_dangky){
            echo '<p style="color:green;text-align: center;">Bạn đã đăng ký thành công...</p>';
            $_SESSION['dangky'] = $tenkhachhang;
            //header("Location:index.php?quanly=giohang");
        }
    }
?>
<div style="text-align: center;">
    <form action="" method="POST">
        <table style="border:1px solid white; margin:0 auto;" width="50%">
            <tr>
                <td colspan="2" style="text-align: center;">Đăng ký</td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" size="50" name="hovaten"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" size="50" name="email"></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="text" size="50" name="dienthoai"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" size="50" name="diachi"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" size="50" name="matkhau"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="dangky" value="Đăng ký"></td>
            </tr>
        </table>
    </form>
</div>