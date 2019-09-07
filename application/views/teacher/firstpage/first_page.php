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
กราฟแสดงคะแนนความประพฤตินักศึกษา
<br>
<br>
<body>
 <script >
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
    	selectdetailfirstpage();
   
    	 
        //$('[data-toggle="popover"]').popover();
    	$("#c1").click(function (){
        	//alert("SSS");
        	$("#show_left").html("213");
        });
    

    
  function selectdetailfirstpage() {
              $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/Student_dashboard/selectdetailfirstpage',
                    async: false,
                    dataType: 'json',
                    success: function() {

                    	$("#num_off").html(data[0].num_off);
                    	$("#status_off").html(data[0].status_off);
                   
                    

                    	
                    	
                    	
                    	$("#email1").html(data[0].email);    	
                    },
                    error: function() {
                       // alert('ไม่มีข้อมูล'); 
                    }
                });
                
            }
    });
</script>