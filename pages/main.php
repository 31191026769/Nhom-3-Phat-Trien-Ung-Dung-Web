<?php 
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = '';
    }

    if($tam=='danhmucsanpham'){
        //include('main/danhmuc.php');
        include('main/shop.php');
    }elseif($tam=='trangsanpham'){
        include('main/sanpham.php');
    }elseif($tam=='giohang'){
        include('main/cart.php');
    }elseif($tam=='tintuc'){
        include('main/tintuc.php');
    }elseif($tam=='lienhe'){
        include('main/lienhe.php');
    }elseif($tam=='sanpham'){
        include('main/detail.php');
    }elseif($tam=='dangky'){
        include('main/dangky.php');
    }elseif($tam=='thanhtoan'){
        include('main/thanhtoan.php');
    }elseif($tam=='timkiem'){
        include('main/timkiem.php');
    }elseif($tam=='dangnhap'){
        include('main/dangnhap.php');
    }else{
        include('main/index.php');
    }
?>