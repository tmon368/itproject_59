<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">


<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>


<head>
    <title> ลงทะเบียนกิจกรรมบำเพ็ญประโยชน์ | ระบบวินัยนักศึกษา</title>
    <style>
        .shape_sty {
            background-color: rgb(234, 237, 237);
        }

        .padding_std {
            padding: 1rem;
        }

        .pagination>li>a,
        .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .pagination>li>a:focus,
        .pagination>li>a:hover,
        .pagination>li>span:focus,
        .pagination>li>span:hover {
            z-index: 2;
            color: #23527c;
            background-color: #eee;
            border-color: #ddd;
        }

        .txt_position {
            text-align: center;
        }

        .show_data {
            font-family: 'Sarabun', sans-serif;
        }

        .content {
            font-family: 'Sarabun', sans-serif;
        }
    </style>
    <script>
        var id_count = 0; //run id
        var temp_result = [];
    </script>
</head>

<body>

    <meta charset="UTF-8">

    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ลงทะเบียนกิจกรรมบำเพ็ญประโยชน์</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;การบำเพ็ญประโยชน์</h6>
                </div>

                <div class="container">

                    <div class="row">

                        <div class="col-sm-12 padding_std">
                            ตารางกิจกรรมที่เลือก >> ประจำปีการศึกษา 2562
                        </div>

                    </div>


                    <!-- แสดงกิจกรรมบำเพ็ญประโยชน์-->
                    <div class="container show_data">



                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            howing 1 to 10 of 869 entries
                        </div>
                        <div class="col-sm-6">
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Modal detail-->
                <div class="modal fade" id="ShowDta" role="dialog">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"> </h4>
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



            </div>








        </div>








    </div>


    <script>
        $(document).ready(function() {

            show_all();

            function show_all() {

                //alert("Start Show_all function");
                html = '';


                $.ajax({

                    type: 'POST',
                    url: '<?php echo site_url("Volunteer_regis/showAll") ?>',
                    dataType: 'json',
                    success: function(data) {

                        $.each(data, function(key, value) {
                            


                            $('.modal-title').text(value.service_name); //set name header

                            html += '<div class="row">';
                            html += '<div class="col-sm-6">';
                            html += '<p><a href="javascript:;" class="sh_modal" data=' + value.service_ID + '> <strong> กิจกรรม: ' + value.service_name + '</strong> </a></p>';
                            html += '<p>วันที่จัดกิจกรรมวันที่  ' + value.service_date + '</p>';
                            html += '<p> เวลาเริ่ม 8.00 ถึง 16.00 น. จำนวนชั่วโมงกิจกรรม ' + value.service_hour + ' ชั่วโมง</p>';
                            html += '<p> ผู้รับรองกิจกรรม: ' + value.person_fname + " " + value.person_lname + '</p>';
                            html += '</div>';
                            html += '<div class="col-sm-6">';
                            html += '<p> <div class="txt_position"> <span id="count_person">' + value.number_of + '</span>/' + value.received + '</div> </p>';
                            html += '<p class="txt_position"><button type="button" class="btn btn-inverse-success btn-rounded btn-fw btn_submit" id="btnregis' + id_count + '" data=' + value.service_ID + '>ลงทะเบียน</button></p>';
                            html += '</div>';
                            html += '</div>';
                            
                            id_count++; //เพิ่มค่า id

                            var id = value.service_ID;
                            //console.log(id);


                            $.ajax({
                                type: 'ajax',
                                method: 'get',
                                url: '<?php echo site_url('Volunteer_regis/wherecheck') ?>',
                                data: {
                                    id: id
                                },
                                async: false,
                                dataType: 'json',
                                success: function(data) {
                                    
                                    temp_result.push(data); //เก็บค่าลง Array
                                    //console.log(data);
                                    //console.log(temp_result);
                                }
                            });







                            $('.show_data').html(html);


                        });

                        //after show data sucess
                 
                        //loop result 
                        for(j=0; j < temp_result.length; j++){                            
                            //loop button id
                            for (k=0; k <= id_count; k++ ){


                                //เช็คว่าผู้ใช้เคยลงทะเบียนกิจกรรมหรือยัง
                                if (j == k && temp_result[j] == true){

                                    $('#btnregis'+ k +'').attr("disabled", true); //disabled button
                                    $('#btnregis'+ k +'').text('การลงทะเบียนสำเร็จ'); //
                                    
                                }



                            }

                            
                        }













                    }


                });

            }


            //Regis activity
            $('.show_data').on('click', '.btn_submit', function() {

                var id = $(this).attr('data'); //Get Sevice id 
                
                //console.log(id);
                

                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    url: '<?php echo site_url('Volunteer_regis/regisnotify') ?>',
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //$('.btn_submit').attr("disabled", true); //disabled button
                        //$('.btn_submit').text('การลงทะเบียนสำเร็จ'); //change text
                        alert('ลงทะเบียนสำเร็จ');
                        location.reload();

                    },
                    error: function() {
                        alert('ไม่สามารถลงทะเบียนได้');
                    }
                });



            });








        });


        //show more detail
        $('.show_data').on('click', '.sh_modal', function() {

            var id = $(this).attr('data');
            //console.log(id);
            html = '';

            $('#ShowDta').modal('show');

            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo site_url('Volunteer_regis/show_whereid') ?>',
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    //alert('Sucess');

                    $.each(data, function(key, value) {

                        html += '<p>ผู้รับรองกิจกรรม ชื่อ: ' + value.person_fname + ' นามสกุล: ' + value.person_lname + ' หมายเลขโทรศัพท์ ' + value.phone1 + ' </p>';
                        html += '<p>สถานที่จัดกิจกรรม: ' + value.place + ' </p>';
                        html += '<p>วันที่กำหนด: ' + value.service_date + '  เวลา: '+ value.start_time + '-' + value.end_time +' ชั่วโมงกิจกรรม: # ชั่วโมง</p>';
                        html += '<p>จำนวนที่รับสมัคร: '+ value.received  +'</p>';
                        html += '<p>รายละเอียดกิจกรรม: '+ value.explanation +' </p>';


                        $('.content').html(html);

                    });

                },
                error: function() {
                    alert('Error');
                }
            });








        });
    </script>



</body>