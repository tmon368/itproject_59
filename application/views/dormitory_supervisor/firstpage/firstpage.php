<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_user_security.css'); ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_regis_activity_student.css') ?>">
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
<style>
    #title6 {
        font-size: 16px;


    }

    #title7 {
        font-size: 16px;

        font-weight: 700;
    }

    #last_count_student2 {
        color: #ff0000;
        font-size: 35px;
        font-weight: 700;
    }

    #fasfa-users {
        color: orange;
        font-size: 70px;
        text-shadow: 1px 1px 1px #000;
    }

    #showscorestudent {
        font-size: 50px;
    }

    #showscoreservice {
        font-size: 30px;

    }

    #showscoretraining {
        font-size: 30px;

    }

    .btnsearch {
        color: #fff;
        font-size: 15px;
        padding: 8px;
        margin-top: 5%;
        background-color: #F2603E;
        text-align: center;
    }

    .form_input {
        width: 250px;
        padding: 8px;
        border-radius: 45px;
        margin: 15px;
        background-color: #e6f9ff;
    }

    .bggreen {
        background-color: #99FF99;
        width: 250px;
        padding: 8px;
        border: 15px;
        margin: 15px;
        border-radius: 45px;

    }

    #fasfa-chalkboard-teacher {
        color: black;
        font-size: 70px;
        text-shadow: 1px 1px 1px #000;
    }

    #farfa-calendar-check {
        color: black;
        font-size: 70px;
        text-shadow: 1px 1px 1px #000;

    }

    .btnbtn-inverse-primarybtn-fw {
        width: 600px
    }

    .btnbtn-inverse-primarybtn-fw ul {
        list-style-type: none;
        margin: 0px;
        padding: 10px;
        font-family: '', sans-serif;
        font-size: 0.85em;
        color: rgb(0, 0, 0);
    }

    .btnbtn-inverse-primarybtn-fw li {
        float: left;
        padding: 0px;
        padding: 0px;
        text-align: center;
        width: 40.33%;
        background-color: #40ff00;
        width: 250px;
        padding: 8px;
        border: 15px;
        margin: 15px;
        border-radius: 45px;
    }

    .btnbtn-inverse-warningbtn-fw {
        width: 600px
    }

    .btnbtn-inverse-warningbtn-fw ul {
        list-style-type: none;
        margin: 0px;
        padding: 0px;
        font-family: 'Open Sans', sans-serif;
        font-size: 0.85em;
        color: rgb(0, 0, 0);
    }

    .btnbtn-inverse-warningbtn-fw li {
        float: left;
        padding: 0px;
        padding: 0px;
        text-align: center;
        width: 40.33%;
        background-color: #ffbf00;
        width: 250px;
        padding: 8px;
        border: 15px;
        margin: 15px;
        border-radius: 45px;
    }
</style>

<head>
    <title></title>





</head>
<br>

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

        <div class="col-lg-4 grid-margin stretch-card">

            <div class="col-lg-12 ">

                <div class="col-lg-12 ">
                    <div class="card shadow mb-4">
                        <div class="card-header" id="card_2">
                            <h6 class="m-0 text-primary"></h6>
                        </div>
                        <div class="card shadow mb-3">
                            <div class="card-body " id="card_1">
                                <center>จำนวนนักศึกษาที่กระทำผิด </center>
                                <br>
                                <center><i class="fas fa-users" id="fasfa-users"></i><br>
                                    <div id="showscorestudent" name="showscorestudent"></div><br>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-12 ">
                    <div class="card shadow mb-3">
                        <div class="card shadow mb-4">
                            <div class="card-header" id="card_2">
                                <h6 class="m-0 text-primary"></h6>
                            </div>
                            <div class="card-body " id="card_1">
                                <font size="2">
                                    <center>ค้นหาความผิดของนักศึกษารายบุคคล</center>
                                </font>
                                <center>
                                    <div class="search-container">
                                        <form action="" id="formakk">
                                            <input type="text" class="form_input" id="studentid" placeholder="กรอกรหัสนักศึกษา" name="search">
                                            <button type="button" class="btnsearch" id="offense_card">ค้นหา</button>
                                        </form>
                                    </div>


                                </center>

                            </div>

                        </div>
                    </div>
                </div>



            </div>





        </div>


        <div class="col-lg-8 grid-margin stretch-card">

            <div class="col-lg-12 ">
                <div class="card shadow mb-4">
                    <div class="card-header" id="card_2">
                        <h6 class="m-0 text-primary"></h6>
                    </div>
                    <div class="card shadow mb-3">
                        <div class="card-body " id="card_1">
                            <font size="4">
                                <center>จำนวนนักศึกษาที่กระทำผิดแต่ละหมวดของหอพักทั้งหมด<center>
                            </font>
                            <br><br>

                            
                            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            <script type="text/javascript">
                                window.onload = function() {
                                    $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/dormitory_supervisor_dashboard/getDashboard',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);

                                    var chart = new CanvasJS.Chart("chartContainer", {
                                        height: 350,
                                        animationEnabled: true,
                                        animationDuration: 2000, //change to 1000, 500 etc
                                        axisX: {
                                            title: "หมวดความผิด"
                                        },
                                        data: [{
                                            dataPoints: data
                                            
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
                            <br><br><br><br>
                        </div>

                    </div>



                    <div class="col-lg-7 ">
                        <font size="4">
                            <div class="card-header" id="card_2">
                                <h6 class="m-0 text-primary"></h6>
                            </div><br>
                            <center>กิจกรรมเพิ่มเติม</center>
                        </font><br>
                        <div class="btn btn-inverse-success btn-fw " id="btnAdd" data-toggle="modal">
                            <ul>
                                <li>
                                    <font size="4">
                                        <center>กิจกรรมบำเพ็ญประโยชน์ </center>
                                    </font><br>
                                    <i class="far fa-calendar-check" id="farfa-calendar-check"></i>
                                    <p id="showscoreservice" name="showscoreservice">
                                        <h3>กิจกรรม</h3>
                                    </p>


                                </li>
                            </ul>
                        </div>
                        &nbsp;&nbsp;&nbsp;
                        <div class="btn btn-inverse-warning btn-fw" id="training_card" data-toggle="modal">
                            <ul style="padding-right:50px">
                                <li >
                                    <font size="4">
                                        <center>กิจกรรมการอบรม</center>
                                    </font><br>
                                    <i class="fas fa-chalkboard-teacher" id="fasfa-chalkboard-teacher"></i>
                                    <p id="showscoretraining" name="showscoretraining">
                                        <h3>กิจกรรม</h3>
                                    </p>


                                </li>
                            </ul>
                        </div>
                       

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" style="max-width: 700px!important;" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLongTitle">กิจกรรมบำเพ็ญประโยชน์</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <!--ส่วนฟอร์มกิจกรรมบำเพ็ญ-->
                                        <form action="1" id="formadd" method="post" class="needs-validation">
                                            <div class="form-group" id="input_group_sty">
                                                <div class="input-group">


                                                    <div class="ShowActivity">


                                                    </div>

                                                </div>
                                            </div>



                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>





    <div class="modal fade" id="ShowTrain" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 700px!important;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">กิจกรรมการอบรม</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body BodyTrain">
                   
                </div>
            </div>
        </div>
    </div>







    <div class="modal fade" id="Showoffen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 1200px!important;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">รายละเอียดการกระทำผิดของนักศึกษา</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body offenstudent">
                <form action="" id="formakk" method="post" class="needs-validation">
                                            

                <div class="modal-body showoffense">
                </div>

                                                </div>
                                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            selectscorestudent();
            selectscoreservice();
            selectscoretraining();

            function selectscorestudent() {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/dormitory_supervisor_dashboard/getDashboard',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        // alert(data)
                        $('#showscorestudent').html(data.numstd);

                    },
                    error: function() {
                        alert('ไม่มีข้อมูล');
                    }
                });
            }

            function selectscoreservice() {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/dean_dashboard/selectscoreservice',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        // alert(data)
                        $('#showscoreservice').html(data.numberservice);


                    },
                    error: function() {
                        alert('ไม่มีข้อมูล');
                    }
                });
            }

            function selectscoretraining() {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/dean_dashboard/selectscoretraining',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        // alert(data)
                        $('#showscoretraining').html(data.numbertraining);


                    },
                    error: function() {
                        alert('ไม่มีข้อมูล');
                    }
                });
            }


   //โชว์กิจกรรมข้อมูล

   $('#btnAdd').click(function() {
            $('#exampleModalCenter').modal('show');
             show_all();
        });

        $('#training_card').click(function() {
            $('#ShowTrain').modal('show');
            show_ell();

        });
        $('#offense_card').click(function() {
            $('#Showoffen').modal('show');
            search();

        });
        $(".btnsearch").click(function() {
            search();    
        });


        function show_all() {

            html = '';
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url("dean_dashboard/showAlll") ?>',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $.each(data, function(key, value) {
                        
                        var temp_1 = value.start_time;
                        var temp_2 = value.end_time;
                        var start_times = parseFloat(temp_1.substring(0, 5));
                        var end_times = parseFloat(temp_2.substring(0, 5));
                        var counthour = Math.abs(end_times - start_times);

                        //console.log(counthour);

                        html += '<div class="Data">';
                        html += '<div class="Main1">';
                        html += '<span id="title1">กิจกรรม : ' + value.service_name + '</span>';
                        html += '<span id="title6"> <span><i class="far fa-calendar-alt iconlabel"></i></span> วันที่จัดกิจกรรม : ' + value.service_date + ' </span>';
                        html += '<span id="title6"> <span><i class="fas fa-clock iconlabel"></i></span> เวลาเริ่ม ' + start_times + ' ถึง ' + end_times + ' ชั่วโมงกิกรรม ' + counthour + ' ชม.</span>';
                        html += '<span id="title6"> <span><i class="fas fa-user iconlabel"></i></span>ผู้รับรองกิจกรม: ' + value.person_fname + " " + value.person_lname + '</span>';
                        html += '</div>';
                        html += '<div class="Main2">';
                        html += '<div class="CountStudent">จำนวนผู้เข้าร่วม</div>';
                        html += '<div><span id="last_count_student">' + value.number_of + '</span>/' + value.received + '</div>';
                        html += '</div>';
                        html += '<div class="Main3">';
                        html += '</div>';
                        html += '</div>';
                       

                    });
                    $('.ShowActivity').html(html);
                }
            });
        }

        function show_ell() {

            html = '';
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url("dean_dashboard/showell") ?>',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $.each(data, function(key, value) {

                        html += '<div class="Data">';
                        html += '<div class="Main1">';
                        html += '<span id="title1">กิจกรรม : ' + value.train_name + '</span>';
                        html += '<span id="title6"><i class="fas fa-users iconlabel"></i> หมวดการอบรม : ' + value.oc_desc + ' </span>';
                        html += '<span id="title6"><i class="fas fa-user iconlabel"></i> ผู้ควบคุมการอบรม ชื่อ : ' + value.person_fname + " " + value.person_lname + ' </span>';
                        html += '<span id="title6"><i class="far fa-calendar-alt iconlabel"></i> วันที่อบรม : ' + value.train_date + " จำนวนผู้อบรม :" + value.train_receive + '</span>';
                        html += '<span id="title6"><i class="fas fa-building iconlabel"></i> สถานที่ : ' + value.place_name + " ห้องที่จัดอบรม :" + value.room + '</span>';
                        html += '<span id="title6"><i class="fas fa-hourglass-half iconlabel"></i> จำนวนชั่วโมง : ' + value.time + ' </span>';
                        html += '<span id="title6"><span><i class="fas fa-clock iconlabel"></i> หมายเหตุ : ' + value.note + ' </span>';
                        html += '</div>';
                        html += '<div class="Main2">';
                        html += '</div>';
                        html += '<div class="Main3">';
                        html += '</div>';
                        html += '</div>';
                        

                    });
                    $('.BodyTrain').html(html);
                }
            });
        }



function search(){

var studentid = $('#studentid').val();
//var day = $('#date').val();
//var mount2 = $('#datemount2').val();
//var year = $('#dateyear').val();


var data = {getstdID:studentid};

$.ajax({
    url: '<?php echo site_url("dean_dashboard/searchoffensestudent") ?>',
    async: false,
    dataType: 'json',
    data: data, 
    success: function(data) {
        console.log(data);

        if (data == false){
             alert ('ไม่พบข้อมูลดังกล่าว');
        }else{

           html = ' ';
        $.each(data, function(key, value) { 
            //htmlweb += '<div class="persondata">';  
            html += '<div class="Data">';
            html += '<div class="Main1">';
            html += '<span id="title7">รหัสนักศึกษา: '+ value.S_ID +"    "+'ชื่อ : '+ value.std_fname +" "+ value.std_lname +'</span>'+'</span>';
            html += '<span id="title6">วันที่กระทำผิด:  '+ value.committed_date +'</span>';
            html += '<span id="title6">ฐานความผิด: '+ value.off_desc +'</span>';
            html += '<span id="title6">สถานะการกระทำความผิด:  '+ value.statusoffname +'</span>';
            html += '</div>';
            html += '<div class="Main2">';
            html += '<div class="CountStudent">คะแนนที่หัก</div>';
            html += '<div><span id="last_count_student2">' + value.point + '</div>';
            html += '</div>';
            html += '<div class="Main3">';
            html += '<div class="CountStudent">คะแนนคงเหลือ</div>';
            html += '<div><span id="last_count_student">' + value.behavior_score  + '</div>';
            html += '</div>';
            html += '</div>';
           // htmlweb += '<div class="progress_bar">';
          //  htmlweb += '<div class="progress">';
          //  htmlweb += '<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>';
          //  htmlweb += '</div>';
           // htmlweb += '</div>';
           // htmlweb += '</div>';
        });
        $('.showoffense').html(html);

        }
       

        
       

    
    }
});


}




        });
    </script>

</body>

</html>