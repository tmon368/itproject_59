<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
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
        .impt_sym{
            color: rgb(247, 50, 26 );
        }
    </style>

    <script>
        var off_per = 1;

        function student_change(id) {

            //$(".loader").show();
            /*
            $('#std_2').typeahead({

                source: ["นายศุภกฤต", "C++"]
                //onkeypress="student_change(this)"
            });*/

        }

        function click_btnre(id) {
            //alert(id.value);
            $('#student' + id).html('');

        }


        //clear value on text
        function clear_value(valueid) {
            $('#std_name' + valueid + '').val("");
            $('#std_lname' + valueid + '').val("");
            $('#dept_name' + valueid + '').val("");
            $('#cur_name' + valueid + '').val("");
            $('#regis_num' + valueid + '').val("");
            $('#province_bic' + valueid + '').val("");
            $('#regis_car' + valueid + '').val("");
            $('#provin_car' + valueid + '').val("");
        }

        //Search student data in form
        function Search_data(id, value_t) {

            var idstd = id.value;
            console.log(idstd);
            //console.log(b);
            alert("กำลังค้นหา");
            clear_value(value_t); //clear value on textbox
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
                                $('#std_name' + value_t + '').val(value.std_fname);
                                $('#std_lname' + value_t + '').val(value.std_lname);
                                $('#dept_name' + value_t + '').val(value.dept_name);
                                $('#cur_name' + value_t + '').val(value.cur_name);


                                //alert(key);

                            } else if (key == "verhicles") {
                                //alert("SEE verhicles");
                                var verhicle = value;

                                $.each(verhicle, function(key, value) {
                                    //alert(key);


                                    //check type vehicle
                                    if (value.vetype_ID == 1) {
                                        //alert ("Motorcycles TYPE");
                                        $('#regis_num' + value_t + '').val(value.regist_num);
                                        $('#province_bic' + value_t + '').val(value.province);
                                    } else if (value.vetype_ID == 2) {
                                        //alert("CAR TYPE");
                                        $('#regis_car' + value_t + '').val(value.regist_num);
                                        $('#provin_car' + value_t + '').val(value.province);

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
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">แจ้งเหตุการกระทำความผิด</li>
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

                <!--Modal add notification -->
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

                                <form action="" id="formadd" name="formadd" method="post">
                                    <div class="row">
                                        <div class="col-sm-6"> </div>
                                        <div class="col-sm-6 padding_b">
                                            <div class="form-inline"><label for="">รหัสการกระทำความผิด:</label><input type="text" name="oh_ID" id="oh_ID" class="form-control style_input"></div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-inline"><span><i class="far fa-calendar-alt"></i></span><label for="" class="">วันที่แจ้งเหตุ  <span class="impt_sym">*</span>  :</label> <input type="text" name="notifica_date" id="notifica_date" class="form-control style_input"></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-inline"><span><i class="far fa-calendar-alt"></i></span><label for="">วันที่กระทำความผิด   <span class="impt_sym">*</span>    :</label> <input type="date" name="committed_date" id="committed_date" class="form-control style_input"></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-inline"><span><i class="fas fa-clock "></i></span><label for="">เวลา<span class="impt_sym">*</span>    :</label> <input type="time" name="committed_time" id="committed_time" class="form-control style_input"></div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-inline">
                                                <span><i class="far fa-building"></i></span>
                                                <label for="">สถานที่<span class="impt_sym">*</span> :</label>
                                                <input type="text" name="add_place" id="add_place" class="form-control style_input" placeholder="ค้นหาสถานที่">
                                                <input type="hidden" name="place_ID" id="place_ID">

                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">คำอธิบายบริเวณที่เกิดเหตุ<span class="impt_sym">*</span> :</label>
                                                <textarea class="form-control" rows="5" id="explanation" name="explanation"></textarea>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="">หมวดความผิด<span class="impt_sym">*</span> :</label>
                                            <select name="txt_oc" id="txt_oc" class="form-control">
                                                <option value="">เลือกหมวดความผิด</option>


                                            </select>

                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">ฐานความผิด<span class="impt_sym">*</span> :</label>
                                            <select name="txt_off" id="txt_off" class="form-control">
                                                <option value="">เลือกฐานความผิด</option>

                                            </select>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12"><label for="">การกระทำความผิด</label></div>
                                        <label for="">ผู้กระทำความผิด:</label> <a href="javascript:;" id="add"><span class="badge badge-pill badge-primary"> + เพิ่มผู้กระทำผิด</span></a>

                                    </div>

                                    <div>
                                        <div class="add_person">



                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">แนบไฟล์หลักฐาน</label>
                                                <input type="file" id="" name="img[]" class="form-control-file border" multiple>



                                                <input type="hidden" name="evidenre_name" id="evidenre_name">
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">คำอธิบายหลักฐาน:</label><textarea class="form-control" rows="5" id="explanoff" name="explanoff"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="evidenre_date" id="evidenre_date">



                                </form>








                            </div>

                            <div class="modal-footer">
                                <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                <button name="btnSave" id="btnSave" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                            </div>

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
                                    <button name="btndel" id="btndel" type="button" class="btn btn-danger btn-fw">ลบ</button>

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

            check_id();
            show_all();
            disabled_sort(); //disabled sort colum
            load_json_data('txt_oc');

            function disabled_sort() {
                $('#style_table').DataTable({
                    columnDefs: [{
                        orderable: false,
                        targets: 4
                    }]
                });
            }


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
                i = 0;

                $.ajax({

                    type: 'POST',
                    url: '<?php echo site_url("Notifyoffense/showAll") ?>',
                    //data: 'S_ID=' + idstd,
                    dataType: 'json',
                    success: function(data) {
                        //alert("Having Data...");

                        $.each(data, function(key, value) {

                            i++;
                            html += '<tr>';
                            html += '<td>' + i + '</td>'; /*value.oh_ID*/
                            html += '<td>' + value.notifica_date + '</td>';
                            html += '<td>' + value.off_desc + '</td>';
                            html += '<td>' + value.place_name + '</td>';
                            html += '<td>' + value.explanation + '</td>';
                            html += '<td> <a href="javascript:;" data=' + value.oh_ID + ' class="del_data"><i class="fa fa-file-text" style="color:rgba(67, 135, 254)"></i></a></td>';
                            html += '</tr>';
                            /*
                                    
                                </tr>*/
                            $('#showdata').html(html);





                        });








                    }


                });
            }



            //check id and create id
            function check_id() {

                title = 'L';
                var date = new Date();
                date_t = date.getFullYear();
                B_E = date_t + 543; //แปลง ค.ศ. => พ.ศ.
                convert_be = B_E.toString(); //convert to string
                BE = convert_be.substring(2);

                //console.log(BE);
                //console.log(typeof convert_be);
                //console.log(typeof B_E);

                i = 1;
                Runnning_num = 0000;
                $('#oh_ID').val(title + BE + i);
                //console.log(typeof Runnning_num); //check type


                /*$.ajax({

                    type: 'POST',
                    url: '<?php echo site_url("Notifyoffense/showAll") ?>',
                    //data: 'S_ID=' + idstd,
                    dataType: 'json',
                    success: function(data) {
                        //alert("Having Data...");
                        if (data == 0) {
                            //console.log("NULL");
                            $('#oh_ID').val(title + BE + i);
                        }


                    },
                    error: function() {
                        alert('No Data');
                    }


                });*/

            }
        }); //End Ready function



        $('#showdata').on('click', '.del_data', function() {
            //alert ("Show modal");
            var id = $(this).attr('data');
            //console.log(id);
            $('#del_file').modal('show');
            $('#formdelete').attr('action', '<?php echo site_url('Notifyoffense/deletenotify') ?>'); //Keep value 

            //select show del data
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo site_url('Notifyoffense/spc_showoffhead') ?>',
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    $('#showddel').html('ต้องการลบการแจ้งเหตุ   "' + data[0].oh_ID + '"');
                    $('input[name=delID]').val(data[0].oh_ID);


                },
                error: function() {
                    alert('ไม่สามารถลบข้อมูล');
                }
            });



        });

        $('#btndel').click(function() {
            //alert("ลบ");
            var url = $('#formdelete').attr('action');
            var data = $('#formdelete').serialize();
            //console.log(url);
            //console.log(data);


            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                //dataType: 'json',
                success: function(response) {
                    //alert(response);
                    $('#del_file').modal('hide');
                    location.reload("<?php echo site_url('Notifyoffense') ?>"); //Reload page
                }
            });


        });











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
                            //alert(item.place_ID);
                            $('#place_ID').val(item.place_ID);
                            return item.place_name; //return value place_name
                        }));
                    }
                })
            }


        });



        $('#btnAdd').click(function() {
            var date = new Date();
            //date_off = (date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear();
            date_off = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
            $('#exampleModalCenter').modal('show');
            $('#notifica_date').val(date_off); //set of date in form
            $('#evidenre_date').val(date_off); //set of date in form

        });



        //get file name
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $('#evidenre_name').val(fileName);
            //alert('The file "' + fileName +  '" has been selected.');
        });



        $('#btnSave').click(function() {

            var form_data = $('#formadd').serialize();
            //alert(form_data);
            console.log(form_data);

            //console.log(typeof form_data);

            //var data = $('#formdata').serialize();
            //var id = $(this).attr('data');

            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo site_url("Notifyoffense/addnotify") ?>',
                data: form_data,
                async: false,
                /*dataType: 'json',*/
                success: function(data) {
                    alert(data);
                    //alert("Sucess updata !!")
                    location.reload();
                }

            });









        });




        $('#add').click(function() {
            var html = '';

            html += '<div id="student' + off_per + '">';

            html += '<div class="row">';
            html += '<div class="col-sm-4"> <label for="">รหัสนักศึกษา<span class="impt_sym">*</span> :</label> <input type="text"  name="std_id[]" id="std_id' + off_per + '"></div>'; //<a href="javascript:;" id="Seachdata"><span class="fa fa-search"></span></a>
            html += '<div class="col-sm-4"> <label for="">ชื่อ:</label> <input type="text" name="" id="std_name' + off_per + '" disabled>   </div>';
            html += '<div class="col-sm-4"> <label for="">นามสกุล:</label> <input type="text" name="" id="std_lname' + off_per + '" disabled>  </div>';
            html += '</div>';

            html += '<div class="row">';
            html += '<div class="col-sm-6"> <label for="">สำนักวิชา:</label> <input type="text" name="" id="dept_name' + off_per + '" disabled>  </div>'; //<a href="javascript:;" id="Seachdata"><span class="fa fa-search"></span></a>
            html += '<div class="col-sm-6"> <label for="">หลักสูตร:</label> <input type="text" name="" id="cur_name' + off_per + '" disabled>   </div>';
            html += '</div>';

            html += '<div class="row">';
            html += '<div class="col-sm-6"> <label for="">รถจักรยานยนตร์:</label> <input type="text" name="" id="regis_num' + off_per + '" disabled>  </div>'; //<a href="javascript:;" id="Seachdata"><span class="fa fa-search"></span></a>
            html += '<div class="col-sm-6"> <label for="">จังหวัด:</label> <input type="text" name="" id="province_bic' + off_per + '" disabled>   </div>';
            html += '</div>';

            html += '<div class="row">';
            html += '<div class="col-sm-6"> <label for="">รถยนตร์:</label> <input type="text" name="" id="regis_car' + off_per + '" disabled>  </div>'; //<a href="javascript:;" id="Seachdata"><span class="fa fa-search"></span></a>
            html += '<div class="col-sm-6"> <label for="">จังหวัด:</label> <input type="text" name="" id="provin_car' + off_per + '" disabled>   </div>';
            html += '</div>';

            html += '<div class="row">';
            html += '<div class="col-sm-12" style="text-align: right;"> <a href="javascript:;" id="" onclick="Search_data(std_id' + off_per + ',temp=' + off_per + ')"><span class="fa fa-search"></span></a> <a href="javascript:;" id="" onclick="click_btnre(' + off_per + ')"><span class="fa fa-trash" style="font-size: 1.5rem;"></span>  </div>'; //<a href="javascript:;" id="Seachdata"><span class="fa fa-search"></span></a>
            html += '</div>';

            //<button type="button" name="remove" id="' + off_per + '" class="btn btn-danger btn_remove" onclick="click_btnre(' + off_per + ')">X</button>

            html += '</div>';


            off_per++;
            $('.add_person').append(html);
        });
    </script>



</body>

</html>