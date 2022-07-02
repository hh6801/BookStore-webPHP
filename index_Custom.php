<?php
    session_start();
  require_once('database.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css" href = "style.css">

      body {
      font-family: Helvetica, sans-serif;
      margin: 0;
      padding: 0;
      text-align: center;
      background: #F2F2F2;
    }
    .navbar-expand-sm{
      background-color: #58ACFA;
    }
    .field{
      padding-bottom: 30px;
      padding-right: 10px;
      margin-bottom: 25px;
    }
    .field span{
      float: left;
      padding-top: 17px;
      margin-top: -10px;

    }
    .form-create{
      width: 500px;
      height: 502px;
      background: white;
      border-radius: 25px;
      padding-left: 20px;
      padding-top: 20px;
      margin: auto;
      margin-top: 30px;
    }
    .text-create{
      font-size: 30px;
      font-weight: bold;
      background: #58ACFA;
      margin-left: -20px;
      margin-top: -20px;
      padding: 10px;
      padding-left: 20px;
      border-top-left-radius: 25px;
      border-top-right-radius: 25px;
      color: white;
    }
    .form-control{
      border-radius: 5px;
      margin-right: 25px;
      margin-bottom: -10px;
      float: right;
      width: 300px;
    }
    .create-btn, .return-btn{
      margin-left: 148px;
      background: #2E64FE;
      color: white;
      height: 40px;
      border-radius: 7px;
      border: none;
    }
    .return-btn{
      background: lightgray;
      margin-left: 8px;
      color: black;
      width: 70px;
    }
    .form-control:focus {
    box-shadow: 1px;
    border-color: #01A9DB;
  }
  </style>

  </head>

<body>
  <nav class="navbar navbar-expand-sm navbar-infor">
    <a href="index_login.php" class="navbar-brand"><img src="bookstoreicon.png" class="float-left" width="45px" height="45px"></a>
    <a class="navbar-brand" href="index_login.php"><h3 style="color:white; margin-top: 1px">CỬA HÀNG SÁCH HUY HOÀNG</h3></a>
    <ul class="navbar-nav" style="padding-left: 500px; font-size: 20px">
   
                    <li class="nav-item">
                    <a href="index_manager.php" class="navbar-brand"><i class = "management"><img src="management.png"  width="55px" height="55px" style="padding-left: 15px"></i><div class="shop4">Quản Lý</div></a>
                  </li>
          <li class="nav-item">
            <a class="nav-link" href="edit_profile.php"><i class='fas fa-user-edit' style='font-size:35px;color: white;padding-left: 35px'></i><div class="shop3">Hồ sơ cá nhân</div></a></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" style="margin-top: 5px;padding-left: 60px; color:white;">Đăng xuất</a>
          </li>
        </ul>
    </nav>

    <form class="form-create">
    <div class="text-create">Sửa nhân viên</div>
    <div class="field" style="margin-top: 30px;">
      <span>Mã nhân viên: </span>
      <input type="text" name="manv" class="form-control">
    </div>
    <div class="field">
      <span>Tên nhân viên: </span>
      <input type="text" name="tennv" class="form-control">
    </div>
    <div class="field">
      <span>Giới tính: </span>
      <input type="text" name="gioitinh" class="form-control">
    </div>
    <div class="field">
      <span>Ngày sinh: </span>
      <input type="text" name="ngaysinh" class="form-control">
    </div>
    <div class="field">
      <span>Vị trí: </span>
      <input type="text" name="vitri" class="form-control">
    </div>
    <div class="field">
      <span>Chức vụ: </span>
      <input type="text" name="chucvu" class="form-control">
    </div>
    <div style="padding-top: 10px;">
    <a href="index_Edit_Custom.php" style="float: left; padding-top: 10px;">Quay lại</a>
    <button class="create-btn" type="submit" name="update">Cập nhật</button>
    <button class="return-btn">Quay lại</button>
  </div>
  </form>

</body>
</html>