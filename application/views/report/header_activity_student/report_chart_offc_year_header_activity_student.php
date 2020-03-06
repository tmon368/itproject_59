
<!DOCTYPE HTML>
<html>
<head>
    <script src="<?php echo base_url('re/js/canvasjs.js') ?>"> </script>
    <link rel="stylesheet" href="<?php echo base_url('re/css/css_dean_sctivity.css') ?>">
    <style type='text/css'>
        .my-legend .legend-title {
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 90%;
        }

        .my-legend .legend-scale ul {
            margin: 0;
            margin-bottom: 5px;
            padding: 0;
            float:center;
            list-style: none;
        }

        .my-legend .legend-scale ul li {
            font-size: 80%;
            list-style: none;
            margin-left: 0;
            line-height: 18px;
            margin-bottom: 2px;
        }

        .my-legend ul.legend-labels li span {
            display: block;
          
            height: 14px;
            width: 23px;
            margin-right: 5px;
            margin-left: 1px;
            border: 1px solid #999;
        }

        .my-legend .legend-source {
            font-size: 70%;
            color: #999;
            clear: both;
        }

        .my-legend a {
            color: #777;
        }
    </style>

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
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;จำนวนนักศึกษาที่กระทำผิดทุกหมวดความผิด ประจำปี พ.ศ. 2563</h6>
                </div>
<div class="card-body">
	<script src="<?php echo base_url('re/js/canvasjs.js') ?>"> </script>

</head>
<body>

<div class="card-body">
	<div id="chartContainer" style="height: 350px; width: 80%;"></div>
</div>
</body>

<script type="text/javascript">
window.onload = function () {
	
var html = [];
	
	   $.ajax({
           type: 'ajax',
           url: '<?php echo base_url() ?>index.php/ReportOffenceYearHeaderActivityStudent/chartOff_year',
           async: false,
           dataType: 'json',
           success: function(data) {
               
               console.log(data);
               var chart = new CanvasJS.Chart("chartContainer", {
                                                height: 350,
                                                width: 950,
                                                animationEnabled: true,
                                                animationDuration: 2000, //change to 1000, 500 etc
                                                title: {
                                                    text: "จำนวน (คน)",
                                                    horizontalAlign: "left",
                                                    fontSize: 17,
                                                    // verticalAlign: "center",
                                                },
                                                
                                                axisX: {
                                                    title: "หมวดความผิด",
                                                    gridThickness: 0,
                                                    tickLength: 0,
                                                    lineThickness: 0,
                                                    labelFormatter: function() {
                                                        return " ";
                                                    }
                                                },
                                                axisY: {
                                                    title: "",
                                                    tickLength: 0,
                                                    margin: 0,
                                                    
                                                },

                                                data: [{
                                                    dataPoints: data,
                                                   
                                                    indexLabel: "{y}",
                                                    indexLabelPlacement: "outside",
                                                    indexLabelOrientation: "horizontal",

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
                            <br><br><br>
                        </div>
                        <table align="center" width="850" >
                                    <tr >
                                    <td> <div class='my-legend' >
                                <div class='legend-scale'>
                                    <ul class='legend-labels' >
                                        <li><span style='background:#80B1D3;'></span></li>
                                    </ul>
                                </div></div></td>
                                        <td>ความผิดเกี่ยวกับการเสพสุราหรือของมึนเมา</td>
                                    
                                        <td> <div class='my-legend' >
                                <div class='legend-scale'>
                                    <ul class='legend-labels' >
                                        <li><span style='background:#A2F671;'></span></li>
                                    </ul>
                                </div></div></td>
                                        <td>ความผิดเกี่ยวกับความประพฤติ ศีลธรรม และวัฒนธรรมอันดีงาม</td>
                                       
                            </tr>  
                
                         
                         <tr>
                        <td> <div class='my-legend' >
                                <div class='legend-scale'>
                                    <ul class='legend-labels' >
                                        <li><span style='background:#FB8072;'></span></li>
                                    </ul>
                                </div></div></td>
                                        <td>ความผิดเกี่ยวกับวินัยจราจร</td>
                                        <td> <div class='my-legend' >
                                <div class='legend-scale'>
                                    <ul class='legend-labels' >
                                        <li><span style='background:#57c7d4;'></span></li>
                                    </ul>
                                </div></div></td>
                                        <td>ความผิดเกี่ยวกับความสะอาดเรียบร้อย</td>
                                      
                                    </tr>
                                </table> 
                                <br><br>

                    </div>
</script>
</html>