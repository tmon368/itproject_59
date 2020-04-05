<!DOCTYPE HTML>
<html>
<head>
	<script src="<?php echo base_url('re/js/canvasjs.js') ?>"> </script>
    <link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('re/css/css_show_activity_.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('re/css/normalize.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('re/css/css_report_offencase.css') ?>">

    <style>
    .square1 {
    height: 15px;
    width: 15px;
    background-color:DarkTurquoise;
    display: inline-block;
    }
    .square2 {
    height: 15px;
    width: 15px;
    background-color:Moccasin;
    display: inline-block;
    }
    </style>

</head>
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

    <div class="row">
        <div class="col-9"></div> 
        <div class="col-1"><div id="yearDD"></div></div> 
        <div class="col-1"><div id="monthDD"></div></div>
        <div class="col-1"><button type="button" class="" id="search_data">ค้นหา</button></div>   
    </div>

	<div class="row">
		<div class="col-12">
			<div class="card-body">
			    <div id="chartContainer" style="height: 400px; width: 100%;"></div>
			</div>
		</div>
    </div>
    
    <div class="row">
        <div class="col-2"><div class="square2"></div> หอพักนักศึกษาหญิง</div>
        <div class="col-2"><div class="square1"></div> หอพักนักศึกษาชาย</div>
        <div class="col-8"></div> 
    </div>
  
</div>
</body>

<script type="text/javascript">

function gen_graph(sel_year,sel_month) {	
var html = [];
var chart_name = "สถิตินักศึกษาที่กระทำความผิดแยกตามหอพัก ประจำปี "+ sel_year + "";
	   $.ajax({
           type: 'ajax',
           url: '<?php echo base_url() ?>index.php/ReportChartdormitoryyearHeader/chartdorm?&sel_year='+sel_year,
           async: false,
           dataType: 'json',
           success: function(data) {
               console.log(data);
               var i;
               for (i = 0; i < data.length; i++) {
				if(data[i].dorm_ID==5 || data[i].dorm_ID==7 || data[i].dorm_ID ==17){
					html.push({
                       label: data[i].label, 
                       y:data[i].y,
					   color:"Moccasin"
					});
				}else{
					html.push({
						label: data[i].label, 
                        y:data[i].y,
					   	color:"DarkTurquoise"
					});	
				}
               }
                //var interval = 100;
                console.log(html);
                var chart = new CanvasJS.Chart("chartContainer", {
            		theme: "light1", // "light2", "dark1", "dark2"
                    animationEnabled: false, // change to tru
                    exportEnabled: true,	
            		title:{
            			text: ""+chart_name
            		},
            		axisY:{
						//interval:interval
					
                		},
            		data: [
            		
            		{
            			// Change type to "bar", "area", "spline", "pie",etc.
						type: "column",
                        indexLabel: "{y}", //Shows y value on all Data Points

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


/*   
1 == tag   ex.   $("div").click(function(){ xxx });
2 == id   ex.   $("#yearDD").click(function(){ xxx });
3 == class   ex.   $(".row").click(function(){ xxx });

*/ 
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