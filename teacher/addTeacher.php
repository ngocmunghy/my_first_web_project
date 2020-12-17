<?php
session_start(); 
require_once('../dbhelp.php');

if(!empty($_POST)) {

  if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $id = addslashes($id);
  }

  if(isset($_POST['usr'])) {
    $name = $_POST['usr'];
    $name = addslashes($name);
  }

  if(isset($_POST['age'])) {
    $age = $_POST['age'];
    $age = addslashes($age);
  }

  if(isset($_POST['address'])) {
    $address = $_POST['address'];
    $address = addslashes($address);
  }

  $sql = "insert into giaovien values ('$id','$name','$age','$address')";
  execute($sql);
  header("Location: ./showTeachers.php");
  die(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <title>Register a new teacher</title>
 <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <div class="container" style = "height: auto">
   <header class="row">
    <div class = "shopping-mall">
     <h1>Phần mềm quản lý trường học</h1>
     <!-- <h5>The center point of the professional programming</h5> -->
   </div>
   <img class = "pull-right" src="../image/hust.png"/>
 </header>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../layout.php">
        <span class="glyphicon glyphicon-home"></span> Trang chủ
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="">
            <span class="glyphicon glyphicon-list-alt"></span> Giới thiệu
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/nngocmung9/">
            <span class="glyphicon glyphicon-earphone"></span> Liên hệ
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/nngocmung9/">
            <span class="glyphicon glyphicon-envelope"></span> Góp ý
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/nngocmung9/">
            <span class="glyphicon glyphicon-question-sign"></span> Hỏi đáp
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-user"></span> Tài khoản <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="../user/showUserInfo.php">Thông tin người dùng</a></li>
            <li><a href="../user/changePassword.php">Đổi mật khâu</a></li>
            <li><a href="../user/editUserInfo.php">Cập nhật hồ sơ</a></li>
            <li><a href="../user/logout.php">Đăng xuất</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<div class="container" style = "height: auto">
  <div class = "row">
    <article class="col-sm-9">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="text-center">Register a new teacher</h3>
        </div>
        <div class="panel-body">
          <form method="POST">
            <div class="form-group">
              <label for="id">ID:</label>
              <input type="number" class="form-control" id="id" name="id">
            </div>
            <div class="form-group">
              <label for="usr">Name:</label>
              <input required="true" type="text" class="form-control" id="usr" name="usr">
            </div>
            <div class="form-group">
              <label for="age">Age:</label>
              <input required="true" type="number" class="form-control" id="age" name="age">
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" id="address" name="address">
            </div>
            <button class="btn btn-success">Save</button>
          </form>
        </div>
      </div>

    </article>

    <aside class="col-sm-3">
      <div class = "poly-cart">
        <div class="panel panel-default">
          <div class = "panel-heading">
            <h4 class = "panel-title" align="center" >
              <b>
                <?php 
                echo $_SESSION['name'];
                ?>
              </b>
            </h4>
          </div>
          <div class="panel-body">
            <img src="../image/account.png"/>

          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class = "glyphicon glyphicon-th-list"></span>
          <strong>Danh sách</strong>
        </div>
        <div class="list-group">
          <a href="../student/showStudents.php" class="list-group-item">Quản lý sinh viên</a>
          <a href="./showTeachers.php" class="list-group-item">Quản lý giáo viên</a>
          <a href="../subject/showSubjects.php" class="list-group-item">Quản lý môn học</a>
          <a href="../class/showClasses.php" class="list-group-item">Quản lý lớp học</a>
        </div>
      </div>
    </aside>
  </div>
</div>

<footer class="panel panel-default">
 <div class = "panel-heading text-center">
   <p>SMS v.1.0 &copy; 2020</p>
 </div>
</footer>
</div>
</body>
</html>