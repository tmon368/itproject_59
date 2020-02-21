<link rel="stylesheet" href="<?php echo base_url('re/css/css_notify_user_student.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/step_progress.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/inputfile.css') ?>">



<head>
    <title>แจ้งเหตุกระทำความผิด | ระบบวินัยนักศึกษามหาวิทยาลัยวลัยลักษณ์</title>
    <style>
        .select2-container--open .select2-dropdown--below {
            width: 420px !important;
        }

        .selectplace {
            width: 20rem;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 2;
            font-size: 14px;
            font-family: 'Taviraj', serif;
        }
    </style>
</head>
<script>
    var studentid = [];
    var removestudenid = [];
    var filesToUpload = [];
    var countFilepicture = 0;
    var fileIdCounter = 0;
</script>


<body>
    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url("Notifyoffense_affairs") ?>" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">แจ้งเหตุการกระทำความผิด</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;รายการแจ้งเหตุการกระทำความผิด</h6>
                </div>


                <div class="card-body">
                    <div class="bootstrap-data-table-panel">
                        <div class="table-responsive">
                            <table id="style_table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th id="id_column">ลำดับ</th>
                                        <th id="date_commited">วันที่แจ้งเหตุ</th>
                                        <th id="">ฐานความผิด</th>
                                        <th id="">สถานที่</th>
                                        <th id="">รายละเอียด</th>
                                        <th id="">จัดการ</th>
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



        <div class="modal fade" id="form_notify" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width:1200px!important;" role="document">
                <div class="modal-content">


                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLongTitle"></h2>
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>ข้อมูลการแจ้งเหตุ</strong></li>
                            <li id="personal"><strong>ผู้กระทำความผิด</strong></li>
                            <li id="payment"><strong>หลักฐาน</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                    </div>


                    <form action="#" id="msform" name="msform" method="post" enctype="multipart/form-data" novalidate>
                        <input type="hidden" name="oh_ID" id="oh_ID" class="form-control style_input">
                        <div class="modal-body">
                            <fieldset>
                                <div class="Tag1">
                                    ข้อมูลการแจ้งเหตุ
                                    <p class="">ส่วนข้อมูลแจ้งเหตุการกระทำความผิด กรุณากรอกรายละเอียดให้ครบถ้วน</p>
                                </div>
                                <div class="form-card">

                                    <div class="Content">

                                        <div class="Content1">

                                            <div class="row">
                                                <label for="Date_notify" class="lablel"><span><i class="far fa-calendar-alt iconlabel"></i></span>วันที่แจ้งเหตุ:</label>
                                                <input type="text" name="notifica_show" id="notifica_show" class="input" disabled>
                                                <input type="hidden" name="notifica_date" id="notifica_date">
                                            </div>

                                            <div class="row">
                                                <label for="committed_date" class="lablel"><span><i class="far fa-calendar-alt iconlabel"></i></span>วันที่กระทำความผิด:
                                                </label>
                                                <input type="date" name="committed_date" id="committed_date" class="input data">
                                                <!-- <span id="error_message_committed_date"></span> -->
                                                <label for="" id="labletime" class="lablel">เวลา:</label> <input type="time" name="committed_time" id="committed_time" class="input time">
                                            </div>

                                            <div class="row">
                                                <label for="place" class="lablel"><span><i class="far fa-building iconlabel"></i></span>สถานที่:</label>
                                                <select class="selectplace input" name="place_ID" id="place_ID">
                                                </select>
                                                <!-- <span id="error_message_place"></span> -->
                                            </div>


                                            <div class="row">
                                                <label for="place" class="lablel"><span><i class="fa fa-commenting-o iconlabel"></i></span>คำอธิบายสถานที่:</label>
                                                <textarea class="textarea" rows="5" id="explanation" name="explanation"></textarea>
                                                <span id="error_message_exp_place"></span>
                                                <div id="snackbar">Some text some message..</div>
                                            </div>
                                        </div>

                                        <div class="Content2">

                                            <div class="row">
                                                <label for="offcate" class="lablel"><span><i class=" iconlabel"></i></span>หมวดความผิด:</label>
                                                <select name="txt_oc" id="txt_oc" class="select">
                                                    <option value="">เลือกหมวดความผิด</option>
                                                </select>
                                                <!-- <span id="error_message_offcat"></span> -->
                                            </div>

                                            <div class="row">
                                                <label for="off" class="lablel"><span><i class=" iconlabel"></i></span>ฐานความผิด:</label>
                                                <select name="txt_off" id="txt_off" class="select">
                                                    <option value="">เลือกฐานความผิด</option>
                                                </select>
                                                <!-- <span id="error_message_off"></span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="button" id="buttonnext1" name="next" class="next1 action-button" value="ถัดไป" />
                            </fieldset>

                            <fieldset>
                                <div class="Tag1">
                                    ผู้กระทำความผิด
                                    <p class="">ข้อมูลผู้กระทำความผิด</p>
                                </div>
                                <div class="form-card">
                                    <div class="Content">
                                        <div class="Content1">

                                            <div class="searchtool">
                                                <select class="selectsearch" name="" id="optionsearch">
                                                    <option value="1" selected>รหัสนักศึกษา</option>
                                                    <option value="2">ป้ายทะเบียนรถ</option>
                                                </select>
                                                <input type="text" name="" id="textboxsearch">
                                                <div class="btnsearch"><span><i class="fa fa-search"></i></span></div>
                                            </div>

                                            <div class="result">
                                                <span is="alert_message"></span>

                                            </div>




                                        </div>


                                        <div class="Content2">
                                            <div class="title2">
                                                <label for="off" class="lablel"><span><i class=" iconlabel"></i></span>ผู้กระทำความผิด:</label>
                                            </div>

                                            <div class="GroupPersonTool">
                                                <div class="person">

                                                </div>
                                                <div class="add_remove_person">
                                                    <button type="button" class="button1 addperson">+</button>
                                                    <button type="button" class="button1 remove">-</button>
                                                </div>
                                            </div>


                                        </div>

                                    </div>



                                </div>

                                <input type="button" name="next" class="next2 action-button" value="ถัดไป" />
                                <input type="button" name="previous" class="previous action-button-previous" value="กลับ" />
                            </fieldset>

                            <fieldset>
                                <div class="Tag1">
                                    หลักฐานการกระทำความผิด
                                    <p class="">แนบไฟล์หลักฐาน รองรับไฟล์ JPG,PNG</p>
                                </div>
                                <div class="form-card">
                                    <div class="Content">

                                        <div class="Content1 filecontent">
                                            <div style="padding-top: 3rem;padding-bottom: 1.5rem;">
                                                <img src="<?php echo base_url('re/images/outbox.png') ?>" width="90">
                                            </div>
                                            <div class="message_file">
                                                โปรดเลือกไฟล์
                                            </div>
                                            <div>
                                                <div class="upload-btn-wrapper">
                                                    <button class="btn">Browse</button>
                                                    <!-- <input type="file" class="file_input" id="uploadImage" name="termek_file" multiple /> -->
                                                    <input type="file" class="file_input" id="myFile" name="myFile[]" multiple />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="PictureContent">

                                        </div>

                                    </div>
                                </div>
                                <input type="button" name="next" class="next3 action-button" value="บันทึกข้อมูล" />
                                <!-- <input type="submit" name="bt_upload" class="next3 action-button" id="bt_upload" value="บันทึก" /> -->
                                <input type="button" name="previous" class="previous action-button-previous" value="กลับ" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                        </div>
                                        <div class="col-5">

                                        </div>
                                    </div> <br><br>
                                    <h2 class="purple-text text-center alert_meassage"><strong>บันทึกการแจ้งเหตุเรียบร้อย !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">ดำเนินการแจ้งเหตุเสร็จสิ้น กด <a href="javascript:;" id='home_notify'><strong>"หน้าแรก"</strong></a> เพื่อดูรายการแจ้งเหตุ</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>



                        </div>


                </div>
                </form>
            </div>
        </div>



        <a href="#" class="float" data-toggle="tooltip" title="แจ้งเหตุการกระทำความผิด" id="notifyfloat">
            <i class="far fa-bell"></i>
        </a>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        show_all();
        loaddata_offentype();
        selectplace();
        IMG_preview();
        check_id();
        set_placeholder();


        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);
        $("#place_ID").select2({
            placeholder: "เลือกสถานที่",
            allowClear: true,
        });


        $(".next1").click(function() {
            var textarea = $("#explanation").val();
            var selectplace = $("#place_ID").val();
            var offencecate = $("#txt_oc").val();
            var offence = $("#txt_off").val();

            var committed_date = $("#committed_date").val();
            var committed_time = $("#committed_time").val();


            if ((textarea == '') || (selectplace == 'เลือกสถานที่') || (offencecate == '') || (offence == '') || (committed_date == '') || (committed_time == '')) {

                if (textarea == '') {
                    $("#explanation").focus().css("border", "#E74C3C solid 1px");
                    // $("#error_message_exp_place").show();
                    // $("#error_message_exp_place").text('**กรอกคำอธิบายสถานที่')

                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    x.innerHTML = "กรอกคำอธิบายสถานที่";

                    setTimeout(function() {
                        x.className = x.className.replace("show", "");
                    }, 3000);
                    return false;
                } else {
                    $("#explanation").focusout().css("border", "#CACFD2 solid 1px");;
                    // $("#error_message_exp_place").hide();

                }

                if (selectplace == 'เลือกสถานที่') {
                    // $("#error_message_place").show();
                    // $("#error_message_place").text('**ระบุสถานที่เกิดเหตุ');
                    $(".select2-selection").focus().css("border", "#E74C3C solid 1px");
                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    x.innerHTML = "ระบุสถานที่เกิดเหตุ";

                    setTimeout(function() {
                        x.className = x.className.replace("show", "");
                    }, 3000);
                    return false;
                } else {
                    $(".select2-selection").focusout().css("border", "#CACFD2 solid 1px");
                    // $("#error_message_place").hide();
                }


                if (offencecate == '') {
                    // $("#error_message_offcat").show();
                    // $("#error_message_offcat").text('**ระบุหมวดความผิด');
                    $("#txt_oc").focus().css("border", "#E74C3C solid 1px");
                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    x.innerHTML = "ระบุหมวดความผิด";

                    setTimeout(function() {
                        x.className = x.className.replace("show", "");
                    }, 3000);
                    return false;
                } else {
                    // $("#error_message_offcat").hide();
                    $("#txt_oc").focus().css("border", "#CACFD2 solid 1px");
                }

                if (offence == '') {
                    // $("#error_message_off").show();
                    // $("#error_message_off").text('**ระบุฐานความผิด');
                    $("#txt_off").focus().css("border", "#E74C3C solid 1px");
                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    x.innerHTML = "ระบุฐานความผิด";

                    setTimeout(function() {
                        x.className = x.className.replace("show", "");
                    }, 3000);
                    return false;
                } else {
                    // $("#error_message_off").hide();
                    $("#txt_off").focus().css("border", "#CACFD2 solid 1px");
                }

                if (committed_date == '') {
                    $("#committed_date").focus().css("border", "#E74C3C solid 1px");
                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    x.innerHTML = "ระบุวันที่กระทำความผิด";

                    setTimeout(function() {
                        x.className = x.className.replace("show", "");
                    }, 3000);
                    return false;
                } else {
                    $("#committed_date").css("border", "#f2f2f2 solid 1px");
                }

                if (committed_time == '') {
                    $("#committed_time").focus().css("border", "#E74C3C solid 1px");
                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    x.innerHTML = "ระบุเวลากระทำความผิด";

                    setTimeout(function() {
                        x.className = x.className.replace("show", "");
                    }, 3000);
                    return false;
                } else {
                    $("#committed_time").css("border", "#f2f2f2 solid 1px");
                }



            } else {
                $("#explanation").focusout().css("border", "#CACFD2 solid 1px");
                $("#committed_time").focusout().css("border", "#CACFD2 solid 1px");
                $("#committed_date").focusout().css("border", "#CACFD2 solid 1px");
                $("#offencecate").focusout().css("border", "#CACFD2 solid 1px");
                $("#offence").focusout().css("border", "#CACFD2 solid 1px");
                $("#txt_oc").focus().css("border", "#CACFD2 solid 1px");
                $("#txt_off").focus().css("border", "#CACFD2 solid 1px");
                // $("#error_message_exp_place").hide();
                // $("#error_message_place").hide();
                // $("#error_message_offcat").hide();
                // $("#error_message_off").hide();

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            }



        });

        $('.next2').click(function() {

            if (studentid.length == 0) {
                alert('เพิ่มรายชื่อผู้กระทำความผิดขั้นต่ำ 1 คน');
            }

            if (studentid.length > 0) {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);




            } else {
                return false;
            }

        });

        $('.next3').click(function() {

            var formData = new FormData(document.getElementById("msform"));
            console.log(formData);

            $.ajax({
                url: '<?php echo base_url(); ?>index.php/Notifyoffense_affairs/addnotify',
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                type: "POST",
                success: function(data) {
                    console.log(data);

                    if (data == 'null') {

                    }
                }
            });

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            // //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            // //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });


        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function next_page() {

        }

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }

        $(".submit").click(function() {
            return false;
        })

    });

    $("#home_notify").click(function() {
        location.reload();
    })




    function selectplace() {
        $.ajax({

            type: 'POST',
            url: '<?php echo site_url("Notifyoffense_affairs/selectplaceall") ?>',
            async: false, //ห้ามลืม
            dataType: 'json',
            success: function(data) {
                console.log(data);
                // //alert("Having Data...");
                var html = '';

                html += '<option selected>เลือกสถานที่</option>';
                $.each(data, function(key, value) {
                    html += '<option value="' + value.place_ID + '">' + value.place_name + '</option>';
                    $('#place_ID').html(html);
                });
            }
        });
    }

    function loaddata_offentype() {

        var html_code = '';
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url("Notifyoffense_affairs/selectoffensecate") ?>',
            async: false, //ห้ามลืม
            dataType: 'json',
            success: function(data) {

                console.log(data);
                html_code += '<option value=""> เลือกหมวดความผิด </option>';

                $.each(data, function(key, value) {
                    html_code += '<option value="' + value.oc_ID + '">' + value.oc_desc + '</option>';
                    $('#txt_oc').html(html_code);
                });
            }

        });

    }

    function show_all() {
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url("Notifyoffense_affairs/showAll") ?>',
            async: false, //ห้ามลืม
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i = 0;

                $.each(data, function(key, value) {


                    i++;
                    html += '<tr>';
                    html += '<td>' + i + '</td>';
                    html += '<td>' + value.notifica_date + '</td>';
                    html += '<td>' + value.off_desc + '</td>';
                    html += '<td>' + value.place_name + '</td>';
                    html += '<td>' + value.explanation + '</td>';
                    html += '<td> <a href="javascript:;" data=' + value.oh_ID + ' class="show_data"><i class="fa fa-file-text" style="color:rgba(67, 135, 254);font-size:1.5rem;"></i></a></td>';
                    html += '</tr>';

                    $('#showdata').html(html);

                });

            }
        });
    }

    function search_numbertag_motorcycle(data) {

        var html_code = '';
        var data = {
            registnumber: data
        }


        $.ajax({
            type: 'POST',
            url: '<?php echo site_url("Notifyoffense_affairs/selectregist_num") ?>',
            data: data,
            dataType: 'json',
            success: function(data) {

                console.log(data);

                $.each(data, function(key, value) {

                    var temp = value;

                    if (key == 0) {

                        html_code += '<div class="person_resule">';
                        html_code += '<div class="img" data=' + value.S_ID + '><span id="addicn"><i class="fa fa-plus-circle"></i></span></div>';
                        html_code += ' <div class="dataperson">';
                        html_code += '<div class="">';
                        html_code += '<span id="name">' + value.std_fname + ' ' + value.std_lname + '</span>';
                        html_code += '</div>';
                        html_code += '<div>';
                        html_code += '<span id="major">สาขา ' + value.dept_name + '</span>';
                        html_code += '<span id="school">สำนักวิชา' + value.cur_name + '</span>';
                        html_code += '</div>';


                        if (value.vetype_ID == 1) {
                            html_code += '<div>';
                            html_code += '<span id="tag_num_bic">หมายเลยทะเบียนรถจักรายานยนต์: ' + value.regist_num + ' จังหวัด' + value.province + '</span>';
                            html_code += '</div>';
                        }
                        if (value.vetype_ID == 2) {
                            html_code += '<div>';
                            html_code += '<span id="tag_num_car">หมายเลยทะเบียนรถยนต์: ' + value.regist_num + ' จังหวัด' + value.province + '</span>';
                            html_code += '</div>';
                        }

                        $('.result').html(html_code);
                    }
                });
            }
        });




    }


    function search_student_id(dataid) {
        var html_code = '';
        var data = {
            S_ID: dataid
        }
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url("Notifyoffense_affairs/selectstudent") ?>',
            data: data,
            dataType: 'json',
            success: function(data) {

                console.log(data);

                $.each(data, function(key, value) {

                    var temp = value;

                    if (key == 0) {

                        html_code += '<div class="person_resule">';
                        html_code += '<div class="img" data=' + value.S_ID +
                            '><span id="addicn"><i class="fa fa-plus-circle"></i></span></div>';
                        html_code += ' <div class="dataperson">';
                        html_code += '<div class="">';
                        html_code += '<span id="name">' + value.std_fname + ' ' + value.std_lname +
                            '</span>';
                        html_code += '</div>';
                        html_code += '<div>';
                        html_code += '<span id="major">สาขา ' + value.dept_name + '</span>';
                        html_code += '<span id="school">สำนักวิชา' + value.cur_name + '</span>';
                        html_code += '</div>';

                    } else if (key == "verhicles") {
                        var verhicle = value;
                        $.each(verhicle, function(key, value) {
                            //check type vehicle
                            if (value.vetype_ID == 1) {
                                html_code += '<div>';
                                html_code += '<span id="tag_num_bic">หมายเลยทะเบียนรถจักรายานยนต์: ' + value.regist_num + ' จังหวัด' + value.province + '</span>';
                                html_code += '</div>';
                                // value.province
                            } else if (value.vetype_ID == 2) {
                                html_code += '<div>';
                                html_code +=
                                    '<span id="tag_num_car">หมายเลยทะเบียนรถจักรายานยนต์: ' + value.regist_num + ' จังหวัด' + value.province + '</span>';
                                html_code += '</div>';
                            } else {

                            }
                        });

                    }
                });



                $('.result').html(html_code);
            }

        });
    }

    function add_person(id) {

        var data = {
            S_ID: id
        };

        $.ajax({
            type: 'post',
            url: '<?php echo site_url("Notifyoffense_affairs/selectstudent") ?>',
            data: data,
            dataType: 'json',
            success: function(data) {
                console.log(data)
                html = '';
                $.each(data, function(key, value) {
                    var temp = value;
                    if (key == 0) {
                        html += '<div class="" id="div' + value.S_ID +
                            '"><input type="checkbox" class="checkid" data=' + value.S_ID + '><span id="stdid"><i class="fa fa-address-card-o"></i> <span id="number_id_student">' + value.S_ID + '</span> ' + value.std_fname + ' ' + value.std_lname +
                            ' สาขา ' + value.cur_name + ' สำนักวิชา ' + value.dept_name + '</span>';
                        html += '<input type="hidden" name="std_id[]" value="' + value.S_ID + '">';
                        html += '</div>';
                        $('.person').append(html);
                    }

                });
            },
            error: function(data) {
                alert();
            }
        });

    }

    function set_placeholder() {
        var option_id = $('#optionsearch').val();
        if (option_id == "1") {
            var text = "กรอกรหัสนักศึกษา";
            $("#textboxsearch").attr("placeholder", text);
        }
    }

    function IMG_preview() {
        if (window.File && window.FileList && window.FileReader) {
            var filesInput = document.getElementById("myFile");
            filesInput.addEventListener("change", function(event) {
                var files = event.target.files;
                var output = document.getElementById("result");
                for (var i = 0; i < files.length; i++) {
                    fileIdCounter++;
                    var file = files[i];
                    var fileName = files[0].name;

                    var fileId = fileIdCounter;
                    filesToUpload.push({
                        id: fileIdCounter,
                        file: file
                    });


                    console.log(filesToUpload);



                    if (!file.type.match('image'))
                        continue;
                    var picReader = new FileReader();
                    picReader.addEventListener("load", function(event) {
                        var picFile = event.target;
                        var htmlcode = '';
                        htmlcode += '<div class="showpicture countdiv' + fileIdCounter + '">';
                        htmlcode += '<div class="Imgfile">';
                        htmlcode += "<img class='thumbnail' alt='Profile image' src='" + picFile.result +
                            "'" + "title='" + picFile.name + "'/>";
                        htmlcode += '</div>';
                        htmlcode += '<div class="filename">';
                        htmlcode += '<div>' + fileName + '</div>';
                        htmlcode += '<div class="Sizefile">ขนาดไฟล์ภาพ</div>';
                        htmlcode += '</div>';
                        htmlcode += '<span id="delete_picture" data=' + fileIdCounter +
                            '><i class="fa fa-times-circle"></i></span>';
                        htmlcode += '</div>';
                        $('.PictureContent').append(htmlcode);

                    });
                    picReader.readAsDataURL(file);
                }

            });
        }
    }

    //check id and create auto id
    function check_id() {

        title = 'L';
        var date = new Date();
        date_t = date.getFullYear();
        B_E = date_t + 543; //แปลง ค.ศ. => พ.ศ.
        convert_be = B_E.toString(); //convert to string
        BE = convert_be.substring(2);

        var str = '';
        var tempid_substr = '';
        var auto_id = 0;
        var integer = '';

        $.ajax({

            type: 'POST',
            url: '<?php echo site_url("Notifyoffense_affairs/check_id") ?>',
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                str = data[0].oh_ID;
                tempid_substr = str.substring(3);
                integer = parseInt(tempid_substr); //convert string to int
                auto_id = integer + 1;

                $('#oh_ID').val(title + BE + auto_id); // Create auto id
                //alert(sum);
                //alert (integer);
                //sum= tempid_substr+1;
            },
            error: function() {
                alert("Can't create auto id");
            }


        });

    }


    $('.person').on('click', '.checkid', function() {

        var id = $(this).attr('data');

        //console.log(removestudenid.length)


        if (removestudenid.length == 0) {
            removestudenid.push(id);
            // console.log(removestudenid.length);
        } else {
            for (var i = 0; i < removestudenid.length; i++) {
                var check = 0;
                if (id == removestudenid[i]) {
                    check == 1;
                    removestudenid.splice([i], 1);
                    return;
                }
            }

            if (check == 0) {
                removestudenid.push(id);
            }

        }

    });

    $('.remove').click(function() {

        for (var i = 0; i < removestudenid.length; i++) {

            for (i = 0; i < studentid.length; i++) {
                console.log(studentid[i])
                if (removestudenid[i] == studentid[i]) {
                    studentid.splice([i], 1);
                    $('#div' + removestudenid[i]).remove();
                    removestudenid.splice([i], 1);
                    console.log(removestudenid[i] + '=' + studentid[i]);
                }
            }

        }


    });

    $('.PictureContent').on('click', '#delete_picture', function() {
        var id = $(this).attr('data');
        console.log(id);

        for (var i = 0; i < filesToUpload.length; ++i) {

            if (filesToUpload[i].id == id) {
                console.log(444)
                $('.countdiv' + id).remove();
                filesToUpload.splice(i, 1);
            }
        }
        console.log(filesToUpload);
    });



    $('.result').on('click', '.img', function() {
        console.log(studentid);

        var id = $(this).attr('data');

        if (studentid.length == 0) {
            studentid.push(id);
            add_person(id);
            console.log(studentid);
        } else {
            for (var i = 0; i < studentid.length; i++) {
                var check = 0;
                if (id == studentid[i]) {
                    check == 1;
                    alert('รายชื่อดังกล่าวถูกเพิ่มไปแล้วในขณะนี้');
                    return;
                }

            }
            if (check == 0) {
                studentid.push(id);
                add_person(id);
            }


        }




    });

    $('.btnsearch').on('click', function() {

        var option_id = $('#optionsearch').val();
        var text_value = $('#textboxsearch').val();

        if (option_id == "1") {
            search_student_id(text_value);
        }
        if (option_id == "2") {
            search_numbertag_motorcycle(text_value)
        }

    });

    $('#optionsearch').on('change', function() {

        var option_id = $(this).val();

        if (option_id == "1") {
            var text = "กรอกรหัสนักศึกษา";
            $("#textboxsearch").attr("placeholder", text);
        } else if (option_id == "2") {
            var text = "กรอกหมายเลขรถจักรยานยนต์";
            $("#textboxsearch").val('');
            $("#textboxsearch").attr("placeholder", text);
        } else if (option_id == "3") {
            var text = "กรอกหมายเลขรถยนต์";
            $("#textboxsearch").val('');
            $("#textboxsearch").attr("placeholder", text);
        } else {

        }

    });



    $('#txt_oc').on('change', function() {

        var html_code = '';
        var ocID = $(this).val();

        if (ocID) {
            $.ajax({
                type: 'GET',
                url: '<?php echo site_url("Notifyoffense_affairs/selectOffenseoffevidence") ?>',
                data: 'oc_ID=' + ocID,
                dataType: 'json',
                success: function(data) {

                    //alert(data[1].off_ID);

                    for (i = 0; i < data.length; i++) {

                        html_code += '<option value="' + data[i].off_ID + '">' + data[i].off_desc +
                            '</option>';

                    }
                    $('#txt_off').html(html_code);

                }
            });
        }
    });

    $('#notifyfloat').click(function() {
        $('#form_notify').modal('show');
        var date = new Date();
        var date_off = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
        $('#notifica_show').val(date_off); //set of date in input:disable
        $('#notifica_date').val(date_off);

    });

    $('#btnSave').click(function() {
        console.log(5555);
        $('.Content').hide();
        $('.Content3').show();
    });

    $('.addperson').click(function() {
        $('#addperson').modal('show');

    });
</script>