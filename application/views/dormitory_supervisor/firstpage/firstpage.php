<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_user_security.css'); ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_regis_activity_student.css') ?>">

<center>
    <strong><div class="alert alert-success" role="alert" style="display: none;"></div></strong>
    <strong><div class="alert alert-danger" role="alert" style="display: none;"></div></strong>
    <strong><div class="alert alert-warning" role="alert" style="display: none;"></div></strong>
</center>

<head>
    <title></title> 
<style>
#fasfa-users{
    color:orange;
    font-size: 70px;
    text-shadow: 1px 1px 1px #000;
}
#showscorestudent{
            font-size: 50px;
}
#showscoreservice{
            font-size: 30px;
         
}
#showscoretraining{
            font-size: 30px;
         
}
.bggreen{
 background-color: #99FF99	;
    width: 250px;
    padding: 8px;
    border: 15px;
    margin: 15px;
    border-radius:45px;
    
}
#fasfa-chalkboard-teacher{
     color:black;
    font-size: 70px;
     text-shadow: 1px 1px 1px #000;
}
#farfa-calendar-check{
    color:black;
    font-size: 70px;
     text-shadow: 1px 1px 1px #000;
    
}
.btnbtn-inverse-primarybtn-fw{ width: 600px }
.btnbtn-inverse-primarybtn-fw ul{ list-style-type: none;  margin: 0px; padding: 0px; font-family: 'Open Sans', sans-serif; font-size: 0.85em; color: rgb(0, 0, 0); }
.btnbtn-inverse-primarybtn-fw li{ float: left; padding: 0px; padding: 0px;  text-align:center; width: 40.33%;
background-color: #40ff00	;
    width: 250px;
    padding: 8px;
    border: 15px;
    margin: 15px;
    border-radius:45px;}



.btnbtn-inverse-warningbtn-fw{ width: 600px }
.btnbtn-inverse-warningbtn-fw ul{ list-style-type: none;  margin: 0px; padding: 0px; font-family: 'Open Sans', sans-serif; font-size: 0.85em; color: rgb(0, 0, 0); }
.btnbtn-inverse-warningbtn-fw li{ float: left; padding: 0px; padding: 0px;  text-align:center; width: 40.33%;
background-color: #ffbf00	;
    width: 250px;
    padding: 8px;
    border: 15px;
    margin: 15px;
    border-radius:45px;}




</style>    
    
    
    
</head>
<br>
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
 <div class="col-lg-12 grid-margin stretch-card">
 
  <div class="col-lg-4 grid-margin stretch-card"> 
   
<div class="col-lg-12 ">

      <div class="col-lg-12 ">
      <div class="card shadow mb-4">
        <div class="card-header" id="card_2">
            <h6 class="m-0 text-primary"></h6>
        </div>      
            <div class="card shadow mb-3">             
        <div class="card-body " id="card_1">
        <center>จำนวนนักศึกษาที่กระทำผิด  </center>
         <br><center><i class="fas fa-users" id="fasfa-users"></i><br>
 			<div id="showscorestudent" name="showscorestudent"></div><br></center>
        
        </div> 
</div>
</div>
</div>    

<div class="col-lg-12 ">
            <div class="card shadow mb-3">  
               <div class="card shadow mb-4">
        <div class="card-header" id="card_2">
            <h6 class="m-0 text-primary"></h6>
        </div>        
        <div class="card-body " id="card_1"> 
        <center>ค้นหาความผิดของนักศึกษารายบุคคล</center>
        <center> <div class="topnav">
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="กรอกรหัสนักศึกษา" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div> </center>
        </div> 
        </div>
</div>
</div>

<div class="col-lg-12 ">
            <div class="card shadow mb-3"> 
            <div class="card shadow mb-4">
        <div class="card-header" id="card_2">
            <h6 class="m-0 text-primary"></h6>
        </div>                  
        <div class="card-body " id="card_1">
       <font size="2"><center>นักศึกษาที่มีคะแนนคงเหลือน้อยที่สุด 5 ลำดับ</center></font> 
        <br><center><div class="row">
				<div class="col-sm-12">
				
				
				<div  id="showdata" > 
			
			
			
			</div>
			</div>
			</div></center><br>แสดงรายชื่อเพิ่มเติม
			
        </div> 
        </div>
</div>
</div>



</div>





</div>


<div class="col-lg-8 grid-margin stretch-card">

<div class="col-lg-12 ">
<div class="card shadow mb-4">
        <div class="card-header" id="card_2">
            <h6 class="m-0 text-primary"></h6>
        </div>
            <div class="card shadow mb-3">      	
        <div class="card-body " id="card_1">
           <font size="4"><center>จำนวนนักศึกษาที่กระทำผิดแต่ละหมวดของหอพัก.</center></font>
    <br><br>

         <div id="chartContainer" style="height: 300px; width: 100%;"></div>
         <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
      height:350,
      animationEnabled: true, 
		animationDuration: 2000,   //change to 1000, 500 etc
      axisX:{
          title: "หมวดความผิด"
         },
      data: [
      {
        dataPoints: [
        { x: 10, y: 50 },
        { x: 20, y: 40},
        { x: 30, y: 60 },
        { x: 40, y: 80 },
        { x: 50, y: 20 },
        { x: 60, y: 60 }
        ]
      }
      ]
    });

    chart.render();
  }
  </script>
<br><br><br><br>
         </div>    
           
</div>


<div class="col-lg-7 "><font size="4"><div class="card-header" id="card_2">
<h6 class="m-0 text-primary"></h6></div><br><center>กิจกรรมเพิ่มเติม</center></font>
<div class="btn btn-inverse-success btn-fw" id="btnAdd" data-toggle="modal">
	<ul>
		<li>
			   <font size="4"><center>กิจกรรมบำเพ็ญประโยชน์ </center></font><br>
				<i class="far fa-calendar-check" id="farfa-calendar-check"></i>
				<p id="showscoreservice" name="showscoreservice"><h3>กิจกรรม</h3></p>
				
			
		</li>
	</ul>
</div>
&nbsp;&nbsp;&nbsp;	
<div class="btn btn-inverse-warning btn-fw" id="btnedd" data-toggle="modal">
	<ul style="padding-right:50px">
		<li>
			   <font size="4"><center>กิจกรรมการอบรม</center></font><br>
				<i class="fas fa-chalkboard-teacher" id="fasfa-chalkboard-teacher"></i>
				<p id="showscoretraining" name="showscoretraining"><h3>กิจกรรม</h3></p>
				
			
		</li>
	</ul>
</div>		
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 620px!important;" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">กิจกรรมบำเพ็ญประโยชน์</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      
      <div class="modal-body">
		  <!--ส่วนฟอร์มกิจกรรมบำเพ็ญ--> 
           <form action="1" id="formadd" method="post"  class="needs-validation" >
		  <div class="form-group" id="input_group_sty" >
				<div class="input-group" >
				
					
				<div class="ShowActivity">


                    </div>	
										
      </div>
      </div>
		
		 						
    
       </form>
           </div>
       </div>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 620px!important;" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">กิจกรรมการอบรม</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      
      <div class="modal-body">
		  <!--ส่วนฟอร์มกิจกรรมการอบรม--> 
           <form action="2" id="formedd" method="post"  class="needs-validation" >
		  <div class="form-group" id="input_group_sty" >
				<div class="input-group" >
				
					
				<div class="ShowActivity2">


                    </div>


                    
										
      </div>
      </div>
		
		 						
    
       </form>
           </div>
       </div>
        </div>
    </div>
    
    
  </div>
</div>

</div>
</div>



</div>
</div>

</div>
<script>
$(document).ready(function() {
selectscorestudent();
selectstudentall();
selectscoreservice();
selectscoretraining();
show_all();
show_ell();
function selectscorestudent() {
    $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/Branch_head_dashboard/selectscorestudent',
        async: false,
        dataType: 'json',
        success: function(data) {
           // alert(data)
        	$('#showscorestudent').html(data.numberstudent);
        	
        },
        error: function() {
            alert('ไม่มีข้อมูล');
        }
    });
}

function selectscoreservice() {
    $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/Branch_head_dashboard/selectscoreservice',
        async: false,
        dataType: 'json',
        success: function(data) {
           // alert(data)
        	$('#showscoreservice').html(data.numberservice);
        	
         
        },
        error: function() {
            alert('ไม่มีข้อมูล');
        }
    });
}

function selectscoretraining() {
    $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/Branch_head_dashboard/selectscoretraining',
        async: false,
        dataType: 'json',
        success: function(data) {
           // alert(data)
        	$('#showscoretraining').html(data.numbertraining);
        	
         
        },
        error: function() {
            alert('ไม่มีข้อมูล');
        }
    });
}
function selectstudentall() {
    $.ajax({
          type: 'ajax',
          url: '<?php echo base_url() ?>index.php/Branch_head_dashboard/selectstudentall',
          async: false,
          dataType: 'json',
          success: function(data) { // console.log(data); 
              var html = '';
              var n=1;
              var i;
              var count='5';
              
              if (data.length < count){
              	for (i = 0; i < data.length; i++) {                   
              		html += '<div class="bggreen">' + n + '.' +
              		data[i].std_fname  + '&nbsp;'    + data[i].std_lname + '<br>'+ '<br>'+ 'คะแนนคงเหลือ'
              	 	 +  '&nbsp;' +
              		data[i].behavior_score+    '&nbsp;' +   'คะแนน'    +  '</div>';
              		 n+=1;
             	 }
              }
              else{
                  for (i=0; i < 5 ; i++) {
                  	html += '<div class="bggreen">' + n + '.' +
              		data[i].std_fname  + '&nbsp;'    + data[i].std_lname + '<br>'+'<br>'+ 'คะแนนคงเหลือ'
              	 	 +  '&nbsp;' +
              		data[i].behavior_score+    '&nbsp;' +   'คะแนน'    +  '</div>';
              		 n+=1;  
               }
              }
              
              $('#showdata').html(html);
    //$('#dataall').html(num-1);//
},
error: function() {
    alert('ไม่มีข้อมูล');
}
    });
}
});


//โชว์กิจกรรมข้อมูล

$('#btnAdd').click(function(){
  $('#formadd')[0].reset();
  $("#msg1").empty();
  $('#exampleModalCenter').modal('show');
 
});

$('#btnedd').click(function(){
	  $('#formedd')[0].reset();
	  $("#msg2").empty();
	  $('#exampleModalCenter2').modal('show');
	 
});


function show_all() {

    html = '';
    $.ajax({
        type: 'POST',
        url: '<?php echo site_url("Branch_head_dashboard/showAlll") ?>',
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $.each(data, function(key, value) {

                var temp_1 = value.start_time;
                var temp_2 = value.end_time;
                var start_times = parseFloat(temp_1.substring(0, 5));
                var end_times = parseFloat(temp_2.substring(0, 5));
                var counthour = Math.abs(end_times - start_times);

                //console.log(counthour);

                html += '<div class="Data">';
                html += '<div class="Main1">';
                html += '<span id="title1">กิจกรรม : ' + value.service_name + '</span>';
                html += '<span id="title2"> <span><i class="far fa-calendar-alt iconlabel"></i></span> วันที่จัดกิจกรรม : ' + value.service_date + ' </span>';
                html += '<span id="title3"> <span><i class="fas fa-clock iconlabel"></i></span> เวลาเริ่ม ' + start_times + ' ถึง ' + end_times + ' ชั่วโมงกิกรรม ' + counthour + ' ชม.</span>';
                html += '<span id="title4"> <span><i class="fas fa-user iconlabel"></i></span>ผู้รับรองกิจกรม: ' + value.person_fname + " " + value.person_lname + '</span>';
                html += '</div>';
                html += '<div class="Main2">';
                html += '<div class="CountStudent">จำนวนผู้เข้าร่วม</div>';
                html += '<div><span id="last_count_student">' + value.number_of + '</span>/' + value.received + '</div>';
                html += '</div>';
                html += '<div class="Main3">';
                html += '</div>';
                html += '</div>';


            });
            $('.ShowActivity').html(html);
        }
    });
}
function show_ell() {

    html = '';
    $.ajax({
        type: 'POST',
        url: '<?php echo site_url("Branch_head_dashboard/showell") ?>',
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $.each(data, function(key, value) {

                html += '<div class="Data">';
                html += '<div class="Main1">';
                html += '<span id="title1">กิจกรรม : ' + value.train_name + '</span>';
               // html += '<span id="title2"> <span><i class="far fa-calendar-alt iconlabel"></i></span> วันที่จัดกิจกรรม : ' + value.service_date + ' </span>';
               // html += '<span id="title3"> <span><i class="fas fa-clock iconlabel"></i></span> เวลาเริ่ม ' + start_times + ' ถึง ' + end_times + ' ชั่วโมงกิกรรม ' + counthour + ' ชม.</span>';
               // html += '<span id="title4"> <span><i class="fas fa-user iconlabel"></i></span>ผู้รับรองกิจกรม: ' + value.person_fname + " " + value.person_lname + '</span>';
                html += '</div>';
                html += '<div class="Main2">';
                html += '<div class="CountStudent">จำนวนผู้เข้าร่วม</div>';
               // html += '<div><span id="last_count_student">' + value.number_of + '</span>/' + value.received + '</div>';
                html += '</div>';
                html += '<div class="Main3">';
                html += '</div>';
                html += '</div>';


            });
            $('.ShowActivity2').html(html);
        }
    });
}


</script>

</body>
</html>
