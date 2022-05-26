<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 550px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {
        height: auto;
      }
    }
  </style>
</head>

<body>
      <br>

      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-4">
            <div class="well">
              <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input type="text" class="form-control" name="tensanpham">
                </div>
                <div class="form-group">
                  <label>Mã sản phẩm</label>
                  <input type="text" class="form-control" name="masp">
                </div>
                <div class="form-group">
                  <label>Giá sản phẩm</label>
                  <input type="number" class="form-control" name="giasp">
                </div>
                <div class="form-group">
                  <label>Số lượng</label>
                  <input type="text" class="form-control" name="soluong">
                </div>
                <div class="form-group">
                  <label>Hình ảnh</label>
                  <input type="file" class="form-control" name="hinhanh">
                </div>
                <div class="form-group">
                  <label>Tóm tắt</label>
                  <textarea class="form-control" rows="5" name="tomtat"></textarea>
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea class="form-control" rows="5" name="noidung"></textarea>
                </div>
                <div class="form-group">
                  <label>Loại sản phẩm</label>
                  <select class="form-control" name="danhmuc">
                        <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        ?>
                          <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                        <?php
                        }
                        ?>
                  </select>
                  </div>
                  <div class="form-group">
                      <label>Tình trạng</label>
                      <select class="form-control" name="tinhtrang">
                          <option value="1">Kích hoạt</option>
                          <option value="0">Ẩn</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary" name="themsanpham">Thêm Sản Phẩm</button>
              </form>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="well">
              <!-- danh sach san pham -->
              <?php
              $sql_lietke_sp = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
              $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
              ?>
              <h3 style="text-align:center;">Danh sách sản phẩm</h3>
              <table class="table table-striped">
              <tr>
                  <th>Id</th>
                  <th>Tên sản phẩm</th>
                  <th>Hình ảnh</th>
                  <th>Giá</th>
                  <th>Số lượng</th>
                  <th>Loại</th>
                  <th>Mã sản phẩm</th>
                  <th>Tóm tắt</th>
                  <th>Trạng thái</th>
                  <th>Quản lý</th>
              </tr>
              <?php
              $i = 0;
              while ($row = mysqli_fetch_array($query_lietke_sp)) {
                $i++;
              ?>
              <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $row['tensanpham'] ?></td>
                  <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="70px" height="60px"></td>
                  <td><?php echo $row['giasp'] ?></td>
                  <td><?php echo $row['soluong'] ?></td>
                  <td><?php echo $row['tendanhmuc'] ?></td>
                  <td><?php echo $row['masp'] ?></td>
                  <td><?php echo $row['tomtat'] ?></td>
                  <td><?php if ($row['tinhtrang']) {
                        echo 'Kích hoạt';
                      } else {
                        echo 'Ẩn';
                      } ?></td>
                  <td>
                      <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>" class="btn btn-success" role="button">sửa</a>
                      <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" class="btn btn-danger" role="button">xóa</a>
                  </td>
              </tr>
              <?php
              }
              ?>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>