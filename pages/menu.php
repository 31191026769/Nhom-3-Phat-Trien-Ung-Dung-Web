<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Loại sản phẩm</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>

            <?php 
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            ?>
            <?php
            if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
                unset($_SESSION['dangky']);
            }
            ?>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <div class="nav-item dropdown"></div>
                    <?php
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>" class="nav-item nav-link"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
                    <?php
                        }
                    ?>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Team3</span>Web</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Trang Chủ</a>
                        <a href="index.php?quanly=trangsanpham" class="nav-item nav-link">Sản phẩm</a>
                        <a href="index.php?quanly=giohang" class="nav-item nav-link">Giỏ hàng</a>
                        <a href="checkout.html" class="nav-item nav-link">Thanh toán</a>
                        <a href="contact.html" class="nav-item nav-link">Giới thiệu</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <a href="admincp/login.php" class="nav-item nav-link">Đăng nhập Admin</a>
                        <?php
                            if(isset($_SESSION['dangky'])){
                        ?>
                        <a href="index.php?dangxuat=1" class="nav-item nav-link">Đăng xuất</a>
                        <?php
                            }else{
                        ?>
                        <a href="index.php?quanly=dangnhap" class="nav-item nav-link">Đăng nhập</a>
                        <a href="index.php?quanly=dangky" class="nav-item nav-link">Đăng ký</a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </nav>
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center"></div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>