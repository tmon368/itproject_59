<!doctype html>
<html lang="en">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('re/css/css_dashboard_student.css') ?>">

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
	<title>ระบบวินัยนักศึกษา | มหาวิทยาลัยวลัยลักษณ์</title>
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

		.breadcrumb3 {
			font-size: 20px;

			margin: 0 auto;
			width: 800px;

		}

		table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;
		}
	</style>
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
				<h6 class="m-0 text-primary"><span><i class="fa fa-home"></i></span>&nbsp; หน้าแรก </h6>
			</div><br>


			<div class="col-sm-12">
				<div class="card comp-card">
					<div class="card-body">
						<div class="breadcrumb">
							<!-- <div class="table-responsive">  -->
							<table class="table table-hover m-b-0">
								<div class="breadcrumb3">
									<center> กราฟแสดงคะแนนความประพฤตินักศึกษา </center>
									<br>
									<br>
									<div id="chartContainer" style="height: 370px; width: 100%;"></div>
									<button class="btn invisible" id="backButton">
										< Back</button> <!-- <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js">
											</script> -->
											<script src="../re/js/canvasjs.min.js"></script>
											<script src="../re/js/jquery.canvasjs.min.js"></script>
							</table>
						</div>



						<?php


						// ดึงคำมาแสดงเกณฑ์คะแนนที่โดนหัก
						$scorestd = '70';
						echo "<center > คะแนนของคุณอยู่ใน <b>ระดับ</b> เกณฑ์ :";
						if ($scorestd >= "70") {
							echo " ระดับเกณฑ์ ปกติ</center>";
						} else if ($scorestd >= "40") {
							echo " เสนอคณะกรรมการเพื่อพิจารณา </center>";
						} else if ($scorestd >= "1") {
							echo " ไม่ออกหนังสือรับรองความประพฤติ </center>";
						} else {
							echo " พ้นสภาพนักศึกษา </center>";
						}

						?>


						<br>
						<br>
						<div class="container">
							<center>
								<h4><b>รายละเอียดคะแนนความประพฤติของนักศึกษา</h4></b>
							</center>

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


<div class="modal fade" id="AlertNotifyUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="NotifyAlert"><span id="icon_alert"><i class="fas fa-bell"></i></span></div>
				<div class="Message">Notification</div>
			</div>
			<div class="modal-body">
				<div class="MessageBackground">
					<div class="IMGMessage"><img src="<?php echo base_url('re/images/gmail.png') ?>" alt="" width="30"></div>
					<div class="Detail">
						<div class="HeardMessage">คุณมี 1 ข้อความสำหรับคุณ</div>
						<div class="NotificationAlert">คุณ นราธร สมเย็นใจ ขณะนี้คุณโดนหักคะแนนความประพฤติ 10 คะแนน จากกรณีของ
							จอดรถในบริเวณที่ห้ามจอด ทางหน่วยงานวินัยนักศึกษา มหาวิทยาลัยวลัยลักษณ์ จึงทำการหักคะแนน
							ความประพฤติของท่าน
						</div>
					</div>
				</div>

				<div class="MessageBackground">
					<div class="IMGMessage"><img src="<?php echo base_url('re/images/gmail.png') ?>" alt="" width="30"></div>
					<div class="Detail">
						<div class="HeardMessage">คุณมี 1 ข้อความสำหรับคุณ</div>
						<div class="NotificationAlert">คุณ นราธร สมเย็นใจ ขณะนี้คุณโดนหักคะแนนความประพฤติ 10 คะแนน จากกรณีของ
							จอดรถในบริเวณที่ห้ามจอด ทางหน่วยงานวินัยนักศึกษา มหาวิทยาลัยวลัยลักษณ์ จึงทำการหักคะแนน
							ความประพฤติของท่าน
						</div>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<div class="NotShowMessage"><input type="checkbox"> ไม่ต้องแสดงข้อความอีก</div>
				<div class="ButtonClose"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
			</div>
		</div>
	</div>
</div>



<script>
	$(document).ready(function() {
		selectstudentstatus();
		selectstudentpoint();
		show_all();

		$('#AlertNotifyUserModal').modal('show');

		function selectstudentpoint() {
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>index.php/Student_dashboard/selectstudentpoint',
				async: false,
				dataType: 'json',
				success: function(data) { // console.log(data); 
					//alert(data[0].behavior_score)
					var score = data[0].behavior_score;
					var deducted_points = 100 - score;
					var deducted_pointss = deducted_points; // คะแนนที่หัก


					var data = [{
							y: deducted_pointss,
							name: "คะแนนที่หัก",
							color: "#FF9966"
						},
						{
							y: score,
							name: "คะแนนคงเหลือ",
							color: "#66CC66"
						}
					];

					renderGra(data);

				},
				error: function() {
					alert('ไม่มีข้อมูล');
				}
			});
		}

		function selectstudentstatus() {
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>index.php/Student_dashboard/selectstudentstatus',
				async: false,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					var html = '';
					var n = 1;
					var i;
					for (i = 0; i < data.length; i++) {
						// if (data[i].statusoff == '3') {
							html += '<tr>' +
								'<th>' + n + '</th>' +
								'<th>' + data[i].committed_date + '</th>' +
								'<th>' + data[i].off_desc + '</th>' +
								'<th>' + data[i].point + '</th>' +
								//data[i].statusoffname
								'<th> ' + data[i].statusoffname +  ' </a> </th>'+
								// '<th> <a href="javascript:;"class="show_data" data='+data[i].statusoffname+' > ' + data[i].statusoffname +  ' </a> </th>'+
								//'<th>' + '<a href="javascript:;" data= </a>' + data[i].statusoffname + ' class="show_data"> </th>' + // สถานะการกระทำความผิด 

								//*html += '<td> <a href="javascript:;" data=' + value.service_ID  +  ' class="show_data">*//
								//'class="showdetil"> / javascript:;
								//html += '<td><a href="javascript:;" +' class="edit_data"></a>
								//<a href="javascript:;" data='+ value.service_ID +' class="del_data"><i class="fas fa-trash-alt " style="color:rgba(235,99,102,1.00)"></i></a></td>';



								'</tr>';

						// } else {
						// 	html += '<tr>' +
						// 		'<th>' + n + '</th>' +
						// 		'<th>' + data[i].committed_date + '</th>' +
						// 		'<th>' + data[i].off_desc + '</th>' +
						// 		'<th>' + data[i].point + '</th>' +
						// 		'<th>' + data[i].statusoffname + '</th>' + // สถานะการกระทำความผิด 


						// 		'</tr>';
						// }
						n += 1;
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


	/// view_volunteerAc

	// $('#showdata').on('click', '.show_data', function() {

	// 	var id = $(this).attr('data');
	// 	//   console.log(id);

	// 	$('#ShowDta').modal('show');
	// 	html = '';
	// 	i = 0;

	// 	//select show data
	// 	$.ajax({
	// 		type: 'ajax',
	// 		method: 'get',
	// 		url: '<?php echo site_url('Student_dashboard/selectstudentstatus') ?>', // เช็ค select
	// 		data: {
	// 			id: id
	// 		},
	// 		async: false,
	// 		dataType: 'json',
	// 		success: function(data) {
	// 			//console.log(data);
	// 			//alert ('Having data');

	// 			$.each(data, function(key, value) {
	// 				i++;
	// 				// if (i==1) {


	// 				//แก้ให้เป็นการอบรม
	// 				html += '<p class="text_head"> <label for="" class="label_txt">ชื่อการอบรม: </label> ' + value.train_name + ' </p>'
	// 				html += '<p class="text_position"> <label for="" class="label_txt"> หมวดการอบรม:</label> ' + value.person_fname + '&nbsp;&nbsp;' + value.person_lname + ' <label for="" class="label_txt">หมายเลขโทรศัพท์:</label> ' + value.phone1 + '</p>';
	// 				html += '<p class="text_position"> <label for="" class="label_txt">ผู้ควบคุมการอบรม ชื่อ: </label> ' + value.place + ' </p>';
	// 				html += '<p class="text_position"> <label for="" class="label_txt">วันที่อบรม: </label> ' + value.service_date + '&nbsp;&nbsp;' + value.person_lname + ' <label for="" class="label_txt">จำนวนผู้อบรม:</label> ' + value.phone1 + '</p>';
	// 				html += '<p class="text_position"> <label for="" class="label_txt">สถานที่:</label>  ' + value.start_time + "-" + value.end_time + ' </p>';
	// 				html += '<p class="text_position"> <label for="" class="label_txt">จำนวนชั่วโมง: </label> ' + value.received + ' </p>';
	// 				html += '<p class="text_position"> <label for="" class="label_txt">หมายเหตุ: </label> ' + value.explanation + ' </p>';
					


	// 				//  }



	// 				$('.content').html(html);

	// 			});
	// 		},
	// 		error: function() {
	// 			alert('ไม่สามารถลบข้อมูล');
	// 		}
	// 	});



	// });





	var renderGra = function(dataDB) {
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
				itemTextFormatter: function(e) {
					return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100);
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
			chart.options.title = {
				text: e.dataPoint.name
			}
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

	
</script>

</html>