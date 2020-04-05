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
  background-color:Khaki;
  display: inline-block;
}
.square2 {
  height: 15px;
  width: 15px;
  background-color:SkyBlue;
  display: inline-block;
}
</style>
</head>
<body>

<form action="<?php echo site_url("compare_dormitory_contro")?>">
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
        <div class="col-9"></div> 
        <div class="col-1"><div id="yearDD2"></div></div> 
        <div class="col-1"><div id="monthDD2"></div></div> 
        <div class="col-1"></div> 
    </div>

	<div class="row">
		<div class="col-12">
			<div class="card-body">
			    <div id="chartContainer" style="height: 400px; width: 100%;"></div>
			</div>
		</div>
    </div>
    
    <div class="row">
        <div class="col-2"><div class="square1"></div><div id="yearmonthname"></div></div>
        <div class="col-2"><div class="square2"></div><div id="yearmonthname2"></div></div>
        <div class="col-8"></div> 
    </div>
  
</div>
</form>
</body>

<script type="text/javascript">

function gen_graph(sel_year,sel_month,sel_year2,sel_month2) {	
var html = [];
var html2 = [];
var chart_name = "สถิตินักศึกษาที่กระทำความผิดแยกตามหอพัก ระหว่างเดือน "+ monthThai(sel_month)+" ปี "+ sel_year + " กับ " + monthThai(sel_month2)+" ปี "+ sel_year2;
$('#yearmonthname').html(monthThai(sel_month)+" ปี "+ sel_year);
$('#yearmonthname2').html(monthThai(sel_month2)+" ปี "+ sel_year2);
	   $.ajax({
           type: 'ajax',
           url: '<?php echo base_url() ?>index.php/ReportChartdormitorycompareHeader/chartdorm?sel_month='+sel_month+'&sel_year='+sel_year,
           async: false,
           dataType: 'json',
           success: function(data) {
               console.log(data);
               var i;
               for (i = 0; i < data.length; i++) {
					html.push({
						label: data[i].label, 
					   	y:data[i].y,
					   	color:"Khaki"
					});	
               }

               $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/ReportChartdormitorycompareHeader/chartdorm?sel_month='+sel_month2+'&sel_year='+sel_year2,
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        var i;
                        for (i = 0; i < data.length; i++) {
                                html2.push({
                                    label: data[i].label, 
                                    y:data[i].y,
                                    color:"SkyBlue"
                                });	
                        }
                            //var interval = 100;
                            console.log(html2);
                            var chart = new CanvasJS.Chart("chartContainer", {
                                theme: "light1", // "light2", "dark1", "dark2"
                                animationEnabled: false, // change to true	
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
                                        
                                    
                                },
                                {
                                    // Change type to "bar", "area", "spline", "pie",etc.
                                    type: "column",
                                    indexLabel: "{y}", //Shows y value on all Data Points

                                    
                                    dataPoints: html2
                                        /*
                                        { label: "หมวด 6 ความผิดเกี่ยวกับการเสพสุราหรือของมึนเมา",  y: 60  },
                                        { label: "หมวด 8 ความผิดเกี่ยวกับวินัยจราจร", y: 15  },
                                        { label: "หมวด 9 ความผิดเกี่ยวกับความประพฤติ  ศีลธรรม และวัฒนธรรมอันดีงาม", y: 25  },
                                        { label: "หมวด 11 ความผิดเกี่ยวกับความสะอาดเรียบร้อย",  y: 60  },
                                */
                                        
                                    
                                },
                                
                                
                                ]
                            });
                        
                            
                        chart.render();
                        
                    },
                    error: function() {
                        alert('ไม่มีข้อมูล');
                    }
                });  

           },
           error: function() {
               alert('ไม่มีข้อมูล');
           }
	   });     

}

$( document ).ready(function() {
	getMonthSetInDropdownlists();
    getMonthSetInDropdownlists2();
	getYearSetInDropdownlists();
    getYearSetInDropdownlists2();

    var sel_year = <?php echo  (date("Y")+543) ?>;
    var sel_month = <?php echo  (date("m")) ?>;
    var sel_year2 = <?php echo  (date("Y")+543) ?>;
    var sel_month2 = <?php echo  (date("m")) ?>;
    gen_graph(sel_year,sel_month,sel_year2,sel_month2);
    


/*   
1 == tag   ex.   $("div").click(function(){ xxx });
2 == id   ex.   $("#yearDD").click(function(){ xxx });
3 == class   ex.   $(".row").click(function(){ xxx });

*/ 
    $("#search_data").click(function(){
        var sel_year = $("#year").val();
        var sel_month = $("#month").val();
        var sel_year2 = $("#year2").val();
        var sel_month2= $("#month2").val();
        gen_graph(sel_year,sel_month,sel_year2,sel_month2);
    });
 
});
function getMonthSetInDropdownlists() {
	
    var html = '<select id="month" name="month"><option value="" disabled selected>เลือกเดือน</option>';
    var cur_month = <?php echo  (date("m")) ?>;
    for(var i = 1; i <= 12; i++){
        var sel = "";
        if(i==cur_month){sel = "selected";}
        html += 
                '<option value="' + i + '" '+sel+'>' + monthThai(i) + '</option>';
        /*if(i < 10){
		
            html += 
                '<option value="' + i + '">' + monthThai("0"+i) + '</option>';
        }else{
            html += 
            '<option value="' + i + '">' + monthThai(i.toString()) + '</option>';
        }*/
    }
    html += 
        '</select>';
	$('#monthDD').html(html);
}

function getMonthSetInDropdownlists2() {
	
    var html = '<select id="month2" name="month2"><option value="" disabled selected>เลือกเดือน</option>';
    var cur_month = <?php echo  (date("m")) ?>;
    for(var i = 1; i <= 12; i++){
        var sel = "";
        if(i==cur_month){sel = "selected";}
        html += 
                '<option value="' + i + '" '+sel+'>' + monthThai(i) + '</option>';
        /*if(i < 10){
		
            html += 
                '<option value="' + i + '">' + monthThai("0"+i) + '</option>';
        }else{
            html += 
            '<option value="' + i + '">' + monthThai(i.toString()) + '</option>';
        }*/
    }
    html += 
        '</select>';
	$('#monthDD2').html(html);
}


function monthThai(data){
    
    var month_name = [  "","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม",
                        "มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"];
    return month_name[data];

    /*var month = ""; switch($data){
        case "01" : month = "มกราคม"; break;
        case "02" : month = "กุมภาพันธ์"; break;
        case "03" : month = "มีนาคม"; break;
        case "04" : month = "เมษายน"; break;
        case "05" : month = "พฤษภาคม"; break;
        case "06" : month = "มิถุนายน"; break;
        case "07" : month = "กรกฎาคม"; break;
        case "08" : month = "สิงหาคม"; break;
        case "09" : month = "กันยายน"; break;
        case "10" : month = "ตุลาคม"; break;
        case "11" : month = "พฤศจิกายน"; break;
        case "12" : month = "ธันวาคม"; break;
    }

    return month;*/
}
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

function getYearSetInDropdownlists2() {
    var cur_year = <?php echo  (date("Y")+543) ?>;
    

    var html = '<select id="year2" name="year2">';
    for(var i = (cur_year-4); i <=cur_year; i++){
        var sel = "";
        if(i==cur_year){sel = "selected";}
        html += 
                '<option value="'+ i +'" '+sel+'>' + i + '</option>';
    }
    html += 
        '</select>';
    $('#yearDD2').html(html);
}
//ใส่ฟังก์ชั่นเดือน
</script>
</html>