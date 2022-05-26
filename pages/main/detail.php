<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet); 
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="Image">
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold"><?php echo $row_chitiet['tensanpham'] ?></h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 đánh giá)</small>
                </div>
                <h3 class="font-weight-semi-bold mb-4"><?php echo number_format($row_chitiet['giasp'],0,',','.').' VNĐ' ?></h3>
                <p class="mb-4"><?php echo $row_chitiet['tomtat'] ?></p>
                <div class="d-flex mb-3">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Còn hàng:</p>
                </div>
                <div class="d-flex mb-4">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Ưu đãi:</p>
                    <form>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="color-1" name="color">
                            <label class="custom-control-label" for="color-1">Thanh toán VNPAY-QR nhận thêm ưu đãi</label>
                        </div>
                    </form>
                </div>
                <div class="d-flex align-items-center mb-4 pt-2">
                    <input type="submit" class="btn btn-primary px-3" name="themgiohang" value="Thêm giỏ hàng">
                </div>
                <div class="d-flex pt-2"></div>
            </div>
        </form>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Nội dung</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Thông tin</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Đánh giá (50)</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Mô tả sản phẩm</h4>
                    <p><?php echo $row_chitiet['noidung'] ?></p>
                    <p></p>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <h4 class="mb-3">Thông tin sản phẩm</h4>
                    <p>Thông tin sản phẩm...</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Thông tin 1
                                </li>
                                <li class="list-group-item px-0">
                                    Thông tin 2
                                </li>
                                <li class="list-group-item px-0">
                                    Thông tin 3
                                </li>
                                <li class="list-group-item px-0">
                                    Thông tin 4
                                </li>
                                </ul> 
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Thông tin 5
                                </li>
                                <li class="list-group-item px-0">
                                    Thông tin 6
                                </li>
                                <li class="list-group-item px-0">
                                    Thông tin 7
                                </li>
                                <li class="list-group-item px-0">
                                    Thông tin 8
                                </li>
                                </ul> 
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-4">1 đánh giá cho "<?php echo $row_chitiet['tensanpham'] ?>"</h4>
                            <div class="media mb-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>THAI_NGUYEN_DEV<small> - <i>23 May 2022</i></small></h6>
                                    <div class="text-primary mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>Sản phẩm tốt.......sản phẩm tốt........</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-4">Gửi đánh giá</h4>
                            <small></small>
                            <div class="d-flex my-3">
                                <p class="mb-0 mr-2">Xếp hạng * :</p>
                                <div class="text-primary">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="message">Đánh giá của bạn *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Tên của bạn *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email của bạn *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Gửi đánh giá" class="btn btn-primary px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
<!-- Shop Detail End -->