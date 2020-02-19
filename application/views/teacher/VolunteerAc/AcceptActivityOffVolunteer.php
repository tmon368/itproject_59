<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_accept_activity_off_.css') ?>">

<head>
    <title> อนุมัติกิจกรรมบำเพ็ญประโยชน์ | ระบบวินัยนักศึกษามหาวิทยาลัยวลัยลักษณ์</title>
</head>
<script>
    var dataset = [];
    var dataservices = [];
</script>

<body>
    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('Teacher_dashboard') ?>" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">อนุมัติกิจกรรมบำเพ็ญประโยชน์</li>
                </ol>
            </nav>
        </div>


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;อนุมัติกิจกรรมการบำเพ็ญประโยชน์</h6>
                </div>

                <div class="card-body">
                    <table id="style_table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th id="idsort">ลำดับ</th>
                                <th id="detail_activity_regis">ข้อมูลกิจกรรม</th>
                                <th id="person_control">ผู้เสนอกิจกรรม</th>
                                <th id="manage">จัดการกิจกรรม</th>
                            </tr>
                        </thead>

                        <tbody id="showdata">
                            <!-- <tr>
                                <td>1</td>
                                <td>
                                    <div class="DetailActivity">
                                        <span id="activity_name">กิจกรรม: รณรงค์ขัยขี่ปลอดภัย</span>
                                        <span id="date_activity">วันที่จัดกิจกรรม : 12 ธันวาคม 2563</span>
                                        <span id="time_activity">เวลาเริ่ม 21.30 ถึง 22.00 ชั่วโมงกิกรรม 30 นาที</span>
                                        <span id="place">สถานที่: xxxx</span>
                                    </div>
                                </td>
                                <td id="person_control"> สินทัน ชูทอง </td>
                                <td id="btn_accept_td"> <span class="accept_activity">อนุมัติกิจกรรม</span> </td>
                            </tr>
                             -->
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="accept_activity_modal" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width:800px!important;" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h2 class="modal-title">อนุมัติกิจกรรมบำเพ็ญประโยชน์</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="DetailActivity_modal">
                        <div class="part1">
                            <span class="title">ข้อมูลกิจกรรม</span>
                            <div class="Data">
                                <span class="title">ชื่อกิจกรรม: ปลูกต้นไม้ลดโลกร้อน</span>
                                <span class="title">วันที่จัดกิจกรรม: 12 ธันวาคม 2563</span>
                                <span class="title">จำนวนรับสมัคร: 60 คน</span>
                                <span class="title">ผู้รับรองกิจกรรม: นายสุขใจ สมสุข หมายเลขโทรศัพท์ 085-4396778</span>
                                <span class="title">สถานที่จัดกิจกรรม:</span>
                                <div class="DivData">
                                    สถานีขนส่งกรุงเทพ (สายใต่ใหม่) ถนนบรมราชชนนี ... ที่อยู่ อาคารลานค้าชุมชน ถ.เลียบเนิน ต.วัดใหม่ อ.เมือง จ.จันทบุรี 22000
                                </div>
                                <span class="title">รายละเอียดกิจกรรม:</span>
                                <div class="DivData">
                                    ปลูกต้นไม้ลดโลกร้อน นำนักศึกษาบำเพ็ญประโยชน์ปลูกป่าชายเลน
                                </div>
                                <span class="title">ผู้เสนอกิจกรรม: นายเทียนพอ พอเพียง ตำแหน่ง นักศึกษา</span>
                                <div class="ChoiceAccept">
                                    <span class="title acceptperson">ตอบรับการเป็นผู้รับรองกิจกรรม</span>
                                    <div>
                                        <label class="radio-inline label"><input type="radio" name="acceptactivity" class="AcceptActivity" value="1" checked>รับรอง</label>
                                        <label class="radio-inline label"><input type="radio" name="acceptactivity" class="UnAcceptActivity" value="0">ไม่รับรอง</label>
                                    </div>
                                </div>
                                <div class="ResonNotAccept">
                                    <span class="title">หมายเหตุ: </span>
                                    <textarea class="form-control" name="reson_not_accept" id="reson_not_accept" cols="30" rows="10" placeholder="เหตุผลที่ไม่อนุมัติกิจกรรม"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="part2">
                            <img src="<?php echo base_url('re/images/help.png') ?>" alt="" srcset="" class="Imglogo">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button name="btnSave" id="btnSave" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                </div>
                </form>
            </div>
        </div>
    </div>




</body>
<script type="text/javascript">
    $(document).ready(function() {
        console.log('Ready Webpage');
        show_all();
    });

    function show_all() {

        html = '';
        i = 0;
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url("Teacher_dashboard/selectservice") ?>',
            dataType: 'json',
            async: false,
            success: function(data) {
                console.log(data);
                $.each(data, function(key, value) {

                    var spendtimes_temp = convert_time_ (value.start_time,value.end_time); 
                    var spendtimes = spendtimes_temp.substring(0, 5);

                    if ( spendtimes.substring(0,2) == "00"){
                        var string_times = 'นาที';
                    }
                    var string_times = 'ชั่วโมง';
                    var temp_1 = value.start_time;
                    var temp_2 = value.end_time;
                    var show_start_time = temp_1.substring(0, 5);
                    var show_end_times = temp_2.substring(0, 5);
 
                    i++;
                    html += '<tr>';
                    html += '<td>' + i + '</td>';
                    html += '<td>';
                    html += '<div class="DetailActivity">';
                    html += '<span id="activity_name">กิจกรรม: ' + value.service_name + '</span>';
                    html += '<span id="date_activity">วันที่จัดกิจกรรม : ' + value.service_date + '</span>';
                    html += '<span id="time_activity">เวลาเริ่ม '+ show_start_time +'ถึง '+ show_end_times+'ชั่วโมงกิกรรม '+ spendtimes +" "+ string_times +'</span>';
                    html += '<span id="place">สถานที่: ' + value.place + '</span>';
                    html += '</div>';
                    html += '</td>';
                    html += '<td id="person_control"> ' + value.std_fname + " " + value.std_lname + ' </td>';
                    html += '<td id="btn_accept_td"> <span class="accept_activity" data="' + value.service_ID + '">อนุมัติกิจกรรม</span> </td>';
                    html += '</tr>';

                    $('#showdata').html(html);
                });
            }
        });
    }

    function convert_time_(start_times,end_times){
        var spendtimes;
        data ={
            start_times:start_times,
            end_time:end_times
        }

        $.ajax({
            type: 'POST',
            url: '<?php echo site_url("Teacher_dashboard/convert_times") ?>',
            data:data,
            async: false,
            success: function(data) {
                spendtimes = data;
                console.log (spendtimes);
                
            },
            error: function(data) {
                alert(data);
            }
        });
        return spendtimes;
    }



    $('#showdata').on('click', '.accept_activity', function() {
        $('#accept_activity_modal').modal('show');
    });

    $('.UnAcceptActivity').click(function() {
        $('.ResonNotAccept').show();
    });

    $('.AcceptActivity').click(function() {
        $('.ResonNotAccept').hide();
    });
</script>