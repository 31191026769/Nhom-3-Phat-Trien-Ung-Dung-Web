<?php 
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?>
  <nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Team3Web</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="http://localhost:81/team3_web/">Trang chủ</a></li>
          <li><a href="#">Thống kê doanh thu</a></li>
          <li><a href="#">Phiếu nhập</a></li>
          <li><a href="#">Phiếu chi</a></li>
          <li><a href="#">Công nợ</a></li>
          <li><a href="#">Chấm công</a></li>
          <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý loại sản phẩm</a></li>
          <li><a href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
          <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý bài viết</a></li>
          <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục bài viết</a></li>
          <li><a href="index.php?dangxuat=1">Đăng xuất : <?php 
          if(isset($_SESSION['dangnhap'])){
            echo $_SESSION['dangnhap'];
          }
          ?></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-2 sidenav hidden-xs">
        <h2>Team3Web</h2>
        <ul class="nav nav-pills nav-stacked">
          <li><a href="http://localhost:81/team3_web/">Trang chủ</a></li>
          <li><a href="#">Thống kê doanh thu</a></li>
          <li><a href="#">Phiếu nhập</a></li>
          <li><a href="#">Phiếu chi</a></li>
          <li><a href="#">Công nợ</a></li>
          <li><a href="#">Chấm công</a></li>
          <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý loại sản phẩm</a></li>
          <li><a href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
          <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý bài viết</a></li>
          <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục bài viết</a></li>
          <li><a href="index.php?dangxuat=1">Đăng xuất : <?php 
          if(isset($_SESSION['dangnhap'])){
            echo $_SESSION['dangnhap'];
          }
          ?></a></li>
        </ul><br>
      </div>