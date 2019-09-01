<!doctype html>
<html lang="en">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<center>
    <strong><div class="alert alert-success" role="alert" style="display: none;"></div></strong>
    <strong><div class="alert alert-danger" role="alert" style="display: none;"></div></strong>
    <strong><div class="alert alert-warning" role="alert" style="display: none;"></div></strong>
</center>
<head>
    <title></title>   
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
<div class="breadcrumb" id="t1">สถานะการกระทำความผิด</div> 
<br>
						<center><a href = "#" ><font size="7"><div id="c1"> 4 </div> </font></a></center>
					<br>
 					<br>
 					<br>
						รอรายงานตัว :   <input type="text"size="8" value=""style="border:0px; text-align:center;">ครั้ง<br><br>
  						รอการอบรม :   <input type="text"size="10"value=""style="border:0px; text-align:center;">ครั้ง<br><br>
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

<div class="col-sm-8">
 <div class="card comp-card">
<div class="card-body">
<div class="breadcrumb">
 <div class="table-responsive">
 <table class="table table-hover m-b-0">
 <div class="breadcrumb" id="show_left">
<br>
<br>
<br>
<br>
<body>
 <script >
 window.onload = function () {

	 var chart = new CanvasJS.Chart("chartContainer", {
	 	animationEnabled: true,
	 	theme: "light2",
	 	title:{
	 		text: "Simple Line Chart"
	 	},
	 	axisY:{
	 		includeZero: false
	 	},
	 	data: [{        
	 		type: "line",       
	 		dataPoints: [
	 			{ y: 450 },
	 			{ y: 414},
	 			{ y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
	 			{ y: 460 },
	 			{ y: 450 },
	 			{ y: 500 },
	 			{ y: 480 },
	 			{ y: 480 },
	 			{ y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
	 			{ y: 500 },
	 			{ y: 480 },
	 			{ y: 510 }
	 		]
	 	}]
	 });
	 chart.render();

	 }
  </script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<button class="btn invisible" id="backButton">< Back</button>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script  src="../re/js/canvasjs.min.js"></script>
<script  src="../re/js/jquery.canvasjs.min.js"></script>
 </table></div>
 </body> 					
</div>  
</div>                      
</div>
</div>
</div>
</div>

</body>

<div class="col-sm-8">
 <div class="card comp-card">
<div class="card-body">
<div class="breadcrumb">
 <div class="table-responsive">
 <table class="table table-hover m-b-0">
 <div class="breadcrumb" id="show_right">
<br>
<br>
<br>
<br>
<body>
 <script >
 window.onload = function () {

	 var chart = new CanvasJS.Chart("chartContainer", {
	 	animationEnabled: true,
	 	theme: "light2",
	 	title:{
	 		text: "Simple Line Chart"
	 	},
	 	axisY:{
	 		includeZero: false
	 	},
	 	data: [{        
	 		type: "line",       
	 		dataPoints: [
	 			{ y: 450 },
	 			{ y: 414},
	 			{ y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
	 			{ y: 460 },
	 			{ y: 450 },
	 			{ y: 500 },
	 			{ y: 480 },
	 			{ y: 480 },
	 			{ y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
	 			{ y: 500 },
	 			{ y: 480 },
	 			{ y: 510 }
	 		]
	 	}]
	 });
	 chart.render();

	 }
  </script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<button class="btn invisible" id="backButton">< Back</button>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script  src="../re/js/canvasjs.min.js"></script>
<script  src="../re/js/jquery.canvasjs.min.js"></script>
 </table></div>
 </body> 					
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
    	showAll();
   
    	 
        //$('[data-toggle="popover"]').popover();
    	$("#c1").click(function (){
        	//alert("SSS");
        	$("#show_left").html("213");
        });
    

    
  function showAll() {
              $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/Student_dashboard/selectstudentfirstpage',
                    async: false,
                    dataType: 'json',
                    success: function() {

                    	//$("#S_ID").html(data[0].S_ID);
                    	//$("#std_fname").html(data[0].std_fname);
                    	//$("#std_lname").html(data[0].std_lname);
                    	//$("#cur_name").html(data[0].cur_name);
                    	//$("#dept_name").html(data[0].dept_name);
                    	//$("#status_name").html(data[0].status_name);
                    

                    	
                    	
                    	
                    	//$("#email1").html(data[0].email);    	
                    },
                    error: function() {
                        //alert('ไม่มีข้อมูล'); 
                    }
                });
                
            }
    });
</script>