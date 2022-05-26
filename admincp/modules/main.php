<?php 
    if(isset($_GET['action']) && $_GET['query']){
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }else{
        $tam = '';
        $query = '';
    }

    if($tam=='quanlydanhmucsanpham' && $query=='them'){
        //include('modules/quanlydanhmucsp/themsanpham.php');
        include('modules/quanlydanhmucsp/dashboard.php');
    }elseif($tam=='quanlydanhmucsanpham' && $query=='sua'){
        include('modules/quanlydanhmucsp/suadanhmuc.php');
    }elseif($tam=='quanlysp' && $query=='them'){
        include('modules/quanlysp/themsanpham.php');
    }elseif($tam=='quanlysp' && $query=='sua'){
        include('modules/quanlysp/suasanpham.php');
    }else{
        include('modules/quanlydanhmucsp/dashboard.php');
    }
?>