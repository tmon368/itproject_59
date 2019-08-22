<!doctype html>
<html lang="en">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<head>

    <title>สถานที่ admin</title>
    <style>
        label {
            padding: 0.4rem;
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

                                <div class="row">
                                    <div class="col-sm-6"> </div>
                                    <div class="col-sm-6"><label for="">รหัสการกระทำความผิด:</label><input type="email" id="email"></div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4"> <label for="" class="">วันที่แจ้งเหตุ:</label> <input type="date" name="" id=""> </div>
                                    <div class="col-sm-4"> <label for="">วันที่กระทำความผิด:</label> <input type="date" name="" id=""></div>
                                    <div class="col-sm-2"> <label for="">เวลา:</label> <input type="time" name="" id=""> </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">สถานที่:</label>
                                        <select name="">
                                            <option selected>Custom Select Menu</option>
                                            <option value="volvo">Volvo</option>
                                            <option value="fiat">Fiat</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">การกระทำความผิด</div>
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
                                        <select name="" class="">
                                            <option selected>Custom Select Menu</option>
                                            <option value="volvo">Volvo</option>
                                            <option value="fiat">Fiat</option>
                                            <option value="audi">Audi</option>
                                        </select>

                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">ฐานความผิด:</label>
                                        <select name="" class="">
                                            <option selected>Custom Select Menu</option>
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
                                    <div class="row add_person">
                                        <!--
                                        <label for="">รหัสนักศึกษา:</label> <input type="text" name="" id="">
                                        <label for="">ชื่อ:</label> <input type="text" name="" id="">
                                        <label for="">นามสกุล:</label> <input type="text" name="" id="">
                                        <label for="">สำนักวิชา:</label> <input type="text" name="" id="">
                                        <label for="">หลักสูตร:</label> <input type="text" name="" id="">
                                    </div>

                                    <div class="form-inline">
                                        <label for="">เลขทะเบียนรถจักรยานยนต์:</label> <input type="text" name="" id="">
                                        <label for="">จังหวัด:</label> <input type="text" name="" id="">
                                    </div>

                                    <div class="form-inline">
                                        <label for="">เลขทะเบียนรถยนต์:</label> <input type="text" name="" id="">
                                        <label for="">จังหวัด:</label> <input type="text" name="" id="">-->
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

                                </form>
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

            var i = 1;
            $('#add').click(function() {
                //alert ("Hello");
                i++;
                $('.add_person').append(' <div class="col-sm-12"><label for="">รหัสนักศึกษา:</label> <input type="text" name="" id=""> <label for="">ชื่อ:</label> <input type="text" name="" id=""> <label for="">นามสกุล:</label> <input type="text" name="" id="">');
            });








        });

        $('#btnAdd').click(function() {
            //$('#formadd')[0].reset();
            //$("#msg1").empty();
            $('#exampleModalCenter').modal('show');
            //$('#formadd').attr('action', '<?php echo base_url(); ?>index.php/place/addplace');
        });
    </script>



</body>

</html>