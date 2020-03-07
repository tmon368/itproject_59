<!DOCTYPE HTML>
<html>
<head>
	<script src="<?php echo base_url('re/js/canvasjs.js') ?>"> </script>

</head>
<body>
<head>
    <title>ระบบวินัยนักศึกษามหาวิทยาลัยวลัยลักษณ์</title>
    <style>
        .select2-container--open .select2-dropdown--below {
            width: 420px !important;
        }

        .selectplace {
            width: 20rem;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 2;
            font-size: 14px;
            font-family: 'Taviraj', serif;
        }
    </style>
</head>
<script>
    var studentid = [];
    var removestudenid = [];
    var filesToUpload = [];
    var countFilepicture = 0;
    var fileIdCounter = 0;
</script>


<body>
    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url("Student_dashboard") ?>" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ออกรายงาน</li>
                </ol>
            </nav>
        </div>
		<div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;จำนวนนักศึกษาที่กระทำผิดสำนักวิชาสารสนเทศศาสตร์ ประจำเดือน มีนาคม 2563</h6>
                </div>
<div class="card-body">

<div class="card-body">
	<div id="chartContainer" style="height: 350px; width: 80%;"></div>
</div>
</body>

<script type="text/javascript">
window.onload = function () {
var html = [];
	
	   $.ajax({
           type: 'ajax',
           url: '<?php echo base_url() ?>index.php/ReportChartDivisions/chartdiv',
           async: false,
           dataType: 'json',
           success: function(data) {
               
               console.log(data);
               var i;
               for (i = 0; i < data.length; i++) {
                   html.push({
					x:i,
                       label: data[i].label, 
                       y:data[i].y
                   });
               }
            	var interval = 5;

               console.log(html);
               
               var chart = new CanvasJS.Chart("chartContainer", {
                            title: {
                                                    text: "จำนวน (คน)",
                                                    horizontalAlign: "left",
                                                    fontSize: 17,
                                                    // verticalAlign: "center",
                                                },	
                    
            		title:{
            			text: ""
                        
            		},
					axisX:{
						title: "หลักสูตร"
                        
					},
            		data: [
            		
            		{
            			// Change type to "bar", "area", "spline", "pie",etc.
						type: "column",
				

            			
            			dataPoints: html
            				/*
            				{ label: "หมวด 6 ความผิดเกี่ยวกับการเสพสุราหรือของมึนเมา",  y: 60  },
            				{ label: "หมวด 8 ความผิดเกี่ยวกับวินัยจราจร", y: 15  },
            				{ label: "หมวด 9 ความผิดเกี่ยวกับความประพฤติ  ศีลธรรม และวัฒนธรรมอันดีงาม", y: 25  },
            				{ label: "หมวด 11 ความผิดเกี่ยวกับความสะอาดเรียบร้อย",  y: 60  },
            		*/
            				
            			
            		}]
            	});
           	

               chart.render();
           },
           error: function() {
               alert('ไม่มีข้อมูล');
           }
	   });     

}
</script>
</html>