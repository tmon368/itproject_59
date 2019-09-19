<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>





<head>

    <title>เสนอบำเพ็ญประโยชน์ | ระบบวินัยนักศึกษา</title>
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
                                        <div class="col-sm-8">
                                            <div class="col-sm-6 padding_b">
                                                <label for="">ชื่อกิจกรรม</label> <font color="red">* </font>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                           <input type="text" name="service_name" id="service_name" class=" style_input"  maxlength="25"  >
                                            </div>
                                        </div>     
                                    </div>
                                    
                                 <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-inline"><label for="">วันที่จัดกิจกรรม<label> 
                                            <font color="red">* </font>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="date" name="service_date" id="service_date" class="style_input">
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
                                          &nbsp;&nbsp;  <input type="text" name="service_hour" id="service_hour" class=" style_input" style="width:50px;" >
                                            </div>
                                        </div>
                                    </div>
                                 <div class="row">
                                        <div class="col-sm-8"> </div>
                                        <div class="col-sm-6 padding_b">
                                            <div class="form-inline"><label for="">สถานที่จัดกิจกรรม</label><font color="red">* </font>:&nbsp;&nbsp;&nbsp;
                                         <input type="text" name="place" id="place" class=" style_input" style="width:300px;" >
                                            </div>
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-sm-8"> </div>
                                        <div class="col-sm-6 padding_b">
                                            <div class="form-inline"><label for="">ผู้รับรองกิจกรรม</label><font color="red">* </font>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <input type="text" name="add_persennel" id="add_persennel" class=" style_input" style="width:200px;" placeholder="ค้นหาผู้ควบคุมกิจกรรม
                                          <input type="hidden" name="fullname" id="fullname">
                                            </div>
                                        </div>
                                    </div>
                                    
                                 
                                 
                           
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">รายละเอียดกิจกรม:</label>
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
                                    <th>ระยะเวลากิจกรรม</th>
                                    <th>ผู้ควบคุม</th>
                                     <th>รายละเอียดกิจกรรม</th>
                                      <th>สถานะการเสนอกิจกรรม</th>
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

        check_id();
        show_all();
       
        function show_all() {

            html = '';

            $.ajax({

                type: 'POST',
                url: '<?php echo site_url("VolunteerAC/showAll") ?>',
                //data: 'S_ID=' + idstd,
                dataType: 'json',
                success: function(data) {
                    //alert("Having Data...");

                    $.each(data, function(key, value) {


                        html += '<tr>';
                        html += '<td>' + value.service_ID + '</td>';
                        html += '<td>' + value.service_name +'</td>';
                        html += '<td>' + value.service_date + '</td>';
                        html += '<td>' +value.service_hour+ '</td>';
                        html += '<td>'+value.person_fname  + "  "+ value.person_lname +'</td>';
                        html += '<td align="center"><i style="font-size:25px;color:blue" class="far fa-file-alt btn-fw edit_data"></i></td></td>';
                        html += '<td>' +value.status+ '</td>';
                        html += '</tr>';
                       
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
            B_E=date_t+543; //แปลง ค.ศ. => พ.ศ.
            convert_be=B_E.toString(); //convert to string
            BE=convert_be.substring(2);
                           
            console.log(BE);
            console.log(typeof convert_be);
            //console.log(typeof B_E);

            i=1;
            Runnning_num = 0000;
            //console.log(typeof Runnning_num); //check type

            $.ajax({

                type: 'POST',
                url: '<?php echo site_url("VolunteerAC/showAll") ?>',
                //data: 'S_ID=' + idstd,
                dataType: 'json',
                success: function(data) {
                    //alert("Having Data...");
                    if (data == 0) {
                        //console.log("NULL");
                        
                        $('#oh_ID').val(title + BE + Runnning_num);
                    }




                },
                error: function() {
                    alert('No Data');
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
        

    });



    $('#add_persennel').typeahead({

        source: function(query, result) {
            $.ajax({
                url: "<?php echo site_url('VolunteerAC/selectapersennel') ?>",
                method: "POST",
                data: {
                    query: query
                },
                dataType: "json",
                success: function(data) {
                    
                    result($.map(data, function(item) {
                    
                        $('#fullname').val(item.fullname);
                        return item.fullname; 
                    }));
                }
            })
        }


    });





    $('#btnAdd').click(function() {
     
        
       
   $('#exampleModalCenter').modal('show');
       

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
            url: '<?php echo site_url("VolunteerAC/addVolunteerAc") ?>',
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



    
</script>



</body>

</html>