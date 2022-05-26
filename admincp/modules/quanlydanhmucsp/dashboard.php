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
<!-- //this is menu -->
      <br>

      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-4">
            <div class="well">
              <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
                <div class="form-group">
                  <label>Tên loại trang sức</label>
                  <input type="text" class="form-control" name="tendanhmuc">
                </div>
                <button type="submit" class="btn btn-primary" name="themdanhmuc">Thêm loại trang sức</button>
              </form>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="well">
              <!-- danh sach san pham -->
              <?php
              $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
              $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
              ?>
              <h3 style="text-align:center;">Danh sách loại trang sức</h3>
              <table class="table table-striped">
              <tr>
                  <th>Id</th>
                  <th>Tên loại trang sức</th>
                  <th>Quản lý</th>
              </tr>
              <?php
              $i = 0;
              while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
                  $i++;
              ?>
              <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $row['tendanhmuc'] ?></td>
                  <td>
                      <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>" class="btn btn-success" role="button">sửa</a>
                      <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>" class="btn btn-danger" role="button">xóa</a>
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