<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('re/css/css_add_activity.css') ?>">

<title>เสนอกิจกรรมบำเพ็ญประโยชน์ | ระบบวินัยนักศึกษามหาวิทยาลัยวลัยลักษณ์</title>

<head>

    <title>เสนอบำเพ็ญประโยชน์ | ระบบวินัยนักศึกษา</title>
    <style>
        .select2-container--open .select2-dropdown--below {
            width: 420px !important;
        }

        .selectplace {
            width: 50rem;
            margin-top: 0.5rem;
            padding-top: 0.8rem
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 2;
            font-size: 16px;
            font-family: 'Taviraj', serif;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #3e3d3d;
            border-radius: 4px;
            height: 2.5rem;
            padding: 0.3rem;
        }
    </style>
</head>

<body>
    <meta charset="UTF-8">
    <div class="container-fluid">
        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">การบำเพ็ญประโยชน์</a></li>
                    <li class="breadcrumb-item active" aria-current="page">เสนอกิจกรรมบำเพ็ญประโยชน์</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;เสนอกิจกรรมการบำเพ็ญประโยชน์</h6>
                </div>

                <div class="card-body" id="card_1">
                    <button type="button" id="btnAdd" class="btn btn-inverse-primary btn-fw" data-toggle="modal">
                        <span><i class="fas fa-plus" id="btnAdd"></i></span>เพิ่มการเสนอกิจกรรม

                    </button>
                    &nbsp;
                </div>

                <!--Modal add Activity-->
                <div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width:1000px!important;" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h2 class="modal-title">เสนอการบำเพ็ญประโยชน์</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">

                                <form action="" id="formadd" name="formadd" method="post">
                                    <div class="FormDataAddActivity">

                                        <div class="form-inline">
                                            <label for="Activitylabel" class="lable">ชื่อกิจกรรม:</label>
                                            <input type="text" name="service_name" id="service_name" class="form-control" placeholder="กรอกชื่อกิจกรรม" autocomplete="off">
                                            <label for="count_paticipant" class="lable">จำนวนที่รับสมัคร: </label>
                                            <input type="text" name="received" id="received" class="form-control" placeholder="จำนวนผู้เข้ามร่วมกิจกรรม" autocomplete="off">
                                        </div>

                                        <div class="form-inline" style="margin-top: 0.5rem;">
                                            <label for="dateactivity" class="lable">วันที่จัดกิจกรรม: </label>
                                            <input type="date" name="service_date" id="service_date" class="form-control">
                                            <label for="fromtime" class="lable">เวลา: </label>
                                            <input type="time" name="start_time" id="start_time" class="form-control">
                                            <label for="totime" class="lable">ถึง: </label>
                                            <input type="time" name="end_time" id="end_time" class="form-control">

                                        </div>

                                        <label for="place" class="lable">สถานที่จัดกิจกรรม: </label>
                                        <textarea class="form-control" name="place" id="place" cols="30" rows="10"></textarea>
                                        <label for="person_acceept" class="lable">ผู้รับรองกิจกรรม: </label>
                                        <!-- <input type="text" name="person_ID" id="add_persennel" class=" form-control" placeholder="ค้นหาผู้ควบคุมกิจกรรม" autocomplete="off"> -->
                                        <div class="margin-top:0.5rem;">
                                            <select class="selectplace input" name="person_ID" id="add_persennel"></select>
                                        </div>

                                        <label for="detailactivity" class="lable">รายละเอียดกิจกรรม: </label>
                                        <textarea class="form-control" name="explanation" id="explanation" cols="30" rows="10"></textarea>
                                    </div>


                            </div>

                            <div class="modal-footer">
                                <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                <button name="btnSave" id="btnSave" type="button" class="btn btn-success">บันทึกข้อมูล</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--Modal del  -->

                <div class="modal fade" id="del_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLongTitle"><span><i class="fa fa-exclamation-triangle" style="color:rgba(235,99,102,1.00)"></i></span>ลบข้อมูล</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!--ส่วนฟอร์มลบข้อมูล-->
                            <form action="" id="formdelete" method="post" class="needs-validation">
                                <div class="modal-body" id="showdel">

                                    <!--ข้อความยืนยันการลบข้อมูล-->
                                    <center>
                                        <div id="showddel"></div>
                                        <input type="hidden" name="delID">
                                    </center>
                                    <!------------------>
                                </div>

                                <div class="modal-footer">
                                    <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button name="btndel" id="btndel" type="submit" class="btn btn-danger btn-fw">ลบ</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal ส่วน edit -->
                <div class="modal fade" id="edit_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width:1000px!important;" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLongTitle">แก้ไขการเสนอการบำเพ็ญประโยชน์</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">

                                <form action="" id="formupdate" name="formadd" method="post">
                                    <div class="FormDataAddActivity">
                                        <input type="hidden" name="txteditID" id="txteditID" class="form-control style_input">
                                        <div class="form-inline">
                                            <label for="Activitylabel" class="lable">ชื่อกิจกรรม:</label>
                                            <input type="text" name="editservice_name" id="service_name" class="form-control" placeholder="กรอกชื่อกิจกรรม" autocomplete="off">
                                            <label for="count_paticipant" class="lable">จำนวนที่รับสมัคร: </label>
                                            <input type="number" name="editreceived" id="received" class="form-control" placeholder="จำนวนผู้เข้ามร่วมกิจกรรม" autocomplete="off">
                                        </div>

                                        <div class="form-inline" style="margin-top: 0.5rem;">
                                            <label for="dateactivity" class="lable">วันที่จัดกิจกรรม: </label>
                                            <input type="date" name="editservice_date" id="service_date" class="form-control">
                                            <label for="fromtime" class="lable">เวลา: </label>
                                            <input type="time" name="editstart_time" id="start_time" class="form-control">
                                            <label for="totime" class="lable">ถึง: </label>
                                            <input type="time" name="editend_time" id="end_time" class="form-control">

                                        </div>

                                        <label for="place" class="lable">สถานที่จัดกิจกรรม: </label>
                                        <textarea class="form-control" name="editplace" id="editplace" cols="30" rows="10"></textarea>
                                        <label for="person_acceept" class="lable">ผู้รับรองกิจกรรม: </label>
                                        <!-- <input type="text" name="person_ID" id="add_persennel" class=" form-control" placeholder="ค้นหาผู้ควบคุมกิจกรรม" autocomplete="off"> -->
                                        <div class="margin-top:0.5rem;">
                                            <input type="text" name="editperson_ID" id="service_name" class="form-control" placeholder="กรอกชื่อกิจกรรม" autocomplete="off" disabled>
                                        </div>

                                        <label for="detailactivity" class="lable">รายละเอียดกิจกรรม: </label>
                                        <textarea class="form-control" name="editexplanation" id="editexplanation" cols="30" rows="10"></textarea>
                                    </div>
                                </form>


                            </div>

                            <div class="modal-footer">
                                <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                <button name="btnedit" id="btnedit" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>





                <!-- Modal detail-->
                <div class="modal fade" id="ShowDta" role="dialog">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">รายละเอียดกิจกรรม</h4>
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

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="style_table" class="table table-hover">
                            <thead>
                                <tr>
                                    <th id="sort">ลำดับ</th>
                                    <th id="activity_name">ชื่อกิจกรรม</th>
                                    <th id="date">วันที่</th>
                                    <th id="detail_activity">รายละเอียด</th>
                                    <th id="status">สถานะการเสนอกิจกรรม</th>
                                    <th id="manage">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody id="showdata">

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>


    </div>
    <script>
        $(document).ready(function() {
            select_user_accept();
            show_all();
            $("#add_persennel").select2({
                placeholder: "ค้นหาผู้รับรองกิจกรรม",
                allowClear: true,
            });




        });


        function show_all() {

            html = '';
            i = 0;
            $.ajax({

                type: 'POST',
                url: '<?php echo site_url("VolunteerAC/showAll") ?>',
                dataType: 'json',
                async: false,
                success: function(data) {

                    $.each(data, function(key, value) {
                        //class show_data edit_data del_data
                        i++;
                        html += '<tr>';
                        html += '<td>' + i + '</td>';
                        html += '<td>' + value.service_name + '</td>';
                        html += '<td>' + value.service_date + '</td>';
                        // html += '<td>' + value.start_time + "-" + value.end_time + '</td>';
                        // html += '<td>' + value.person_fname + "  " + value.person_lname + '</td>';
                        html += '<td class="detailzoom"><span class="fileicon show_data" data="' + value.service_ID + '"><i class="fas fa-file-alt"></i></span></td>';

                        if (value.statusname == "รอผลการเสนอ") {
                            html += '<td class="StatusActivity"><span id="wait_offer">รอผลการเสนอ</span></td>';
                        } else if (value.statusname == "อนุมัติ") {
                            html += '<td class="StatusActivity"><span id="sucess">อนุมัติ</span></td>';
                        } else {

                        }
                        html += '<td><span class="editicon edit_data" data="' + value.service_ID + '"><i class="fas fa-edit"></i></span><span class="delicon del_data" data="' + value.service_ID + '"><i class="fas fa-trash-alt"></i></span></td>'
                        html += '</tr>'
                        $('#showdata').html(html);
                    });
                }
            });
        }

        function select_user_accept() {
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url("VolunteerAC/selectperson") ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var html = '';
                    html += '<option selected>เลือกผู้รับรอง</option>';
                    $.each(data, function(key, value) {
                        html += '<option value="' + value.person_ID + '">' + value.person_fname + " " + value.person_lname + '</option>';
                        $('#add_persennel').html(html);
                    });
                }
            });
        }

        $('#editadd_persennel').typeahead({

            source: function(query, result) {
                $.ajax({
                    url: "<?php echo site_url('VolunteerAC/selectperson') ?>",
                    method: "POST",
                    data: {
                        query: query
                    },
                    dataType: "json",
                    success: function(data) {

                        result($.map(data, function(item) {
                            $('#person_ID').val(item.person_ID);
                            return item.person_fname + ' ' + item.person_lname;
                        }));
                    }
                })
            }


        });

        //ลบข้อมูล
        $('#showdata').on('click', '.del_data', function() {
            var id = $(this).attr('data');
            //alert(id)
            $('#del_file').modal('show');

            $('#formdelete').attr('action', '<?php echo base_url() ?>index.php/VolunteerAc/deleteVolunteerAc');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>index.php/VolunteerAc/delete',
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    $('#showddel').html('ต้องการลบกิจกรรม   "' + data[0].service_name + '"');
                    $('input[name=delID]').val(data[0].service_ID);
                },
                error: function() {
                    alert('ไม่สามารถลบข้อมูล');
                }
            });
        });



        $('#btndel').click(function() {

            var url = $('#formdelete').attr('action');
            var data = $('#formdelete').serialize();
            var service_ID = $('input[name=delID]');
            var result = '';

            if (service_ID.val() == '') {
                service_ID.parent().parent().addClass('has-error');
            } else {
                service_ID.parent().parent().removeClass('has-error');
                result += '1';
            }
            if (result == '1') {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#del_file').modal('hide');
                            $('#formdelete')[0].reset();
                            $('.alert-danger').html('ลบข้อมูลเรียบร้อย').fadeIn().delay(2000).fadeOut('slow');
                            $('#formdelete').empty().fadeIn().delay(2000).fadeOut('slow');
                            location.reload('VolunteerAc');


                        } else {
                            alert('Error');
                        }
                    },

                    error: function() {

                        $('#del_file').modal('hide');
                        $('#formdelete')[0].reset();
                        $('.alert-danger').html('แก้ไขเรียบร้อย').fadeIn().delay(5000).fadeOut('slow');

                    }
                });
            }
        });


        //แก้ไขข้อมูล
        $('#showdata').on('click', '.edit_data', function() {
            var id = $(this).attr('data');

            $('#edit_file').modal('show');
            $('#formupdate').attr('action', '<?php echo base_url() ?>index.php/VolunteerAc/updateVolunteerAc');


            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>index.php/VolunteerAc/editVolunteerAc',
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    $('input[name=txteditID]').val(data.service_ID);
                    $('input[name=editservice_name]').val(data.service_name);
                    $('input[name=editperson_ID]').val(data.person_fname + ' ' + data.person_lname);
                    $('textarea[name=editplace]').val(data.place);
                    $('input[name=editservice_date]').val(data.service_date);
                    $('input[name=editstart_time]').val(data.start_time);
                    $('input[name=editend_time]').val(data.end_time);
                    $('input[name=editreceived]').val(data.received);
                    $('textarea[name=editexplanation]').val(data.explanation);
                },
                error: function() {
                    alert('ไม่สามารถแก้ไขข้อมูล');
                }
            });
        });

        $('#btnedit').click(function() {
            var url = $('#formupdate').attr('action');
            var data = $('#formupdate').serialize();
            console.log(data);

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json',
                success: function(response) {
                    location.reload('VolunteerAc');
                    console.log(response);
                    if (response.success) {
                        $('#edit_file').modal('hide');
                        $('#formupdate')[0].reset();
                        $('#formupdate').empty();
                        location.reload('VolunteerAc');
                        // show_all();
                        // alert ('อัพเดตข้อมูลเรียบร้อย');
                    } else {
                        alert('Error');
                    }
                },
                error: function() {
                    //alert('id นี้ถูกใช้งานแล้ว');
                    $('#edit_file').modal('hide');
                    $('#formupdate')[0].reset();
                    $('.alert-danger').html('แก้ไขเรียบร้อย').fadeIn().delay(2000).fadeOut('slow');
                    location.reload('VolunteerAc');
                }

            });
        });

        $('#showdata').on('click', '.show_data', function() {

            var id = $(this).attr('data');
            //   console.log(id);

            $('#ShowDta').modal('show');
            html = '';
            i = 0;

            //select show data
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo site_url('VolunteerAc/showdetail') ?>',
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    //alert ('Having data');

                    $.each(data, function(key, value) {
                        i++;
                        html += '<p class="text_head"> <label for="" class="label_txt">ชื่อกิจกรรม: </label> ' + value.service_name + ' </p>'
                        html += '<p class="text_position"> <label for="" class="label_txt"> ชื่อผู้ควบคุมกิจกรรม:</label> ' + value.person_fname + '&nbsp;&nbsp;' + value.person_lname + ' <label for="" class="label_txt">หมายเลขโทรศัพท์:</label> ' + value.phone1 + '</p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">สถานที่: </label> ' + value.place + ' </p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">วันที่กำหนด: </label> ' + value.service_date + ' </p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">เวลาจัดกิจกรรม:</label>  ' + value.start_time + "-" + value.end_time + ' </p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">จำนวนที่รับสมัคร: </label> ' + value.received + ' </p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">รายละเอียด: </label> ' + value.explanation + ' </p>';

                        $('.content').html(html);

                    });
                },
                error: function() {
                    alert('ไม่สามารถลบข้อมูล');
                }
            });



        });

        $('#btnAdd').click(function() {
            $('#formadd')[0].reset();
            $('#exampleModalCenter').modal('show');
        });


        $('#btnSave').click(function() {
            var form_data = $('#formadd').serialize();
            console.log(form_data);
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo site_url("VolunteerAC/addVolunteerAc") ?>',
                data: form_data,
                async: false,
                dataType: 'json',
                success: function(data) {

                    if (data == true) {
                        alert('ดำเนินการเสร็จสิ้นรอผลการอนุมัติกิจกรรม');
                        show_all();
                        $('#exampleModalCenter').modal('hide');
                    } else if (data == false) {
                        alert('ไม่สามารถทำรายการได้กรุณาตรวจสอบข้อมูล');
                    }
                    //location.reload();
                }
            });
        });
    </script>



</body>

</html>