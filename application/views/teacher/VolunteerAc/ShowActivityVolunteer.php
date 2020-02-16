<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_show_activity_.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/normalize.min.css') ?>">

<head>
    <title> กิจกรรมบำเพ็ญประโยชน์ทั้งหมด | ระบบวินัยนักศึกษา</title>
</head>
<script>
    var dataset = [];
</script>

<body>



    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('Teacher_dashboard') ?>" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">กิจกรรมบำเพ็ญประโยชน์ทั้งหมด</li>
                </ol>
            </nav>
        </div>


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;การบำเพ็ญประโยชน์</h6>
                </div>

                <div class="card-body">
                    <table id="style_table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th id="idsort">ลำดับ</th>
                                <th id="detail_activity_regis">ข้อมูลกิจกรรม</th>
                                <th id="person_control">ผู้ควบคุม</th>
                                <th id="manage">รายชื่อผู้เข้าร่วมกิจกรรม</th>
                            </tr>
                        </thead>

                        <tbody id="showdata">

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>



    <div class="modal fade bd-example-modal-lg" id="show_participants" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="TitleActivity">กิจกรรมบำเพ็ญประโยชน์</div>
                    <div class="Print"><img src="<?php echo base_url('re/images/print.png') ?>" alt="" class="ImgPrint"></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="HeaderData">
                        <div class="DetailData">
                            <span id="activity_name_modal">กิจกรรม: ปลูกต้นไม้รักษํโลก จังหวัดเพชรบูรณ์</span>
                            <span id="date_activity">วันที่จัดกิจกรรม 12 ธันวาคม 2563</span>
                            <span id="time_activity">เวลาเริ่ม 13:00 ถึง 14:00 ชั่วโมงกิกรรม 1 ชม.</span>
                            <span id="place">เทศบาลตำบลสถาน ต.สถาน อ.เชียงของ จ.เขียงราย โทร. 053-791607</span>
                        </div>
                    </div>
                    <div class="ShowDataParticipants" id="data">

                        <table id="data_activity_participants" class="table table-striped table-bordered nowrap" style="width:100%">

                        </table>

                    </div>

                    <div class="PrintDataTableReport" id="data_table">
                        <div class="HeaderReport">
                            <div class="part1">
                                <img src="<?php echo base_url('re/images/logo_sys_mini.png') ?>" alt="" class="logofile">
                            </div>
                            <div class="part2">
                                <span class="title1">มหาวิทยาลัยวลัยลักษณ์ | Walailak University</span>
                                <span class="title2">ระบบวินัยนักศึกษา | หน่วยงานวินัยนักศึกษา</span>
                                <span class="title3">กิจกรรมบำเพ็ญประโยชน์</span>
                            </div>
                        </div>
                        <div class="DetailActivity">
                            <div class="part3">
                                <span id="title4">1.รายละเอียดกิจกรรมบำเพ็ญประโยชน์</span>
                                
                            </div>
                            <div class="part4"></div>

                        </div>

                    </div>


                </div>



            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            show_all();
            disabled_sort();



            function disabled_sort() {
                $('#style_table').DataTable({
                    columnDefs: [{
                        orderable: false,
                        targets: [1, 2]
                    }]
                });
            }
        });

        function show_all() {

            html = '';
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url("Teacher_dashboard/Allactivity") ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i = 0;

                    console.log(data);

                    $.each(data, function(key, value) {

                        var temp_1 = value.start_time;
                        var temp_2 = value.end_time;
                        var show_start_time = temp_1.substring(0, 5);
                        var show_end_times = temp_2.substring(0, 5);
                        var start_times = parseFloat(temp_1.substring(0, 5));
                        var end_times = parseFloat(temp_2.substring(0, 5));
                        var counthour = Math.abs(end_times - start_times);

                        i++;
                        html += '<tr>';
                        html += '<td id="sort_number">' + i + '</td>';
                        html += '<td id="detail_activity">';
                        html += '<div class="DetailActivity">';
                        html += '<span id="activity_name">กิจกรรม: ' + value.service_name + '</span>';
                        html += '<span id="date_activity">วันที่จัดกิจกรรม ' + value.service_date + '</span>';
                        html += '<span id="time_activity">เวลาเริ่ม ' + show_start_time + ' ถึง ' + show_end_times + ' ชั่วโมงกิกรรม ' + counthour + ' ชม.</span>';
                        html += '<span id="place">' + value.place + '</span>';
                        html += '</div>';
                        html += '</td>';
                        html += '<td id="person_control">สมฤดี เย็นใจ</td>';
                        html += '<td id="file"><span id="open_name_participants" data=' + value.service_ID + '><i class="fa fa-folder-open"></i></span></td>';
                        html += '</tr>';

                    });
                    $('#showdata').html(html);
                }
            });
        }



        $('.Print').click(function() {
            $('#data_table').print()
        });

        $("#PrintDataTableReport").find('.ImgPrint').on('click', function() {
            //Print ele2 with default options
            $("#PrintDataTableReport").print({
                mediaPrint: true,
                stylesheet: "https:fonts.googleapis.com/css?family=Sarabun&display=swap"
            });
        });


        $('#showdata').on('click', '#open_name_participants', function() {
            $('#show_participants').modal('show');
            var serviceid = $(this).attr('data');
            var data = {
                id: serviceid
            }
            dataset = [];

            $.ajax({
                type: 'GET',
                url: '<?php echo site_url("Teacher_dashboard/studentinactivity") ?>',
                async: false,
                data: data,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var i = 0;
                    $.each(data, function(key, value) {
                        i++;
                        var name = value.std_fname + " " + value.std_lname;
                        dataset.push(new Array(i, value.S_ID, name, value.email, value.phone));
                    });

                }
            });

            $('#data_activity_participants').DataTable({
                "bDestroy": true,
                "data": dataset,
                "columns": [{
                        title: "ลำดับ"
                    },
                    {
                        title: "รหัสนักศึกษา"
                    },
                    {
                        title: "ชื่อ-นามสกุล"
                    },
                    {
                        title: "email"
                    },
                    {
                        title: "หมายเลขโทรศัพท์"
                    }
                ],
                columnDefs: [{
                    orderable: false,
                    targets: [2, 3, 4]
                }]
            });



        });

        $(function() {


        });
    </script>


</body>