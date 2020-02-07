<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_user_security.css'); ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<center>
    <strong><div class="alert alert-success" role="alert" style="display: none;"></div></strong>
    <strong><div class="alert alert-danger" role="alert" style="display: none;"></div></strong>
    <strong><div class="alert alert-warning" role="alert" style="display: none;"></div></strong>
</center>
<style>
#fasfa-users{
    color:orange;
    font-size: 70px;
    text-shadow: 1px 1px 1px #000;
}
#showscorestudent{
            font-size: 50px;
}
</style>
<head>
    <title></title> 
    
    
    
    
      
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
       <font size="2"><center>ค้นหาความผิดของนักศึกษารายบุคคล</center></font> 
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
           <font size="4"><center>จำนวนนักศึกษาที่กระทำผิดแต่ละหมวดของหอพัก......................</center></font>
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


<div class="col-lg-9 ">
<div class="card shadow mb-4">
        <div class="card-header" id="card_2">
            <h6 class="m-0 text-primary"></h6>
        </div>
            <div class="card shadow mb-3">             
        <div class="card-body " id="card_1">
        <font size="4"><center>กิจกรรมเพิ่มเติม</center></font>  
        <br><br><br><br><br><br><br><br>
        </div> 
</div>
</div>
</div>




</div>



</div>
</div>

</div>

<script>
// selectscorestudent();
// function selectscorestudent() {
//     $.ajax({
//         type: 'ajax',
        url: '<?php echo base_url() ?>index.php/dean_dashboard/selectscorestudent',
//         async: false,
//         dataType: 'json',
//         success: function(data) {
//            // alert(data)
//         	$('#showscorestudent').html(data.numberstudent);
         
//         },
//         error: function() {
//             alert('ไม่มีข้อมูล');
//         }
//     });
// }
   



</script>

</body>
</html>
