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
    <title>ข้อมูลส่วนตัว</title>

</head>

<body>

<style type="text/css">

   p.pro{
        font-size: 20px;
        font-family: Prompt;
    }
     p.pro2{
        font-size: 18px;
        font-family: Prompt;
    }
 
</style>

    <meta charset="UTF-8">
    <div class="page-breadcrumb" id="nav_sty">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <p class="breadcrumb-item"> ข้อมูลส่วนตัว  </p>
             <!--  <li class="breadcrumb-item">  --> 
            </ol>  
        </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow mb-4">
            <div class="card-header" id="card_2">
                <h6 class="m-0 text-primary"><span><i class="fas fa-user"></i></span>&nbsp;ข้อมูลส่วนตัว</h6>
            </div><br>
		<div class="breadcrumb"><p class="pro">1.นักศึกษา</p></div>
<div class="page-breadcrumb" id="nav_sty">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="breadcrumb-item">รหัสนักศึกษา : &nbsp;</li>
      <li id="S_ID"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">ชื่อ :&nbsp;</a></li>
      <li id="std_fname"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">สกุล :&nbsp;</a></li>
      <li id="std_lname"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">หลักสูตร :&nbsp;</a></li>
      <li id="cur_name"> </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="breadcrumb-item">สำนักวิชา :&nbsp;</a></li>
      <li id="dept_name"> </li>&nbsp;&nbsp;</br>
      <li class="breadcrumb-item">หมายเลขโทรศัพท์ :&nbsp;</a></li>
      <li id="phone"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">อีเมล์ :&nbsp;</a></li>
      <li id="email"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">ชื่อหอพัก :&nbsp;</a></li>
      <li id="dname"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">ประเภทหอพัก :&nbsp;</a></li>
      <li id="type_name"> </li>&nbsp;&nbsp;
    </p></ol>
  </nav>
</div>
<div class="breadcrumb"><p class="pro">2.อาจารย์ที่ปรึกษา</p></div>
<div class="page-breadcrumb" id="nav_sty">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="breadcrumb-item">ชื่อ :&nbsp;</a></li>
      <li id="person_fname"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">สกุล :&nbsp;</a></li>
      <li id="person_name"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">ตำแหน่ง :&nbsp;</a></li>
      <li id="position"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">หน่วยงาน :&nbsp;</a></li>
      <li id="dept_name1"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">หลักสูตร :&nbsp;</a></li>
      <li id="cur_name1"> </li>&nbsp;&nbsp;</br>
      <li class="breadcrumb-item">หมายเลขโทรศัพท์ :&nbsp;</a></li>
      <li id="phone1"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">อีเมล์ :&nbsp;</a></li>
      <li id="email1"> </li>&nbsp;&nbsp;
    </ol>
  </nav>
</div>
<div class="breadcrumb"><p class="pro">3.ยานพาหนะ</p></div>
<div class="page-breadcrumb" id="nav_sty">
  <nav aria-label="breadcrumb">
  <div class="breadcrumb">3.1 รถจักรยานยนต์</div>
    <ol class="breadcrumb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="breadcrumb-item">เลขทะเบียนยานพาหนะ :&nbsp;</a></li>
      <li id="regist_num1"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">จังหวัด :&nbsp;</a></li>
      <li id="province"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">ยี่ห้อ :&nbsp;</a></li>
      <li id="brand"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">สี :&nbsp;</a></li>
      <li id="color"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">วันที่ลงทะเบียนสติ๊กเกอร์ :&nbsp;</a></li>
      <li id="regist_date"> </li>&nbsp;&nbsp;</br>
      <li class="breadcrumb-item">วันที่หมดอายุสติ๊กเกอร์ :&nbsp;</a></li>
      <li id="expired_date"> </li>&nbsp;&nbsp;
     </ol>
     
     <div class="breadcrumb">3.2 รถยนต์</div>
     <ol class="breadcrumb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="breadcrumb-item">เลขทะเบียนยานพาหนะ :&nbsp;</a></li> 
      <li id="regist_num2"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">จังหวัด :&nbsp;</a></li>
      <li id="province1"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">ยี่ห้อ :&nbsp;</a></li>
      <li id="brand1"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">สี :&nbsp;</a></li>
      <li id="color1"> </li>&nbsp;&nbsp;
      <li class="breadcrumb-item">วันที่ลงทะเบียนสติ๊กเกอร์ :&nbsp;</a></li>
      <li id="regist_date1"> </li>&nbsp;&nbsp;</br>
      <li class="breadcrumb-item">วันที่หมดอายุสติ๊กเกอร์ :&nbsp;</a></li>
      <li id="expired_date1"> </li>&nbsp;&nbsp;
    </ol>
  </nav>
</div>
</div>
</div>



    
    
    
    
   
   
</body>

</html>
<script>
    $(document).ready(function() {
    	 showAll();
    	 selectpersonnel();
    	 selectvehiclesmotorcycle();
    	 selectvehiclescar();
        //$('[data-toggle="popover"]').popover();

        
        
        
    function showAll() {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/Std_info/selectstudent',
                    async: false,
                    dataType: 'json',
                    success: function(data) {

                    	$("#S_ID").html(data[0].S_ID);
                    	$("#std_fname").html(data[0].std_fname);
                    	$("#std_lname").html(data[0].std_lname);
                    	$("#cur_name").html(data[0].cur_name);
                    	$("#dept_name").html(data[0].dept_name);
                    	$("#phone").html(data[0].phone);
                    	$("#email").html(data[0].email);    
                    	$("#dname").html(data[0].dname);
                    	$("#type_name").html(data[0].type_name);  

                    	
                    	
                    	
                    	//$("#email1").html(data[0].email);    	
                    },
                    error: function() {
                        alert('ไม่มีข้อมูล'); 
                    }
                });
            }

    function selectpersonnel() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/Std_info/selectpersonnel',
            async: false,
            dataType: 'json',
            success: function(data) {
            	$("#person_fname").html(data[0].person_fname);
            	$("#person_name").html(data[0].person_lname);      
            	$("#position").html(data[0].position);       
            	$("#dept_name1").html(data[0].dept_name); 
               $("#cur_name1").html(data[0].cur_name); 
            	$("#phone1").html(data[0].phone1);
            	$("#email1").html(data[0].email);
            	

            },
            error: function() {
                alert('ไม่มีข้อมูล');
            }
        });
    }



    
    function selectvehiclesmotorcycle() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/Std_info/selectvehiclesmotorcycle',
            async: false,
            dataType: 'json',
            success: function(data) {
            	if(data == false){
            		$("#regist_num1").html('-');
                	$("#province").html('-');
                	$("#brand").html('-');
                	$("#color").html('-');
                	$("#regist_date").html('-');
                	$("#expired_date").html('-');

            	}else{
                	
                
     
            	$("#regist_num1").html(data[0].regist_num);
            	$("#province").html(data[0].province);
            	$("#brand").html(data[0].brand);
            	$("#color").html(data[0].color);
            	$("#regist_date").html(data[0].regist_date);
            	$("#expired_date").html(data[0].expired_date);
            	}
            
            }, 
            error: function() {
            	
                alert('ไม่มีข้อมูล');
            }
        }); 
    }
    function selectvehiclescar() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/Std_info/selectvehiclescar',
            async: false,
            dataType: 'json',
            success: function(data) {
     			if(data == false){
     				$("#regist_num2").html('-');
                	$("#province1").html('-');
                	$("#brand1").html('-');
                	$("#color1").html('-');
                	$("#regist_date1").html('-');
                	$("#expired_date1").html('-');



     			}else{
          
            	$("#regist_num2").html(data[0].regist_num);
            	$("#province1").html(data[0].province);
            	$("#brand1").html(data[0].brand);
            	$("#color1").html(data[0].color);
            	$("#regist_date1").html(data[0].regist_date);
            	$("#expired_date1").html(data[0].expired_date);
     			}
            	

            },
            error: function() {
                alert('ไม่มีข้อมูล');
            }
        }); 
    }
    });
</script>