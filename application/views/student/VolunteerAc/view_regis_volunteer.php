<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_regis_activity_student.css') ?>">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>


<head>
    <title> ลงทะเบียนกิจกรรมบำเพ็ญประโยชน์ | ระบบวินัยนักศึกษา</title>
    <script>
        var id_count = 0; //run id
        var temp_result = [];
    </script>
</head>

<body>

    <meta charset="UTF-8">

    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ลงทะเบียนกิจกรรมบำเพ็ญประโยชน์</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;การบำเพ็ญประโยชน์</h6>
                </div>

                <div class="ShowActivity">

                 

                </div>
            </div>
        </div>
    </div>


    <!-- Modal detail-->
    <div class="modal fade" id="ShowDta" role="dialog">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body content">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {

            show_all();



            //Regis activity
            $('.show_data').on('click', '.btn_submit', function() {

                var id = $(this).attr('data'); //Get Sevice id 

                //console.log(id);


                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    url: '<?php echo site_url('Volunteer_regis/regisnotify') ?>',
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        alert('ลงทะเบียนสำเร็จ');
                        location.reload();

                    },
                    error: function() {
                        alert('ไม่สามารถลงทะเบียนได้');
                    }
                });
            });
        });


        function show_all() {

            html = '';
            $.ajax({

                type: 'POST',
                url: '<?php echo site_url("Volunteer_regis/showAll") ?>',
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
                        html +=     '<span id="title1">กิจกรรม : '+ value.service_name +'</span>';
                        html +=     '<span id="title2"> <span><i class="far fa-calendar-alt iconlabel"></i></span> วันที่จัดกิจกรรม : '+ value.service_date +' </span>';
                        html +=     '<span id="title3"> <span><i class="fas fa-clock iconlabel"></i></span> เวลาเริ่ม '+ start_times +' ถึง '+ end_times +' ชั่วโมงกิกรรม '+ counthour +' ชม.</span>';
                        html +=     '<span id="title4"> <span><i class="fas fa-user iconlabel"></i></span>ผู้รับรองกิจกรม: นาย สมมุติ สมสุข</span>';
                        html += '</div>';
                        html += '<div class="Main2">';
                        html +=    '<div class="CountStudent">จำนวนผู้เข้าร่วม</div>';
                        html +=    '<div><span id="last_count_student">'+ value.number_of +'</span>/'+ value.received +'</div>';
                        html += '</div>';
                        html += '<div class="Main3">';
                        html +=    '<button type="submit" class="RegisActivity">สมัครกิจกรรม</button>';
                        html += '</div>';
                        html += '</div>';

                        $('.ShowActivity').html(html);
                    });

                }
            });
        }


        //show more detail
        $('.show_data').on('click', '.sh_modal', function() {

            var id = $(this).attr('data');
            //console.log(id);
            html = '';

            $('#ShowDta').modal('show');

            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo site_url('Volunteer_regis/show_whereid') ?>',
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    //alert('Sucess');

                    $.each(data, function(key, value) {


                        var sum = 0;

                        var temp_1 = value.start_time; //รับค่าเวลาเริ่มต้น
                        var temp_2 = temp_1.substring(0, 5); //ตัดค่าจาก  hh:mm:ss => hh:mm
                        var temp_3 = temp_2.replace(":", "."); //แปลง format จาก : => .
                        var start_time = parseFloat(temp_3); //แปลง str => Float

                        var temp_4 = value.end_time; //รับค่าเวลาเริ่มต้น
                        var temp_5 = temp_4.substring(0, 5); //ตัดค่าจาก  hh:mm:ss => hh:mm
                        var temp_6 = temp_5.replace(":", "."); //แปลง format จาก : => .
                        var end_time = parseFloat(temp_6); //แปลง str => Float

                        var sum = end_time - start_time; //คำนวณจำนวน ชม ทั้งหมด

                        $('.modal-title').text(value.service_name); //set name header

                        html += '<p>ผู้รับรองกิจกรรม ชื่อ: ' + value.person_fname + ' นามสกุล: ' + value.person_lname + ' หมายเลขโทรศัพท์ ' + value.phone1 + ' </p>';
                        html += '<p>สถานที่จัดกิจกรรม: ' + value.place + ' </p>';
                        html += '<p>วันที่กำหนด: ' + value.service_date + '  เวลา: ' + value.start_time + '-' + value.end_time + ' ชั่วโมงกิจกรรม: ' + sum + ' ชั่วโมง</p>';
                        html += '<p>จำนวนที่รับสมัคร: ' + value.received + '</p>';
                        html += '<p>รายละเอียดกิจกรรม: ' + value.explanation + ' </p>';
                        $('.content').html(html);
                    });

                },
                error: function() {
                    alert('Error');
                }
            });
        });
    </script>



</body>