
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script> src="js/bootstrap.js"</script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js">    </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"> </script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
   <!--<link rel="stylesheet" href="css/custom.css">-->
 <link ref="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
   <link ref="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
   


</head>
<body>
    <div class="container">
        <!-- <div class="test"> -->
        <!-- <div class="dropdown"> -->
                        <!-- <p id="dateTime"></p> -->
        <div class="row" style="margin: 10px 0px 20px 0px;">
             <div class="col-12 text-center"><h2>รายงานนักศึกษาที่กระทำความผิดแยกตามหมวดความผิด</h2></div>
        </div>
        <div class="row" style="margin: 10px 0px 10px 0px;">
             <div class="col-3 text-left"><div id="curriculumDD"></div></div>
             <div class="col-9 text-left"><div id="offenseDD"></div></div>
        </div>
        <div class="row">
             <div class="col-3 text-left"><div id="monthDD"></div></div>
             <div class="col-2 text-left"><div id="yearDD"></div></div>
             <div class="col-1 text-left"><button type="button" id="search">ค้นหา </button></div>
        </div>

    
</td>
  </tr>

<div class="card-body">
    <div class="bootstrap-data-table-panel">
        
        <div class="table-responsive">
        <table id="style_table" class="table table-hover display" style="width: 100%" >
                            <thead>
                               
                <th colspan="9" class="text-dark" id="oc_desc"></th>
                </tr>
                <tr>
                <th colspan="9" class="bg-light text-dark" id="off_desc"></th>
                </tr>
                <tr>
                <th colspan="9" class="bg-light text-dark" id="cur_name"></th>
                </tr>
                    <th><center>ลำดับ</center></th>
                    <th><center>รหัสนักศึกษา</center></th>
                    <th>ชื่อ - นามสกุล</th>
                    <th><align=right>คะแนนที่เหลือ</align=right></th>
                    <th><center>คะแนนที่หัก</center></th>
                    <th><center>จำนวนครั้ง</center></th>
                    
                    <th><center>หอ</center></th>
                    
                                </tr>
                            </thead>
                            <tbody id="showdata">
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>


<script> 
$(document).ready(function(){
    
    getCurriculumSetInDropdownlists();
    getOffenseSetInDropdownlists();
    getMonthSetInDropdownlists();
    getYearSetInDropdownlists();
    // Call Fn

	 $('#tblName').DataTable();
     autoFill: true
     
    
     
     $("#search").click(function(){
        getDetail();
     })
});

// สร้าง ajax ดึงข้อมูล

// สร้าง dropdown หลักสูตร
function getCurriculumSetInDropdownlists() {
    $.ajax({
        url: '<?php echo base_url() ?>index.php/Report_test/getCurriculum',
        type: 'POST',
        data: {

        },
        success: function(data) {
            console.log("getCurriculumSetInDropdownlists: OK");
            if( data.length != 0 ){
                var obj = JSON.parse(data);
                
    
                var html = '<select id="curriculum"><option value="" disabled selected>กรุณาเลือกหลักสูตร</option>';

                obj.forEach(function(data){
                    html += 
                        '<option value="' + data.cur_ID + '">' + data.cur_name + '</option>';
                });
                html += 
                        '</select>';
                $('#curriculumDD').html(html);
            }else{
                alert('ไม่มีข้อมูล');
                $('#showdata').html();
            }
        },
        error: function() {
            alert('ไม่มีข้อมูล');
        }
    });
}

// สร้าง dropdown ฐานความผิด
function getOffenseSetInDropdownlists() {
    $.ajax({
        url: '<?php echo base_url() ?>index.php/Report_test/getOffense',
        type: 'POST',
        data: {

        },
        success: function(data) {
            console.log("getOffenseSetInDropdownlists: OK");
            if( data.length != 0 ){
                var obj = JSON.parse(data);
                
    
                var html = '<select id="offense"><option value="" disabled selected>กรุณาเลือกฐานความผิด</option>';

                obj.forEach(function(data){
                    html += 
                        '<option value="' + data.off_ID + '">' + data.off_desc + '</option>';
                });
                html += 
                        '</select>';
                $('#offenseDD').html(html);
            }else{
                alert('ไม่มีข้อมูล');
                $('#showdata').html();
            }
        },
        error: function() {
            alert('ไม่มีข้อมูล');
        }
    });
}


// สร้าง dropdown เดือน
function getMonthSetInDropdownlists() {
    var html = '<select id="month"><option value="" disabled selected>กรุณาเลือกเดือน</option>';
    for(var i = 1; i <= 12; i++){
        if(i < 10){
            html += 
                '<option value="' + i + '">' + monthThai("0"+i) + '</option>';
        }else{
            html += 
            '<option value="' + i + '">' + monthThai(i.toString()) + '</option>';
        }
    }
    html += 
        '</select>';
    $('#monthDD').html(html);
}

// สร้าง dropdown เดือน
function getYearSetInDropdownlists() {
    var html = '<select id="year"><option value="" disabled selected>กรุณาเลือกพ.ศ</option>';
    for(var i = 2558; i <= 2562; i++){
        html += 
                '<option value="' + i + '">' + i + '</option>';
    }
    html += 
        '</select>';
    $('#yearDD').html(html);
}
    












function getDetail() {
    var cur_ID = $("#curriculum").val(); // สำนักวิชา 19 นิเทษ
    var off_ID = $("#offense").val(); // ฐาน 803
    var month = $("#month").val(); // เดือน 09
    var year = Number($("#year").val()) - 543; // ปี 2019
    console.log("cur_ID: " + cur_ID + ", off_ID: " + off_ID + ", month: " + month + ", year: " + year);

    $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/Report_test/showAll',
        async: false,
        type: 'POST',
        data: {
            cur_ID: cur_ID,
            off_ID: off_ID,
            month: month,
            year: year
        },
        success: function(data) {
            console.log("showAll: OK");
            if( data.length != 0 ){
                var obj = JSON.parse(data);
                
                var html = '';
                var n = 1;

                var oc_desc = ""; // หมวด
                var off_desc = ""; // ฐาน
                var cur_name = ""; // หลักสูตร
                var date = ""; // หลักสูตร
                var year = "";
                var month = "";
 
                obj.forEach(function(data){

                    oc_desc = "หมวดที่ " + data.oc_ID + " " + data.oc_desc;
                    off_desc = "ฐานที่ " + data.off_ID + " " + data.off_desc;
                    cur_name = data.cur_name;
                    date = data.committed_date;
                //    year = parseInt(date.substring(0, 4))+543;
                //    month = monthThai(date.substring(5, 7));

                    var totaltimes = 0;
                    if(data.num_of==null){
                        totaltimes = 0;
                    }else{
                        totaltimes = data.num_of;
                    }
                    html += 
                        '<tr>' +
                        '<td> <center>' + n + ' </center></td>' +
                        '<td> <center>' + data.S_ID + '</center></td>' +
                        '<td> ' + data.std_fname + ' ' + data.std_lname +'</td>' +
                        '<td  align="right">' + data.behavior_score + '</right></td>' +
                        '<td align="right">' + data.point + '</right></td>' +
                        '<td align="right">' + totaltimes + '</td>' +
                        '<td> <left>' + data.cur_name + '</left></td>' +
                        '<td> <left>' + data.dname + '</left></td>' +
                        '</tr>';
                    n+=1;
                });
                $('#oc_desc').html(oc_desc);
                $('#off_desc').html(off_desc);
                $('#cur_name').html(cur_name);
                $('#showdata').html(html);
             $('#dateTime').html("ประจำเดือน "+month+" "+year);
            }else{
                alert('ไม่มีข้อมูล');
                $('#showdata').html();
            }
        },
        error: function() {
            alert('ไม่มีข้อมูล');
        }
    });
}

function monthThai($data){
    var month = "";

    switch($data){
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

    return month;
}


</script>
</html>
</body>