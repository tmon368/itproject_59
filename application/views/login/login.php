<!doctype html>
<html lang="en">

<head>
<link href="<?php echo base_url(); ?>res/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>res/css/freelancer.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>res/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>res/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>res/node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>res/assest/css/custom.css" />

  <title>Student discipline system | Walailak University</title>

</head>


<body>
  <meta charset="UTF-8">
  <div>
    <div class="container">

      <div class="row">
        <div class="col-1">
        
        </div>
        <div class="col-1">

        </div>
        <div class="col-1">

        </div>
        <div class="col-1" id="Logo_wu">
			<img src="<?php echo base_url(); ?>res/img/Logo_walailak.png" class="img-fluid">
        </div>

        <div class="col-5" id="h_name">
          <h1><strong>มหาวิทยาลัยวลัยลักษณ์</strong></h1>
          <h3>ระบบวินัยนักศึกษา</h3>
        </div>
        <div class="col-1">
          
        </div>
        <div class="col-1">

        </div>

        <div class="col-1">

        </div>
      </div>

      <div class="row">

        <div class="col">

        </div>
        <div class="col-5" id="form_login">

        <form method="post" action="<?php echo base_url(); ?>index.php/loginuser/login_validation">
            <br>
            <h5>ลงชื่อเข้าใช้งานด้วยบัญชีของมหาวิทยาลัย</h5>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" name="username"   class="form-control" placeholder="ชื่อผู้ใช้งาน" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password"  name="password"  class="form-control" placeholder="รหัสผ่าน" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit">เข้าสู่ระบบ</button>
            <div class="form-group">  
            <?php  
echo '<label class="text-danger">'.$this->session->flashdata
("error").'</label>';  
            ?>  
       </div>  
			</form>
      
        </div>
        <div class="col">

        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>res/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>res/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>res/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
     <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>res/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>res/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>res/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>res/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo base_url(); ?>res/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url(); ?>res/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>res/js/freelancer.min.js"></script>

</body>

</html>