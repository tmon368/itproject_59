<link rel="stylesheet" href="<?php echo base_url('re/css/css_notify_user_student.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/step_progress.css') ?>">
<link href="https://fonts.googleapis.com/css?family=Taviraj&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

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

<body>
    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url("Student_dashboard") ?>" class="breadcrumb-link">หน้าแรก</a></li>
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
                                        <th>ลำดับ</th>
                                        <th>วันที่แจ้งเหตุ</th>
                                        <th>ฐานความผิด</th>
                                        <th>สถานที่</th>
                                        <th>รายละเอียด</th>
                                        <th>จัดการ</th>
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
                            <li id="payment"><strong>Image</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                    </div>


                    <form id="msform">
                        <div class="modal-body">
                            <fieldset>
                                <div class="Tag1">
                                    ขั้นตอน 1: ข้อมูลการแจ้งเหตุ
                                    <p class="msg">ส่วนข้อมูลแจ้งเหตุการกระทำความผิด กรุณากรอกรายละเอียดให้ครบถ้วน</p>
                                </div>
                                <div class="form-card">

                                    <div class="Content">

                                        <div class="Content1">

                                            <div class="row">
                                                <label for="Date_notify"><span><i class="far fa-calendar-alt iconlabel"></i></span>วันที่แจ้งเหตุ:</label>
                                                <input type="text" name="notifica_show" id="notifica_show" class="input" disabled>
                                                <input type="hidden" name="notifica_date" id="notifica_date">
                                            </div>

                                            <div class="row">
                                                <label for="committed_date" style=""><span><i class="far fa-calendar-alt iconlabel"></i></span>วันที่กระทำความผิด: </label>
                                                <input type="date" name="committed_date" id="committed_date" class="input data" required oninvalid="this.setCustomValidity('โปรดระบุวันที่กระทำความผิด')" onchange="this.setCustomValidity('')">
                                                <label for="" id="labletime">เวลา:</label> <input type="time" name="committed_time" id="committed_time" class="input time" required oninvalid="this.setCustomValidity('โปรดระบุเวลาเกิดเหตุ')" onchange="this.setCustomValidity('')">
                                            </div>

                                            <div class="row">
                                                <label for="place"><span><i class="far fa-building iconlabel"></i></span>สถานที่:</label>
                                                <select class="selectplace input" name="place_ID" id="place_ID">
                                                </select>
                                            </div>


                                            <div class="row">
                                                <label for="place"><span><i class="fa fa-commenting-o iconlabel"></i></span>คำอธิบายสถานที่:</label>
                                                <textarea class="textarea" rows="5" id="explanation" name="explanation" required oninvalid="this.setCustomValidity('โปรดกรอกคำอธิบาย')" onchange="this.setCustomValidity('')"></textarea>
                                            </div>
                                        </div>

                                        <div class="Content2">

                                            <div class="row">
                                                <label for="offcate"><span><i class=" iconlabel"></i></span>หมวดความผิด:</label>
                                                <select name="txt_oc" id="txt_oc" class="select" required oninvalid="this.setCustomValidity('ระบุหมวดความผิด')" onchange="this.setCustomValidity('')">
                                                    <option value="">เลือกหมวดความผิด</option>
                                                </select>
                                            </div>

                                            <div class="row">
                                                <label for="off"><span><i class=" iconlabel"></i></span>ฐานความผิด:</label>
                                                <select name="txt_off" id="txt_off" class="select">
                                                    <option value="">เลือกฐานความผิด</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="ถัดไป" />
                            </fieldset>

                            <fieldset>
                                <div class="Tag1">
                                    ส่วนที่ 2: ผู้กระทำความผิด
                                    <p class="msg">ข้อมูลผู้กระทำความผิด</p>
                                </div>
                                <div class="form-card">
                                    <div class="Content">
                                        <div class="Content1">

                                            <div class="searchtool">
                                                <select class="selectsearch" name="" id="">
                                                    <option selected>ระบุสิ่งที่ต้องการค้นหา</option>
                                                    <option value="1">รหัสนักศึกษา</option>
                                                    <option value="2">ป้ายทะเบียนรถจักรยานยนต์</option>
                                                    <option value="3">ป้ายทะเบียนรถยนต์</option>
                                                </select>
                                                <input type="text" name="" id="">
                                                <div class="btnsearch"><span><i class="fa fa-search"></i></span></div>
                                            </div>
                                        </div>


                                        <div class="Content2">
                                            <div class="title2">
                                                <label for="off"><span><i class=" iconlabel"></i></span>ผู้กระทำความผิด:</label>
                                            </div>

                                            <div class="GroupPersonTool">
                                                <div class="person">

                                                </div>
                                                <div class="add_remove_person">
                                                    <button type="button" class="button1 addperson">+</button>
                                                    <button type="button" class="button1">-</button>
                                                </div>
                                            </div>


                                        </div>

                                    </div>



                                </div>
                                <input type="button" name="next" class="next action-button" value="ถัดไป" />
                                <input type="button" name="previous" class="previous action-button-previous" value="กลับ" />
                            </fieldset>


                        </div>
                    </form>

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
        loaddata_offentype();
        selectplace();

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);
        $("#place_ID").select2({
            placeholder: "เลือกสถานที่",
            allowClear: true,
        });


        $(".next").click(function() {

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

    function selectplace() {
        $.ajax({

            type: 'POST',
            url: '<?php echo site_url("Notifyoffense/selectplaceall") ?>',
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
            url: '<?php echo site_url("Notifyoffense/selectoffensecate") ?>',
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

    function search_student_id (){






        
    }

    $('#txt_oc').on('change', function() {

        var html_code = '';
        var ocID = $(this).val();

        if (ocID) {
            $.ajax({
                type: 'GET',
                url: '<?php echo site_url("Notifyoffense/selectOffenseoffevidence") ?>',
                data: 'oc_ID=' + ocID,
                dataType: 'json',
                success: function(data) {

                    //alert(data[1].off_ID);

                    for (i = 0; i < data.length; i++) {

                        html_code += '<option value="' + data[i].off_ID + '">' + data[i].off_desc + '</option>';

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