<link rel="stylesheet" href="<?php echo base_url('re/css/css_notify_user_student.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/step_progress.css') ?>">
<link href="https://fonts.googleapis.com/css?family=Taviraj&display=swap" rel="stylesheet">

<head>
    <title>แจ้งเหตุกระทำความผิด | ระบบวินัยนักศึกษามหาวิทยาลัยวลัยลักษณ์</title>
    <style></style>
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
                            <li class="active">Verify Phone</li>
                            <li>Upload Documents</li>
                            <li>Security Questions</li>
                        </ul>
                    </div>


                    <div class="Tag1">
                        ส่วนที่ 1: ข้อมูลการแจ้งเหตุ
                        <p>ส่วนข้อมูลแจ้งเหตุการกระทำความผิด กรุณากรอกรายละเอียดให้ครบถ้วน</p>
                    </div>
                    <div class="modal-body">
                        <div class="Content">
                            <div class="Content1">

                                <div class="row">
                                    <label for="Date_notify" style=""><span><i class="far fa-calendar-alt iconlabel"></i></span>วันที่แจ้งเหตุ:</label>
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
                                    <label for="place"><span><i class="far fa-building iconlabel"></i></span>คำอธิบายสถานที่:</label>
                                    <textarea class="" rows="5" id="explanation" name="explanation" required oninvalid="this.setCustomValidity('โปรดกรอกคำอธิบาย')" onchange="this.setCustomValidity('')"></textarea>
                                </div>


                                <div class="row">
                                    <label for="offcate"><span><i class=" iconlabel"></i></span>หมวดความผิด:</label>
                                    <select name="txt_oc" id="txt_oc" class="input select" required oninvalid="this.setCustomValidity('ระบุหมวดความผิด')" onchange="this.setCustomValidity('')">
                                        <option value="">เลือกหมวดความผิด</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <label for="off"><span><i class=" iconlabel"></i></span>ฐานความผิด:</label>
                                    <select name="txt_off" id="txt_off" class="input select">
                                        <option value="">เลือกฐานความผิด</option>
                                    </select>
                                </div>





                            </div>


                            <div class="Content2">
                                <div class="title2">
                                    <label for="off"><span><i class=" iconlabel"></i></span>ผู้กระทำความผิด:</label>
                                </div>

                                <div class="person">
                                    <div class="data">
                                        59123456 นายวชระ ศรีมานี หลักสูตร ไทยบูรณาการศึกษา สำนักวิชา A
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="Content3" style="display: none;">YYYY</div>

                    </div>

                    <div class="modal-footer">
                        <!-- <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button> -->
                        <button name="btnSave" id="btnNext" class="btn btn-success" style="width:10rem;">ถัดไป</button>
                        <button name="btnSave" id="btnSave" type="submit" class="btn btn-success" style="width:10rem;">บันทึก</button>
                    </div>

                </div>
                </form>
            </div>
        </div>



        <a href="#" class="float" data-toggle="tooltip" title="แจ้งเหตุการกระทำความผิด" id="notifyfloat">
            <i class="far fa-bell"></i>
        </a>


</body>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
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
</script>