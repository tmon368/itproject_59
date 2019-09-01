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

        function test() {
            alert("XXX");
        }

        function click_btnre(id) {
            //alert("yyy"+id);

            $('#student' + id).html('');

        }
    </script>


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

        <!--<input type="text" name="" id="test223">-->

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


                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width:1000px!important;" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มการเสนอการบำเพ็ญประโยชน์</h2>
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
                                            <div class="form-inline"><label for="">รหัสกิจกรรม:</label><input type="text" name="..." id="..." class="form-control style_input" disabled></div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="col-sm-6 padding_b">
                                                <label for="">ชื่อกิจกรรม</label> <font color="red">* </font>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                           <input type="text" name="" id="" class=" style_input"  maxlength="25"  >
                                            </div>
                                        </div>     
                                    </div>
                                    
                                 <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-inline"><label for="">วันที่จัดกิจกรรม<label> 
                                            <font color="red">* </font>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="date" name="" id="" class="style_input">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-inline"><label for="">เวลาเริ่ม<label> 
                                            <font color="red">* </font>:&nbsp;&nbsp;&nbsp;&nbsp;
                                            <select name="" id="" class="">
                                                <option value="">11.30</option>  <option value="">12.00</option> <option value="">12.30</option>
                                                <option value="">13.00</option>  <option value="">13.30</option> <option value="">14.00</option>
                                                <option value="">14.30</option>  <option value="">15.00</option> <option value="">15.30</option>
                                                  <option value="">16.00</option>  <option value="">16.30</option> <option value="">17.00</option>
                                           </select> &nbsp;&nbsp;ถึง
                                           <select name="" id="" class="">
                                                  <option value="">12.00</option> <option value="">12.30</option>
                                                <option value="">13.00</option>  <option value="">13.30</option> <option value="">14.00</option>
                                                <option value="">14.30</option>  <option value="">15.00</option> <option value="">15.30</option>
                                                  <option value="">16.00</option>  <option value="">16.30</option> <option value="">17.00</option>
                                           </select> 
                                            </div>   
                                        </div>   
                                 </div>
                                 <div class="row">
                                        <div class="col-sm-8"> </div>
                                        <div class="col-sm-6 padding_b">
                                            <div class="form-inline"><label for="">จำนวนผู้เข้าร่วม</label><font color="red">* </font>:&nbsp;&nbsp;&nbsp;&nbsp;
                                          &nbsp;&nbsp;  <input type="text" name="..." id="..." class=" style_input"  >
                                            </div>
                                        </div>
                                    </div>
                                 <div class="row">
                                        <div class="col-sm-8"> </div>
                                        <div class="col-sm-6 padding_b">
                                            <div class="form-inline"><label for="">สถานที่จัดกิจกรรม</label><font color="red">* </font>:&nbsp;&nbsp;&nbsp;
                                         <input type="text" name="..." id="..." class=" style_input" style="width:300px;" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                 
                                 
                           
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="">คำอธิบายบริเวณที่เกิดเหตุ:</label>
                                                <textarea class="form-control" rows="5" id=""></textarea>
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
                                    <th>ชื่อกิจกรรม</th>
                                    <th>วันที่</th>
                                    <th>วันที่</th>
                                    <th>จำนวนรับ</th>
                                    <th>ผู้ควบคุม</th>
                                     <th>รายละเอียดกิจกรรม</th>
                                      <th>สถานะการเสนอกิจกรรม</th>
                                        <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody id="showdata">
                                <tr>
                                    <td>1</td>
                                    <td>12/03/2017</td>
                                    <td>จอดรถในที่ห้ามจอด</td>
                                    <td>อาคารเรียนรวม 5</td>
                                    <td>#</td>
                                    <td>#</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>


    </div>
    <script>
        $(document).ready(function() {

            //sct_show();

            load_json_data('txt_oc');

            $('#add').click(function() {
                html = '<div id="student' + off_per + '"><div class="row"><div class="col-sm-6"> <label for="">รหัสนักศึกษา:</label> <input type="text"  name="" id="std_id"></div>  <div class="col-sm-6"> <a href="javascript:;" id="Seachdata"><span class="badge badge-success">ค้นหา</span></a> </div>  </div> ' +
                    '<div class="row"><div class="col-sm-6">  <label for="">ชื่อ:</label> <input type="text" name="" id="std_name" disabled> </div> <div class="col-sm-6"> <label for="">นามสกุล:</label> <input type="text" name="" id="std_lname" disabled> </div></div> ' +
                    ' <div class="row"><div class="col-sm-6"> <label for="">สำนักวิชา:</label> <input type="text" name="" id="dept_name" disabled></div> <div class="col-sm-6"> <label for="">หลักสูตร:</label> <input type="text" name="" id="cur_name" disabled></div></div>' +
                    '<div class="row"><div class="col-sm-6"> <label for="">รถจักรยานยนตร์:</label> <input type="text" name="" id="regis_num" disabled></div> <div class="col-sm-6"> <label for="">จังหวัด:</label> <input type="text" name="" id="province_bic" disabled></div></div>' +
                    '<div class="row"><div class="col-sm-6"> <label for="">รถยนตร์:</label> <input type="text" name="" id="regis_car" disabled></div> <div class="col-sm-6"> <label for="">จังหวัด:</label> <input type="text" name="" id="provin_car" disabled></div></div>' +
                    '<div class="row"><div class="col-sm-12" style="text-align: right;"> <button type="button" name="remove" id="' + off_per + '" class="btn btn-danger btn_remove" onclick="click_btnre(' + off_per + ')">X</button></div></div></div> </div>'

                off_per++;
                $('.add_person').append(html);

                $('#Seachdata').click(function(){
                    //var idtest = $(this).val();
                    var idstd = $('#std_id').val();
                    alert("กำลังค้นหา");

                    if (idstd == "59120808"){

                        //alert("i see");
                        $('#std_name').val("ศุภกฤต");
                        $('#std_lname').val("วงค์ปัญญา");
                        $('#dept_name').val("สำนักวิชาสารสนเทศศาสตร");
                        $('#cur_name').val("หลักสูตรเทคโนโลยีสารสนเทศ");
                        $('#regis_num').val("รมท774");
                        $('#province_bic').val("กาญจนบุรี");
                        $('#regis_car').val("สส999");
                        $('#provin_car').val("กรุงเทพมหานคร");



                    }
                    else{
                        alert("Not see");
                    }
                    //alert(idstd);

                });

                /*$('#std_2').typeahead({

                    source: ["นายศุภกฤต", "C++"]
                    //onkeypress="student_change(this)"
                });*/


            });



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

            }


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



















        });



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
    </script>



</body>

</html> 