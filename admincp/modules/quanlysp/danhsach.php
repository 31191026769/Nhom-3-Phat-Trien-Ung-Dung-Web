
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
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">THAI_NGUYEN_DEV</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý loại sản phẩm</a></li>
        <li><a href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý bài viết</a></li>
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục bài viết</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>THAI_NGUYEN_DEV</h2>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý loại sản phẩm</a></li>
        <li><a href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý bài viết</a></li>
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục bài viết</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>
