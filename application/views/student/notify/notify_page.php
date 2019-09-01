<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>





<head>

    <title>แจ้งเหตุกระทำความผิด | ระบบวินัยนักศึกษา</title>
    <style>
        label {
            padding: 0.4rem;
        }

        .style_input {
            font-size: 0.8rem;
        }

        #oh_ID {
            width: 50%;
        }

        .padding_b {
            padding-bottom: 0.9rem;
        }

        #add_place {
            width: 100%;
        }
    </style>

    <script>
        var off_per = 1;

        function student_change(id) {
            $(".loader").show();
            $('#std_2').typeahead({

                source: ["นายศุภกฤต", "C++"]
                //onkeypress="student_change(this)"
            });

        }

        function click_btnre(id) {
            //alert(id.value);
            $('#student' + id).html('');

        }


        //clear value on text
        function clear_value() {
            $('#std_name').val("");
            $('#std_lname').val("");
            $('#dept_name').val("");
            $('#cur_name').val("");
            $('#regis_num').val("");
            $('#province_bic').val("");
            $('#regis_car').val("");
            $('#provin_car').val("");
        }

        //Search student data in form
        function Search_data(id) {

            var idstd = id.value;
            alert("กำลังค้นหา");
            clear_value(); //clear value on textbox
            //alert(idstd);


            if (idstd) {
                //alert ("GGG");

                $.ajax({
                    type: 'POST',
                    url: '<?php echo site_url("Notifyoffense/selectstudent") ?>',
                    data: 'S_ID=' + idstd,
                    dataType: 'json',
                    success: function(data) {
                        //alert("Having Data...");

                        $.each(data, function(key, value) {

                            var temp = value;

                            if (key == 0) {
                                //alert("Array student");
                                $('#std_name').val(value.std_fname);
                                $('#std_lname').val(value.std_lname);
                                $('#dept_name').val(value.dept_name);
                                $('#cur_name').val(value.cur_name);


                                //alert(key);

                            } else if (key == "verhicles") {
                                //alert("SEE verhicles");
                                var verhicle = value;

                                $.each(verhicle, function(key, value) {
                                    //alert(key);


                                    //check type vehicle
                                    if (value.vetype_ID == 1) {
                                        //alert ("Motorcycles TYPE");
                                        $('#regis_num').val(value.regist_num);
                                        $('#province_bic').val(value.province);
                                    } else if (value.vetype_ID == 2) {
                                        //alert("CAR TYPE");
                                        $('#regis_car').val(value.regist_num);
                                        $('#provin_car').val(value.province);

                                    } else {

                                    }
                                    //alert(value.regist_num);
                                });

                            }

                            //console.log(data.verhicles);

                        });

                        //console.log(data);

                    }

                });
            } else {
                alert("Not see");
            }







        }
    </script>


</head>

<body>
    <meta charset="UTF-8">

    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">จัดการข้อมูลพื้นฐาน</a></li>
                    <li class="breadcrumb-item active" aria-current="page">สถานที่</li>
                </ol>
            </nav>
        </div>

        <!--<input type="text" name="" id="test223">-->

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;รายการแจ้งเหตุการกระทำความผิด</h6>
                </div>

                <div class="card-body" id="card_1">
                    <button type="button" id="btnAdd" class="btn btn-inverse-primary btn-fw" data-toggle="modal">
                        <span><i class="fas fa-bullhorn" id="btnAdd"></i></span>แจ้งเหตุการกระทำความผิด
                    </button>
                    &nbsp;
                </div>


                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width:1000px!important;" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLongTitle">แจ้งเหตุการกระทำความผิด</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <!--  CONTENT -->

                                <form action="">
                                    <div class="row">
                                        <div class="col-sm-6"> </div>
                                        <div class="col-sm-6 padding_b">
                                            <div class="form-inline"><label for="">รหัสการกระทำความผิด:</label><input type="text" name="oh_ID" id="oh_ID" class="form-control style_input" disabled></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-inline"><span><i class="far fa-calendar-alt"></i></span><label for="" class="">วันที่แจ้งเหตุ:</label> <input type="text" name="" id="test" class="form-control style_input" disabled></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-inline"><span><i class="far fa-calendar-alt"></i></span><label for="">วันที่กระทำความผิด:</label> <input type="date" name="" id="" class="form-control style_input"></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-inline"><span><i class="fas fa-clock "></i></span><label for="">เวลา:</label> <input type="time" name="" id="" class="form-control style_input"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-inline">
                                                <span><i class="far fa-building"></i></span>
                                                <label for="">สถานที่:</label>
                                                <input type="text" name="add_place" id="add_place" class="form-control style_input" placeholder="ค้นหาสถานที่">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12"><label for="">การกระทำความผิด</label></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">คำอธิบายบริเวณที่เกิดเหตุ:</label>
                                                <textarea class="form-control" rows="5" id=""></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="">หมวดความผิด:</label>
                                            <select name="txt_oc" id="txt_oc" class="form-control">
                                                <option value="">เลือกหมวดความผิด</option>


                                            </select>

                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">ฐานความผิด:</label>
                                            <select name="txt_off" id="txt_off" class="form-control">
                                                <option value="">เลือกฐานความผิด</option>

                                            </select>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="">ผู้กระทำความผิด:</label> <a href="javascript:;" id="add"><span class="badge badge-pill badge-primary"> + เพิ่มผู้กระทำผิด</span></a>

                                        </div>
                                    </div>

                                    <div>
                                        <div class="add_person">



                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="">แนบไฟล์หลักฐาน</label><input type="file" class="form-control-file border">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="">คำอธิบายหลักฐาน:</label><textarea class="form-control" rows="5" id=""></textarea>
                                                </div>
                                            </div>
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



                <div class="card-body">
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
    <script>
        $(document).ready(function() {

            //alert("Ready");
            //sct_show();
            show_all();
            load_json_data('txt_oc');






            function load_json_data(id, parent_id) {
                var html_code = '';

                $.getJSON('<?php echo site_url('Notifyoffense/selectoffensecate') ?>', function(data) {

                    //alert(data[0].oc_ID + data[0].oc_desc);

                    html_code += '<option value=""> เลือกหมวดความผิด </option>';
                    $.each(data, function(key, value) {


                        html_code += '<option value="' + value.oc_ID + '">' + value.oc_desc + '</option>';
                        /*
                            if (id == 'txt_oc') {
                                //alert(value.oc_ID);
                                if (value.parent_id == '0') {
                                    html_code += '<option value="' + value.id + '">' + value.name + '</option>';
                                }
                        } else {
                                if (value.parent_id == parent_id) {
                                    html_code += '<option value="' + value.id + '">' + value.name + '</option>';
                                }
                            }*/



                    });
                    $('#' + id).html(html_code);
                });

            } //End function load_json_data

            function show_all() {

                //alert("Start Show_all function");
                html = '';

                $.ajax({

                    type: 'POST',
                    url: '<?php echo site_url("Notifyoffense/editnotify") ?>',
                    //data: 'S_ID=' + idstd,
                    dataType: 'json',
                    success: function(data) {
                        //alert("Having Data...");
                        //alert(data.oh_ID);
                        html += '<tr>';
                        html += '<td>' + data.oh_ID + '</td>';
                        html += '<td>12/03/2017</td>';
                        html += '<td>จอดรถในที่ห้ามจอด</td>';
                        html += '<td>อาคารเรียนรวม 5</td>';
                        html += '<td> //</td>';
                        html += '<td><a href="#"><i class="fas fa-edit" style="color:#47307b;"></i></a> <a href="javascript:;" ><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)"></i></a></td>';
                        html += '</tr>';
                        /*
                                
                            </tr>*/
                        $('#showdata').html(html);
                    }


                });
            }





        }); //End Ready function





        $('#txt_oc').on('change', function() {
            //alert("mmmm");
            var html_code = '';
            var ocID = $(this).val();
            //alert(oc_ID);

            if (ocID) {

                //alert("mmmm");

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
            /* else {
                                $('#state').html('<option value="">Select country first</option>');
                                $('#city').html('<option value="">Select state first</option>');*/

        });



        //});








        $('#add_place').typeahead({

            //source: ["นายศุภกฤต", "C++"]
            //onkeypress="student_change(this)"

            source: function(query, result) {
                $.ajax({
                    url: "<?php echo site_url('Notifyoffense/selectplace') ?>",
                    method: "POST",
                    data: {
                        query: query
                    },
                    dataType: "json",
                    success: function(data) {
                        //alert(data[0].place_ID+data[0].description);
                        result($.map(data, function(item) {
                            return item.place_name; //return value place_name
                        }));
                    }
                })
            }


        });



        $('#btnAdd').click(function() {
            var date = new Date();
            date_off = (date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear();
            $('#exampleModalCenter').modal('show');
            $('#test').val(date_off); //set of date in form
        });



        $('#btnSave').click(function() {
            alert("กด Save");
        });




        $('#add').click(function() {
            var html = '';

            html += '<div id="student' + off_per + '">';

            html += '<div class="row">';
            html += '<div class="col-sm-4"> <label for="">รหัสนักศึกษา:</label> <input type="text"  name="" id="std_id"></div>'; //<a href="javascript:;" id="Seachdata"><span class="fa fa-search"></span></a>
            html += '<div class="col-sm-4"> <label for="">ชื่อ:</label> <input type="text" name="" id="std_name" disabled>   </div>';
            html += '<div class="col-sm-4"> <label for="">นามสกุล:</label> <input type="text" name="" id="std_lname" disabled>  </div>';
            html += '</div>';

            html += '<div class="row">';
            html += '<div class="col-sm-6"> <label for="">สำนักวิชา:</label> <input type="text" name="" id="dept_name" disabled>  </div>'; //<a href="javascript:;" id="Seachdata"><span class="fa fa-search"></span></a>
            html += '<div class="col-sm-6"> <label for="">หลักสูตร:</label> <input type="text" name="" id="cur_name" disabled>   </div>';
            html += '</div>';

            html += '<div class="row">';
            html += '<div class="col-sm-6"> <label for="">รถจักรยานยนตร์:</label> <input type="text" name="" id="regis_num" disabled>  </div>'; //<a href="javascript:;" id="Seachdata"><span class="fa fa-search"></span></a>
            html += '<div class="col-sm-6"> <label for="">จังหวัด:</label> <input type="text" name="" id="province_bic" disabled>   </div>';
            html += '</div>';

            html += '<div class="row">';
            html += '<div class="col-sm-6"> <label for="">รถยนตร์:</label> <input type="text" name="" id="regis_car" disabled>  </div>'; //<a href="javascript:;" id="Seachdata"><span class="fa fa-search"></span></a>
            html += '<div class="col-sm-6"> <label for="">จังหวัด:</label> <input type="text" name="" id="provin_car" disabled>   </div>';
            html += '</div>';

            html += '<div class="row">';
            html += '<div class="col-sm-12" style="text-align: right;"> <a href="javascript:;" id="" onclick="Search_data(std_id)"><span class="fa fa-search"></span></a> <a href="javascript:;" id="" onclick="click_btnre(' + off_per + ')"><span class="fa fa-trash" style="font-size: 1.5rem;"></span>  </div>'; //<a href="javascript:;" id="Seachdata"><span class="fa fa-search"></span></a>
            html += '</div>';

            //<button type="button" name="remove" id="' + off_per + '" class="btn btn-danger btn_remove" onclick="click_btnre(' + off_per + ')">X</button>

            html += '</div>';


            off_per++;
            $('.add_person').append(html);
        });
    </script>



</body>

</html>