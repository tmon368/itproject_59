<!doctype html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    
	    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow mb-4">
            <div class="card-header" id="card_2">
                <h6 class="m-0 text-primary"><span><i class="fas fa-user"></i></span>&nbsp; หน้าแรก     </h6>
            </div><br> 
            
   <div class="container">
   
<div class="row">
	<div class="col-sm-4">
		<div class="card comp-card">
		<div class="card-body">  
		<div class="breadcrumb">
 		<!--  <div class="table-responsive"> -->
			<!--   <table class="table table-hover m-b-5">  -->
			<center> จำนวนนักศึกษาที่กระทำผิด <br>
 			 <i class="material-icons">people</i><br>
 			<div id="showscorestudent" name="showscorestudent"></div><br><br>
 			<!-- ตั้ง id name  -->
 			ค้นหาความผิดของนักศึกษารายบุคคล<br>
 			
 			<form autocomplete="off" action="/action_page.php">
  				<div class="autocomplete" style="width:300px;">
    			<input id="myInput" type="text" name="ค้นหารายชื่อ" placeholder="ค้นหารายชื่อ">
  				</div>	
			</form> 
			</center><br>
			<center>
			นักศึกษาที่มีคะแนนคงเหลือน้อยที่สุด 5 ลำดับ <br>
			
			<div class="row">
				<div class="col-sm-12">
				
				
				<div  id="showdata" > 
			
			
			
			</div>
			</div>
			</div>
		
		
			</center>
			 แสดงรายชื่อเพิ่มเติม  
 		
		</div>
		</div>
		</div>
<script>

$(document).ready(function() {
	selectstudentall();
	selectscorestudent();

	function selectscorestudent() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/Teacher_dashboard/selectscorestudent',
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
	  function selectstudentall() {
          $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>index.php/Teacher_dashboard/selectstudentall',
                async: false,
                dataType: 'json',
                success: function(data) { // console.log(data); 
                    var html = '';
                    var n=1;
                    var i;
                    for (i = 0; i < data.length; i++) {
                        
                    	html += '<div class="bggreen">' + n + '.' +
                    	data[i].std_fname  + '&nbsp;'    + data[i].std_lname + '<br>'+ 'คะแนนคงเหลือ'
                    	  +  '&nbsp;' +
                    	data[i].behavior_score+    '&nbsp;' +   'คะแนน'    +  '</div>';

                    	 n+=1;
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
  



</script>
	
	
	</div>
	<div class="col-sm-4">
 		<div class="card comp-card">
 		<div class="card-body">
		<div class="breadcrumb">
		จำนวนนักศึกษาที่กระทำผิดแต่ละหมวดของอาจารย์ที่ปรึกษา
		<!--  <div class="table-responsive"> -->
		
		
<div id="chartContainer" style="height: 250px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	//title: {
		//text: "จำนวนนักศึกษาที่กระทำผิดแต่ละหมวดของอาจารย์ที่ปรึกษา"
	//},
	axisY: {
		title: "จำนวนคน",
		//suffix: "",
		includeZero: false
	},
	axisX: {
		title: "หมวดความผิด"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#\"%\"",
		dataPoints: [
			{ label: "India", y: 16 },	
			{ label: "China", y: 14 },	
			{ label: "Indonesia", y: 10 },
			{ label: "Australia", y: 2.50 },	
		
		]
	}]


});
chart.render();

}
</script>
	
		</div>
		</div>
		</div>
	</div>
	<div class="col-sm-4">
 		<div class="card comp-card">
 		<div class="card-body">
		<div class="breadcrumb">
		<!--  <div class="table-responsive"> -->




		</div>
		</div>
		</div>
	</div>
		
 <!-- <table class="table table-hover m-b-0"> --!>
 <div class="breadcrumb" id="show_left">
 <!--  
กราฟแสดงคะแนนความประพฤตินักศึกษา
<br>
<br>
<body>
 <script >
 
 
 // สร้างฟังก์ชัน
 ส่งค่าที่รับไป ยังid name ที่ตั้งไว้
 
 
 
 window.onload = function () {

	 var totalVisitors = 883000;
	 var visitorsData = {
	 	"New vs Returning Visitors": [{
	 		click: visitorsChartDrilldownHandler,
	 		cursor: "pointer",
	 		explodeOnClick: false,
	 		innerRadius: "75%",
	 		legendMarkerType: "square",
	 		name: "New vs Returning Visitors",
	 		radius: "100%",
	 		showInLegend: true,
	 		startAngle: 90,
	 		type: "doughnut",
	 		dataPoints: [
	 			{ y: 519960, name: "New Visitors", color: "#E7823A" },
	 			{ y: 363040, name: "Returning Visitors", color: "#546BC1" }
	 		]
	 	}],
	 	"New Visitors": [{
	 		color: "#E7823A",
	 		name: "New Visitors",
	 		type: "column",
	 		dataPoints: [
	 	
	 		]
	 	}],
	 	"Returning Visitors": [{
	 		color: "#546BC1",
	 		name: "Returning Visitors",
	 		type: "column",
	 		dataPoints: [
	 
	 		]
	 	}]
	 };

	 var newVSReturningVisitorsOptions = {
	 	animationEnabled: true,
	 	theme: "light2",
	 	title: {
	 		text: ""
	 	},
	 	subtitles: [{
	 		text: "",
	 		backgroundColor: "#2eacd1",
	 		fontSize: 16,
	 		fontColor: "white",
	 		padding: 5
	 	}],
	 	legend: {
	 		fontFamily: "calibri",
	 		fontSize: 14,
	 		itemTextFormatter: function (e) {
	 			return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";  
	 		}
	 	},
	 	data: []
	 };

	 var visitorsDrilldownedChartOptions = {
	 	animationEnabled: true,
	 	theme: "light2",
	 	axisX: {
	 		labelFontColor: "#717171",
	 		lineColor: "#a2a2a2",
	 		tickColor: "#a2a2a2"
	 	},
	 	axisY: {
	 		gridThickness: 0,
	 		includeZero: false,
	 		labelFontColor: "#717171",
	 		lineColor: "#a2a2a2",
	 		tickColor: "#a2a2a2",
	 		lineThickness: 1
	 	},
	 	data: []
	 };

	 var chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
	 chart.options.data = visitorsData["New vs Returning Visitors"];
	 chart.render();

	 function visitorsChartDrilldownHandler(e) {
	 	chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
	 	chart.options.data = visitorsData[e.dataPoint.name];
	 	chart.options.title = { text: e.dataPoint.name }
	 	chart.render();
	 	$("#backButton").toggleClass("invisible");
	 }

	 $("#backButton").click(function() { 
	 	$(this).toggleClass("invisible");
	 	chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
	 	chart.options.data = visitorsData["New vs Returning Visitors"];
	 	chart.render();
	 });

	 }
	 </script>
	 <style>
	   #backButton {
	 	border-radius: 4px;
	 	padding: 8px;
	 	border: none;
	 	font-size: 16px;
	 	background-color: #2eacd1;
	 	color: white;
	 	position: absolute;
	 	top: 10px;
	 	right: 10px;
	 	cursor: pointer;
	   }
	   .invisible {
	     display: none;
	   }
	 </style>
  </script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<button class="btn invisible" id="backButton">< Back</button>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script  src="../re/js/canvasjs.min.js"></script>
<script  src="../re/js/jquery.canvasjs.min.js"></script> -->
 <!--  </table>  -->
 <style> 
 
.bggreen
{
 background-color: #99FF99	;
    width: 250px;
    padding: 8px;
    border: 15px;
    margin: 15px;
}

</style>

 </div>
 
</div> 
 </body> 					

</html>