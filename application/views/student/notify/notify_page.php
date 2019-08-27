<!doctype html>
<html lang="en">
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
                                                <input type="text" name="add_place" id="add_place" class="form-control style_input" autocomplete="off" placeholder="ค้นหาสถานที่">

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
                                            <select name="" class="form-control">
                                                <option selected>เลือกฐานความผิด</option>
                                                <option value="volvo">Volvo</option>
                                                <option value="fiat">Fiat</option>
                                                <option value="audi">Audi</option>
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

            $('#add').click(function() {
                var i = 1;
                html = '<div class="row"><div class="col-sm-4 tt"> <label for="">รหัสนักศึกษา:</label> <input type="text" name="" id=""></div> <div class="col-sm-4"> <label for="">ชื่อ:</label> <input type="text" name="" id=""> </div> <div class="col-sm-4"> <label for="">นามสกุล:</label> <input type="text" name="" id=""></div></div>' +
                    ' <div class="row"><div class="col-sm-6"> <label for="">สำนักวิชา:</label> <input type="text" name="" id=""></div> <div class="col-sm-6"> <label for="">หลักสูตร:</label> <input type="text" name="" id=""></div></div>' +
                    '<div class="row"><div class="col-sm-6"> <label for="">รถจักรยานยนตร์:</label> <input type="text" name="" id=""></div> <div class="col-sm-6"> <label for="">จังหวัด:</label> <input type="text" name="" id=""></div></div>' +
                    '<div class="row"><div class="col-sm-6"> <label for="">รถจักรยานยนตร์:</label> <input type="text" name="" id=""></div> <div class="col-sm-6"> <label for="">จังหวัด:</label> <input type="text" name="" id=""></div></div>' +
                    '<div class="row"><div class="col-sm-12" style="text-align: right;"> <button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button>  </div> </div>'



                i++;
                $('.add_person').append(html);
            });




            $.ajax({
                type: 'ajax',
                url: '<?php echo site_url("Notifyoffense/selectoffensecate") ?>',
                dataType: 'json',
                success: function(data) {
                    //alert(data[0].oc_ID);

                    for (i = 0; i < data.length; i++) {
                        //alert(data[i].oc_ID+data[i].oc_desc);
                        $('#txt_oc').append('<option value="' + data[i].id + '">' + data[i].oc_desc + '</option>');

                    }

                }
            });



            /*$('#txt_oc').change(function(){
                //alert("xxx");
                var oc_id = $(this).val();
                //alert(oc_id);
                $.ajax({

                });
            });*/




        });


        $('#add_place').typeahead({

            //source: ["นายศุภกฤต", "C++"]
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



        $('.dlt').click(function() {
            $("#adf55").remove();
        });
    </script>



</body>

</html>