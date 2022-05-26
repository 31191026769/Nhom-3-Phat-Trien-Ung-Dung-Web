<?php
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['matkhau']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);

        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            echo '<p style="color:blue;text-align: center;">Đăng nhập thành công...</p>';
        }else{
            echo '<p style="color:red;text-align: center;">Email hoặc mật khẩu sai, vui lòng nhập lại!</p>';
        }
    }
?>
<div style="text-align: center;">
    <form action="" method="POST">
        <table style="border:1px solid white; margin:0 auto;" width="50%">
            <tr>
                <td colspan="2" style="text-align: center;">Đăng nhập khách hàng</td>
            </tr>
            <tr>
                <td>Tài khoản</td>
                <td><input type="text" size="50" name="email"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" size="50" name="matkhau"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>
</div>