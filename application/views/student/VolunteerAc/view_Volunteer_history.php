<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">


<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

<head>
    <title> ประวัติการบำเพ็ญประโยชน์ | ระบบวินัยนักศึกษา</title>
</head>

<body>

    <meta charset="UTF-8">

    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('Student_dashboard') ?>" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ประวัติการบำเพ็ญประโยชน์</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;ประวัติการบำเพ็ญประโยชน์</h6>
                </div>



                <div class="card-body">


                    <table id="style_table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อกิจกรรม</th>
                                <th>วันที่จัดกิจกรรม</th>
                                <th>ระยะเวลากิจกรรม</th>
                                <th>สถานที่จัดกิจกรรม</th>
                                <th>ผู้ควบคุม</th>
                                <th>รายละเอียดกิจกรรม</th>
                            </tr>
                        </thead>

                        <tbody id="showdata">

                        </tbody>

                    </table>




                    <!-- Modal detail-->
                    <div class="modal fade" id="ShowDta" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">รายละเอียดการแจ้งเหตุ</h4>
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



                </div>





            </div>

        </div>





    </div>

    <script>
        $(document).ready(function() {

            show_all();
            disabled_sort();

            function disabled_sort() {
                $('#style_table').DataTable({
                    columnDefs: [{
                        orderable: false,
                        targets: 6
                    }]
                });
            }

            function show_all() {
                $.ajax({

                    type: 'POST',
                    url: '<?php echo site_url("Volunteer_history/showAll") ?>',
                    async: false, //ห้ามลืม
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i = 0;

                        $.each(data, function(key, value) {


                            i++;
                            html += '<tr>';
                            html += '<td>' + i + '</td>';
                            html += '<td>' + value.service_name + '</td>';
                            html += '<td>' + value.service_date + '</td>';
                            html += '<td>' + value.start_time + '- ' + value.end_time + '</td>';
                            html += '<td>' + value.place + '</td>';
                            html += '<td>' + value.confirm_name + '</td>';
                            html += '<td> <a href="javascript:;" data=' + value.service_ID + ' class="show_data"><i class="fa fa-file-text" style="color:rgba(67, 135, 254);font-size:1.5rem;"></i></a></td>';
                            html += '</tr>';

                            $('#showdata').html(html);

                        });

                    }


                });

            }

            $('#showdata').on('click', '.show_data', function() {

                var id = $(this).attr('data');
                //console.log(id);
                $('#ShowDta').modal('show');
                html = '';
                i = 0;

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

                            var sum =0;
                            //var hour_min = value.end_time  - value.start_time;
                            //console.log(typeof value.start_time);

                            var temp_1 = value.start_time; //รับค่าเวลาเริ่มต้น
                            var temp_2 = temp_1.substring(0, 5); //ตัดค่าจาก  hh:mm:ss => hh:mm
                            var temp_3 = temp_2.replace(":","."); //แปลง format จาก : => .
                            var start_time = parseFloat(temp_3); //แปลง str => Float

                            var temp_4 = value.end_time; //รับค่าเวลาเริ่มต้น
                            var temp_5 = temp_4.substring(0, 5); //ตัดค่าจาก  hh:mm:ss => hh:mm
                            var temp_6 = temp_5.replace(":","."); //แปลง format จาก : => .
                            var end_time = parseFloat(temp_6); //แปลง str => Float

                            var sum = end_time-start_time; //คำนวณจำนวน ชม ทั้งหมด
                                                       
                            // console.log (start_time);
                            // console.log (end_time);
                            //console.log (typeof start_time);

                            html += '<p>ผู้รับรองกิจกรรม ชื่อ: ' + value.person_fname + ' นามสกุล: ' + value.person_lname + ' หมายเลขโทรศัพท์ ' + value.phone1 + ' </p>';
                            html += '<p>สถานที่จัดกิจกรรม: ' + value.place + ' </p>';
                            html += '<p>วันที่กำหนด: ' + value.service_date + '  เวลา: '+ value.start_time + '- ' + value.end_time + ' ชั่วโมงกิจกรรม: '+ sum +' ชั่วโมง</p>';
                            html += '<p>จำนวนที่รับสมัคร: '+value.received +'</p>';
                            html += '<p>รายละเอียดกิจกรรม: '+value.explanation +' </p>';


                            $('.content').html(html);

                        });

                    },
                    error: function() {
                        alert('Error');
                    }
                });













            });




        });
    </script>





</body>

</html>