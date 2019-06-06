<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo base_url();?>re/vendors/iconfonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url('re/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('re/css/custom.css');?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--รูปแบบ icon-->

	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

.rectangle {
  height: 20px;
  width: auto;
  background-color:#EAEDED;
  border-radius:1.50rem;
  padding-left: 0.50rem;
  padding-right: 0.50rem;
  margin-right: 0.20rem;
  font-size: 14px;
  font-style: italic;
}
#f_inline{
      margin-top: 0.25rem;
}
	</style>
</head>
<body>

<div id="container">
	<h1>Import csv file to database</h1>

	<div id="body">
          <div class="form-inline" >
              <label>ชื่อไฟล์:</label>&nbsp;
              <div class="rectangle">Table_usergroup.csv</div>
              <label>Upload to table:</label>
              <div class="rectangle">Usertype</div>
          </div>
          <div class="form-inline" id="f_inline">
            <label>Database:</label>
            <div class="rectangle">wu_student_discipline</div>
            <label>วันที่:</label>
            <div class="rectangle">05/02/2562</div>
          </div>
          <p></p>
          <p><strong>รายละเอียดการอัพโหลดข้อมูล</strong></p>

      <div class="form-inline" id="f_inline">
            <label>ทั้งหมด:</label>
            &nbsp;<span class="badge badge-primary">240 record</a></span>
            &nbsp;<label>อัพโหลดสำเร็จ:</label>
            &nbsp;<a href="#" id=""><span class="badge badge-success" id="myBtn">200 record</span></a>
            &nbsp;<label>อัพโหลดไม่สำเร็จ:</label>
            &nbsp;<span class="badge badge-danger">40 record</span>
          </div>

	</div>



	<p class="footer" id="footer_imp"><a href="#"><i class="badge badge-secondary">ยกเลิก</i></a> &nbsp;&nbsp;<a href="#"><i class="badge badge-success">บันทึกข้อมูล</i></a></p>
</div>



</body>
</html>
