<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <p>Giỏ hàng : <?php
            if(isset($_SESSION['dangky'])){
                echo $_SESSION['dangky'];
            }
            ?></p>
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                <?php 
                if(isset($_SESSION['cart'])){
                    $i = 0;
                    $tongtien = 0;
                    foreach($_SESSION['cart'] as $cart_item){
                        $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                        $tongtien += $thanhtien;
                        $i++;
                ?>
                    <tr>
                        <td class="align-middle"><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="50px" height="70px"><?php echo $cart_item['tensanpham']; ?></td>
                        <td class="align-middle"><?php echo number_format($cart_item['giasp'],0,',','.').' VNĐ'; ?></td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>" class="btn btn-sm btn-primary btn-minus" role="button"><i class="fa fa-minus"></i></a>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center" value="<?php echo $cart_item['soluong']; ?>">
                                <div class="input-group-btn">
                                    <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>" class="btn btn-sm btn-primary btn-minus" role="button"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle"><?php echo number_format($thanhtien,0,',','.').' VNĐ'; ?></td>
                        <td class="align-middle">
                            <a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>" class="btn btn-sm btn-primary" role="button"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                    <?php
                    }else{
                    ?>
                    <tr>
                        <td class="align-middle" colspan="5">Giỏ hàng trống!</td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
                
            </table>
        </div>
        <?php 
        if(isset($_SESSION['cart'])){
            $i = 0;
            $tongtien = 0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                $tongtien += $thanhtien;
                $i++;
        ?>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Mã giảm giá">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Áp dụng</button>
                    </div>
                </div>
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Giỏ hàng</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Tổng tiền</h6>
                        <h6 class="font-weight-medium"><?php echo number_format($tongtien,0,',','.').' VNĐ'; ?></h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Phí ship</h6>
                        <h6 class="font-weight-medium">0 VNĐ</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Tổng tiền phải trả</h5>
                        <h5 class="font-weight-bold"><?php echo number_format($tongtien,0,',','.').' VNĐ'; ?></h5>
                    </div>
                    <?php
                        if(isset($_SESSION['dangky'])){
                    ?>
                        <a href="index.php?quanly=thanhtoan" class="btn btn-block btn-primary my-3 py-3" role="button">Đặt hàng</i></a>
                    <?php
                        }else{
                    ?>
                        <a href="index.php?quanly=dangky" class="btn btn-block btn-primary my-3 py-3" role="button">Đăng ký đặt hàng</i></a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
        <?php
        }else{
        ?>
        <div class="card border-secondary mb-5">
            <div class="card-header bg-secondary border-0">
                <h4 class="font-weight-semi-bold m-0">Giỏ hàng</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3 pt-1">
                    <h6 class="font-weight-medium">Tổng tiền</h6>
                    <h6 class="font-weight-medium">0</h6>
                </div>
                <div class="d-flex justify-content-between">
                    <h6 class="font-weight-medium">Phí ship</h6>
                    <h6 class="font-weight-medium">0 VNĐ</h6>
                </div>
            </div>
            <div class="card-footer border-secondary bg-transparent">
                <div class="d-flex justify-content-between mt-2">
                    <h5 class="font-weight-bold">Tổng tiền phải trả</h5>
                    <h5 class="font-weight-bold">0</h5>
                </div>
                <button class="btn btn-block btn-primary my-3 py-3">Thanh toán</button>
            </div>
        </div>
        <?php 
        }
        ?>
    </div>
</div>
<!-- Cart End -->