<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">


<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script>
    sum = 0;
</script>

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
        .txt_position{
            text-align: center;
        }
    </style>
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

        <div class="col-lg-9 grid-margin stretch-card">
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
                        <!--
                        <div class="row">
                            <div class="col-sm-6">

                                <p><a href=""> <strong> 1. กิจกรรม: ทำความสะอาดโรงอาหาร 4</strong> </a></p>

                                <p>วันที่จัดกิจกรรมวันที่ 1 ส.ค. 62</p>

                                <p> เวลาเริ่ม 8.00 ถึง 16.00 น. จำนวนชั่วโมงกิจกรรม 9 ชั่วโมง</p>

                                <p> ผู้รับรองกิจกรรม สมัย มีรักษ์ ,สมรัก ดีใจ </p>

                            </div>


                            <div class="col-sm-6">

                                <p>
                                    <div> <span id="count_person">0</span>/25</div>
                                </p>
                                <p><button type="button" class="btn btn-inverse-success btn-rounded btn-fw btn_submit">ลงทะเบียน</button></p>

                            </div>


                        </div>-->


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
                        //alert("Having Data...");

                        $.each(data, function(key, value) {

                            html += '<div class="row">';
                            html += '<div class="col-sm-6">';
                            html += '<p><a href=""> <strong> กิจกรรม: '+ value.service_name +'</strong> </a></p>';
                            html += '<p>วันที่จัดกิจกรรมวันที่  '+ value.service_date +'</p>';
                            html += '<p> เวลาเริ่ม 8.00 ถึง 16.00 น. จำนวนชั่วโมงกิจกรรม '+ value.service_hour +' ชั่วโมง</p>';
                            html += '<p> ผู้รับรองกิจกรรม '+ value.person_fname +" "+ value.person_lname +'</p>';
                            html += '</div>';
                            html += '<div class="col-sm-6">';
                            html += '<p> <div class="txt_position"> <span id="count_person">0</span>/25</div> </p>';
                            html += '<p class="txt_position"><button type="button" class="btn btn-inverse-success btn-rounded btn-fw btn_submit">ลงทะเบียน</button></p>';
                            html += '</div>';
                            html += '</div>';
                                                    
                            $('.show_data').html(html);
                          

                        });

                    }


                });
            }







        });


        $('.btn_submit').click(function() {
            //count=0;

            sum = sum + 1;

            //alert('ลงทะเบียนสำเร็จ');

            $("#count_person").text(sum);

        });
    </script>



</body>