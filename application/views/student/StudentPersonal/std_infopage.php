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
    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow mb-4">
            <div class="card-header" id="card_2">
                <h6 class="m-0 text-primary"><span><i class="fa fa-home"></i></span>&nbsp; หน้าแรก     </h6>
            </div><br>
    

<div class="col-sm-12">
 <div class="card comp-card">
<div class="card-body">
<div class="breadcrumb">
<!-- <div class="table-responsive">  --> 
 <table class="table table-hover m-b-0">
<div class="breadcrumb3" >  
	<center> กราฟแสดงคะแนนความประพฤตินักศึกษา   </center>
<br>
<br>
<body>

	 <script>
    $(document).ready(function() {
    	selectstudentstatus();
		selectstudentpoint();
    	
		function selectstudentpoint() {
              $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/Student_dashboard/selectstudentpoint',
                    async: false,
                    dataType: 'json',
                    success: function(data) { // console.log(data); 
						//alert(data[0].behavior_score)
						var score = data[0].behavior_score ;
						var deducted_points = 100-score;
						var deducted_pointss = deducted_points; // คะแนนที่หัก


						var data = [
 			{ y: deducted_pointss, name: "คะแนนที่หัก", color: "#FF9966" },
 	 			{ y: score, name: "คะแนนคงเหลือ", color: "#66CC66" }
 	 		];
	 		
    	renderGra(data);

          },
          error: function() {
              alert('ไม่มีข้อมูล');
          }
              });
  }
	 
        //$('[data-toggle="popover"]').popover();
   //	$("#c1").click(function (){
        	//alert("SSS");
     //   	$("#show_left").html("213");
       // });
    

    
  function selectstudentstatus() {
              $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/Student_dashboard/selectstudentstatus',
                    async: false,
                    dataType: 'json',
                    success: function(data) { // console.log(data); 
                        var html = '';
                        var n=1;
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                            '<th>' + n + '</th>' +
                            '<th>' + data[i].committed_date + '</th>' +
                            '<th>' + data[i].off_desc +'</th>' +
                            '<th>' + data[i].point + '</th>' +
							'<th>' + data[i].statusoffname + '</th>' + // สถานะการกระทำความผิด 
							
							
						//	if ($statusoffname == 3 ) {
    					//		<a href="javascript:;" data=' + data[i].train_ID + ' class="show_data">
						//	}
						//	html += '<td> <a href="javascript:;">
						//	data=' + value.oh_ID + ' class="show_data">
						//	<i class="fa fa-file-text" style="color:rgba(67, 135, 254);font-size:1.5rem;"></i></a></td>';

                                '</tr>';
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


var renderGra = function (dataDB) {
var totalVisitors = 100;
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
		
		dataPoints: dataDB
	}],

	/*
	"คะแนนที่หัก": [{
		color: "#E7823A",
		name: "New Visitors",
		type: "column",
		dataPoints: [
	
		]
	}],
	"คะแนนคงเหลือ": [{
		color: "#98FB98",
		name: "Returning Visitors",
		type: "column",
		dataPoints: [

		]
	}]
*/
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
			return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) ;  
		}
	},
	data: []
};

/*
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
*/
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
/*
$("#backButton").click(function() { 
	$(this).toggleClass("invisible");
	chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
	chart.options.data = visitorsData["New vs Returning Visitors"];
	chart.render();
});
*/
}

///////เพิ่ม///////// ไม่ได้ตรวจ 
/*
$('#showdata').on('click', '.show_data', function() {

var id = $(this).attr('data');
//console.log(id);
$('#ShowDta').modal('show');
html = '';
i = 0;


//select show data
$.ajax({
	type: 'ajax',
	method: 'get',
	url: '<?php echo site_url('Notifyoffense/spc_showoffhead') ?>',
	data: {
		id: id
	},
	async: false,
	dataType: 'json',
	success: function(data) {
		//console.log(data);
		//alert ('Having data');

		$.each(data, function(key, value) {
			i++;

			var data_vehi = value.verhicles;
			//console.log(data_vehi);

			//print 1 ครั้ง
			if (i == 1) {
				html += '<p class="text_head">การกระทำความผิด</p>';
				html += '<p class="text_position"> <label for="" class="label_txt"> วันที่แจ้งเหตุ:</label> ' + value.notifica_date + ' <label for="" class="label_txt">วันที่กระทำความผิด:</label> ' + value.committed_date + '</p>';
				html += '<p class="text_position"> <label for="" class="label_txt">สถานที่: </label> ' + value.place_name + ' </p>';
				html += '<p class="text_position"> <label for="" class="label_txt">อธิบายบริเวณที่เกิดเหตุ: </label> ' + value.description + ' </p>';
				html += '<p class="text_position"> <label for="" class="label_txt">หมวดความผิด:</label>  ' + value.oc_desc + ' <label for="" class="label_txt"> ฐานความผิด:</label>  ' + value.off_desc + '</p>';
				html += '<p class="text_head">ผู้กระทำความผิด</p>';
			}

			html += '<p class="text_position"> <label for="" class="label_txt">รหัสนักศึกษา: </label> ' + value.S_ID + '<label for="" class="label_txt"> ชื่อ: </label> ' + value.std_fname + '<label for="" class="label_txt"> นามสกุล:</label>  ' + value.std_lname + ' </p>';
			html += '<p class="text_position"> <label for="" class="label_txt">สำนักวิชา: </label>  ' + value.dept_name + '<label for="" class="label_txt"> หลักสูตร: </label>  ' + value.cur_name + ' </p>';

			//loop vehicle 
			$.each(data_vehi, function(key, value) {
				//console.log(value.regist_num);

				//check type vehicle
				if (value.vetype_ID == 1) {
					html += '<p class="text_position"> <label for="" class="label_txt">เลขทะเบียนรถจักรยานยนต์: </label>  ' + value.regist_num + '<label for="" class="label_txt">  จังหวัด: </label>  ' + value.province + '  </p>';
				} else if (value.vetype_ID == 2) {
					html += '<p class="text_position"> <label for="" class="label_txt">เลขทะเบียนรถยนต์: </label>  ' + value.regist_num + '<label for="" class="label_txt">  จังหวัด: </label>  ' + value.province + '  </p>';
				}
			});





			$('.content').html(html);
		});
	},
	error: function() {
		alert('ไม่สามารถลบข้อมูล');
	}
});



});
*/
///////////// เพิ่ม//////////////// ไม่ได้ตรวจ 
 	 
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
	   .breadcrumb3{
        font-size: 20px;
        
        margin:0 auto;
        width:800px;

        }
        
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        }
        
	 </style>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<button class="btn invisible" id="backButton">< Back</button>
<!--  <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>  -->
<script  src="../re/js/canvasjs.min.js"></script>
<script  src="../re/js/jquery.canvasjs.min.js"></script>
 </table></div>



<?php


// ดึงคำมาแสดงเกณฑ์คะแนนที่โดนหัก
$scorestd = '70';
echo "<center > คะแนนของคุณอยู่ใน <b>ระดับ</b> เกณฑ์ :" ; 
if( $scorestd >= "70" ){
     echo " ระดับเกณฑ์ ปกติ</center>";
}else if( $scorestd >= "40" ){
     echo " เสนอคณะกรรมการเพื่อพิจารณา </center>";
}else if( $scorestd >= "1" ){
     echo " ไม่ออกหนังสือรับรองความประพฤติ </center>";
}else{ 
     echo " พ้นสภาพนักศึกษา </center>";
}

?>


<br>
<br>
<div class="container" >
  <center>  <h4> <b> รายละเอียดคะแนนความประพฤติของนักศึกษา </h4></b> </center> 
     
<table style="width:100%">
  <tr>
    <th>ลำดับ</th>
    <th>วันที่ทำผิด</th> 
    <th>ฐานความผิด</th>
    <th>คะแนนที่หัก</th>
    <th>สถานะการกระทำความผิด</th>
  </tr>
<tbody id="showdata">
 </tbody>
</table>

</div>
</div>
</div>
</div>
</div>
</body>

</body>
</html>
