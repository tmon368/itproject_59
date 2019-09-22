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

        #add_persennel {
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

                                <form action="" id="formadd" name="formadd" method="post">
                                  
                                    
                                    <div class="row">
                                            <div class="col-sm-12 padding_b">
                                                <label for="">ชื่อกิจกรรม</label> <font color="red">* </font>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                           <input type="text" name="service_name" id="service_name" class=" style_input"  maxlength="25"  >
                                            </div>
                                        </div>     
                                 
                                    
                                 <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-inline"><label for="">วันที่จัดกิจกรรม<label> 
                                            <font color="red">* </font>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="date" name="service_date" id="service_date" class="style_input">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-inline"><span><i class="fas fa-clock "></i></span><label for="">เวลา<span class="impt_sym">*</span> :</label> <input type="time" name="start_time" id="start_time" class="form-control style_input"></div>
                                             </div>
                                             
                                             <div class="col-sm=4">
                                             <div class="form-inline"><span><i class="fas fa-clock "></i></span><label for="">ถึง<span class="impt_sym">*</span> :</label> <input type="time" name="end_time" id="end_time" class="form-control style_input"></div>
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
                                            <input type="text" name="person_ID" id="add_persennel" class=" style_input" style="width:200px;" placeholder="ค้นหาผู้ควบคุมกิจกรรม">
                                          <input type="hidden" name="person_ID" id="person_ID">
                                            </div>
                                        </div>
                                    </div>
                                    
                                 
                                 
                           
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">รายละเอียดกิจกรม:</label>
                                                <textarea class="form-control" rows="5" id="explanation" name="explanation"></textarea>
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
                        html += '<td>' +value.start_time+ "-"+value.end_time+'</td>';
                        html += '<td>'+value.person_fname  + "  "+ value.person_lname +'</td>';
                        html += '<td> <a href="javascript:;" data=' + value.oh_ID + ' class="show_data"><i class="fa fa-file-text" style="color:rgba(67, 135, 254);font-size:1.5rem;"></i></a></td>';
                        html += '<td>' +value.statusname+ '</td>';
                        html += '</tr>';
                       
                        $('#showdata').html(html); 





                    });








                }


            });
        }







        //check id and create id
        function check_id() {

           
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

    $('#add_persennel').typeahead({

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
     	                return item.person_fname+' '+item.person_lname; 
                    }));
                }
            })
        }


    });

    $('#showdata').on('click', '.show_data', function() {

        var id = $(this).attr('data');
        //console.log(id);
        $('#ShowDta').modal('show');
        html = '';
        i = 0;

        //select show data
        $.ajax({
            type: 'ajax',
            method: 'get',
            url: '<?php echo site_url('VolunteerAc/showAll') ?>',
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
                    if (i == 1) {
                        html += '<p class="text_head">รายละเอียด</p>';
                        html += '<p class="text_position"> <label for="" class="label_txt"> ชื่อ:</label> ' + value. person_fname+ ' <label for="" class="label_txt">หมายเลขโทรศัพท์:</label> ' + value.phone1 + '</p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">สถานที่: </label> ' + value.place + ' </p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">วันที่กำหนด: </label> ' + value.service_date + ' </p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">เวลาจัดกิจกรรม:</label>  '+ value.start_time + "-"+ value.end_time +' </p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">จำนวนชั่วโมงกิจกรรม: </label> ' + value.start_time + "-"+ value.end_time +' </p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">จำนวนที่รับสมัคร: </label> ' + value.start_time + ' </p>';
                        html += '<p class="text_position"> <label for="" class="label_txt">รายละเอียด: </label> ' + value.start_time + ' </p>';
                         
                    }
                    
                      

                    $('.content').html(html);
                });
            },
            error: function() {
                alert('ไม่สามารถลบข้อมูล');
            }
        });



    });



    $('#btnAdd').click(function() {    
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
    
</script>



</body>

</html>