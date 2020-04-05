<!DOCTYPE HTML>
<html>
<head>
    <script src="<?php echo base_url('re/js/canvasjs.js') ?>"> </script>
    <link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('re/css/css_show_activity_.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('re/css/normalize.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('re/css/css_report_offencase.css') ?>">

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
            <li class="breadcrumb-item"><a href="<?php echo site_url('#') ?>" class="breadcrumb-link">หน้าแรก</a></li>
            <li class="breadcrumb-item active" aria-current="page">ออกรายงาน</li>
        </ol>
    </nav>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-9"></div> 
        <div class="col-1"><div id="yearDD"></div></div> 
  
        <div class="col-1"><button type="button" class="" id="search_data">ค้นหา</button></div>   
    </div>

	<div class="row">
		<div class="col-12">
			<div class="card-body">
			    <div id="chartContainer" style="height: 350px; width: 100%;"></div>
			</div>
		</div>
    </div>
</div>

</body>



<script type="text/javascript">


function gen_graph(sel_year) {	
var html = [];
var chart_name = "สถิตินักศึกษาที่กระทำความผิดแยกตามหลักสูตร ประจำปี"+ sel_year + "";
	   $.ajax({
           type: 'ajax',
           url: '<?php echo base_url() ?>index.php/ReportChartcurriculumyearHeader/chartcur?&sel_year='+sel_year,
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
            			text: chart_name
                        
                    },
                    exportEnabled: true,
					axisX:{
						title: "หลักสูตร"
                        
					},
            		data: [
            		
            		{
            			// Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        indexLabel: "{y}",
				

            			
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

$( document ).ready(function() {
	
	getYearSetInDropdownlists();

    var sel_year = <?php echo  (date("Y")+543) ?>;
  
    gen_graph(sel_year);

    $("#search_data").click(function(){
        
        var sel_year = $("#year").val();
        
        gen_graph(sel_year);
    });
 
});

function getYearSetInDropdownlists() {
    var cur_year = <?php echo  (date("Y")+543) ?>;
    

    var html = '<select id="year" name="year">';
    for(var i = (cur_year-4); i <=cur_year; i++){
        var sel = "";
        if(i==cur_year){sel = "selected";}
        html += 
                '<option value="'+ i +'" '+sel+'>' + i + '</option>';
    }
    html += 
        '</select>';
    $('#yearDD').html(html);
}
//ใส่ฟังก์ชั่นเดือน
</script>
</html>