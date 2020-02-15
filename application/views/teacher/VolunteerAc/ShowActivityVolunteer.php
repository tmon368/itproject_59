<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_show_activity_.css') ?>">


<head>
    <title> กิจกรรมบำเพ็ญประโยชน์ทั้งหมด | ระบบวินัยนักศึกษา</title>
</head>

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
                            <tr>
                                <td id="sort_number">1</td>
                                <td id="detail_activity">
                                    <div class="DetailActivity">
                                        <span id="activity_name">กิจกรรม: ปลูกต้นไม้รักษํโลก จังหวัดเพชรบูรณ์</span>
                                        <span id="date_activity">วันที่จัดกิจกรรม 12 ธันวาคม 2563</span>
                                        <span id="time_activity">เวลาเริ่ม 13:00 ถึง 14:00 ชั่วโมงกิกรรม 1 ชม.</span>
                                        <span id="place">เทศบาลตำบลสถาน ต.สถาน อ.เชียงของ จ.เขียงราย โทร. 053-791607</span>
                                    </div>
                                </td>
                                <td id="person_control">สมฤดี เย็นใจ</td>
                                <td id="file"><span id="open_name_participants"><i class="fa fa-folder-open"></i></span></td>
                            </tr>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="HeaderData">
                        <span id="activity_name">กิจกรรม: ปลูกต้นไม้รักษํโลก จังหวัดเพชรบูรณ์</span>
                        <span id="date_activity">วันที่จัดกิจกรรม 12 ธันวาคม 2563</span>
                        <span id="time_activity">เวลาเริ่ม 13:00 ถึง 14:00 ชั่วโมงกิกรรม 1 ชม.</span>
                        <span id="place">เทศบาลตำบลสถาน ต.สถาน อ.เชียงของ จ.เขียงราย โทร. 053-791607</span>
                    </div>
                    <div class="ShowDataParticipants">
                        
                    </div>


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
                        targets: [1, 2]
                    }]
                });
            }
        });


        function show_all() {

            html = '';
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url("#/#") ?>',
                async: false,
                dataType: 'json',
                success: function(data) {

                }
            });
        }

        $('#file').click(function() {
            console.log('5555');
            $('#show_participants').modal('show');
        });
    </script>

</body>