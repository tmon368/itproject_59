<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_all_my_activity.css') ?>">


<head>
    <title> กิจกรรมทั้งหมดของฉัน | ระบบวินัยนักศึกษามหาวิทยาลัยวลัยลักษณ์</title>
</head>

<body>



    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">กิจกรรมทั้งหมดของฉัน</li>
                </ol>
            </nav>
        </div>


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;กิจกรรมทั้งหมดของฉัน</h6>
                </div>

                <div class="card-body">
                    <table id="style_table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th id="idsort">ลำดับ</th>
                                <th id="detail_activity_regis">ข้อมูลกิจกรรม</th>
                                <th id="status_activity">สถานะกิจกรรม</th>
                                <th id="person_control">ผู้ควบคุม</th>
                                <th id="manage">จัดการกิจกรรม</th>
                            </tr>
                        </thead>
                        <tbody id="showdata">
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="DetailActivity">
                                        <span id="activity_name">กิจกรรม: ปลูกต้นไม้ช่วยลดโลกร้อน </span>
                                        <span id="date_activity">วันที่จัดกิจกรรม: 2019-02-01 </span>
                                        <span id="time_activity">เวลาเริ่ม 08.00 ถึง 09.00 ชั่วโมงกิกรรม 1 ชม.</span>
                                        <span id="place">อาคารวิชาการ 6</span>
                                    </div>
                                </td>
                                <td>xxx</td>
                                <!-- <span class="badge badge-success">ผ่านการเข้าร่วม</span> -->
                                <td id="person_control"> นายสุขใจ สมสุข</td>
                                <td><button name="btndel" id="btndel" type="button" class="btn btn-danger btn-rounded btn-fw cancleActivity" data="' + value.service_ID + '">ยกเลิกกิจกรรม</button></td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            //show_all();
            disabled_sort();

            function disabled_sort() {
                $('#style_table').DataTable({
                    columnDefs: [{
                        orderable: false,
                        targets: 1
                    }]
                });
            }
        });


        function show_all() {

            html = '';
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url("Volunteer_regis/showAll") ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);

                    $('#showdata').html(html);
                }
            });
        }

        $('#showdata').on('click', '.cancleActivity', function() {

            var serviceid = $(this).attr('data');
            if (confirm('ต้องการยกเลิกกิจกรรมลงทะเบียน')) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo site_url("Volunteer_history/cancelActivity") ?>',
                    async: false, //ห้ามลืม
                    dataType: 'json',
                    success: function(data) {
                        //stament
                    }
                });

            }

        });
    </script>

</body>