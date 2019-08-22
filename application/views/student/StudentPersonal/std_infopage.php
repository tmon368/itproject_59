<!doctype html>
<html lang="en">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<center>
    <strong>
        <div class="alert alert-success" role="alert" style="display: none;"></div>
    </strong>
    <strong>
        <div class="alert alert-danger" role="alert" style="display: none;"></div>
    </strong>
    <strong>
        <div class="alert alert-warning" role="alert" style="display: none;"></div>
    </strong>
</center>

<head>

    <title>...</title>

</head>

<body>
    <meta charset="UTF-8">
 
    <div class="page-breadcrumb" id="nav_sty">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <!--<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">จัดการข้อมูลพื้นฐาน</a></li>-->
                <li class="breadcrumb-item active" aria-current="page">หน้าแรก</li>
            </ol>
        </nav>
    </div>
    

   <div class="container">
<div class="row">
 <div class="col-sm-4">
 <div class="card comp-card">
<div class="card-body">
<div class="breadcrumb">
 <div class="table-responsive">
<table class="table table-hover m-b-0">
<div class="breadcrumb" id="t1">ข้อมูลส่วนตัว</div> 
<center><img src="<?php echo base_url('re/images/faces/face1.jpg'); ?>" alt="profile image" width="100"></center>
            					
            					<br><br>      
            					รหัสนักศึกษา : <input type="text"value="59143339"size="10"style="border:0px; text-align:center;"><br><br>
  								ชื่อ : <input type="text"value="panupong"size="10"style="border:0px; text-align:center;"><br><br>
  								สกุล : <input type="text"value="tharaporn"size="10"style="border:0px; text-align:center;"><br><br>
  								หลักสูตร : <input type="text"value="เทคโนโลยีสารสนเทศ"size="12"style="border:0px; text-align:center;"><br><br>
  								สำนักวิชา : <input type="text"value="สารสนเทศศาตร์"size="10"style="border:0px; text-align:center;"><br><br>
  								สถานะศึกษา : <input type="text"value="นักศึกษาปัจจุบัน"size="10"style="border:0px; text-align:center;"><br><br>     			
	                          
  </table>
  </div>
  </div>
</div>
</div>
</div>


<div class="col-sm-4">
 <div class="card comp-card">
<div class="card-body">
<div class="breadcrumb">
 <div class="table-responsive">
 <table class="table table-hover">
  <td width="2px"><div class="breadcrumb" id="t1">คะแนนที่หัก</div></td>
 						<tr>
 					   <th><img src="<?php echo base_url('re/images/faces/dislike.png'); ?>"></th>
 					    <th><h1>20</h1></th>
 					    </tr>
 				<td width="2px"><div class="breadcrumb" id="t1">คะแนนคงเหลือ</div></td>
 					    <tr>
 					    <th><img src="<?php echo base_url('re/images/faces/like.png'); ?>"  width="70"></th>
 					    <th><h1>80</h1></th>
 					    </tr>
 				<td width="2px"><div class="breadcrumb" id="t1">เกณฑ์คะแนน</div><center><h1> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;ปกติ</h1></center></td>
 					<tr>
 					    <th></th>
 					    <th></th>
 					    </tr>	
 					</table>
 					</div>
 					</div>
 					
</div>
</div>
</div>
<div class="col-sm-4">
 <div class="card comp-card">
<div class="card-body">
<div class="breadcrumb">
 <div class="table-responsive">
 <table class="table table-hover m-b-0">
<div class="breadcrumb" id="t1">จำนวนครั้งที่ทำผิด</div>
<br>
 					<br>
 					<br>
 					<br>
 					<br>
 					<br>
 					<br>
 					
 				
                                                      รอรายงานตัว :   <input type="text"size="8" value="1"style="border:0px; text-align:center;">ครั้ง<br><br>
  						รอการอบรม :   <input type="text"size="10"value="0"style="border:0px; text-align:center;">ครั้ง<br><br>
  						รออนุมัติหลักฐานแย้ง : <input type="text"size="5"value=""style="border:0px; text-align:center;">ครั้ง<br><br>
  						รอการบำเพ็ญประโยชน์ :<input type="text"size="5"value=""style="border:0px; text-align:center;">ครั้ง<br><br>
  						รอการรับรองกิจกรรม : <input type="text"size="5"value=""style="border:0px; text-align:center;">ครั้ง<br><br>
  						คืนคะแนนเรียบร้อยแล้ว :<input type="text"size="5"value=""style="border:0px; text-align:center;">ครั้ง<br><br> 
  						</table>
  						</div>  
  						</div>
                       
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<script>
    $(document).ready(function() {
    	 
        //$('[data-toggle="popover"]').popover();

        
        
        
    function showAll() {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/Student_dashboard/selectstudent',
                    async: false,
                    dataType: 'json',
                    success: function(data) {

                    	$("#msg1").html(data[0].std_lname);

                    },
                    error: function() {
                        alert('ไม่มีข้อมูล');
                    }
                });
            }

    });
</script>