<!doctype html>
<html lang="en">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<div class="alert alert-success" style="display: none;">
</div>
<head>

    <title>ประเภทผู้ใช้</title>

</head>
<body>
    <meta charset="UTF-8">
    <div class="page-breadcrumb" id="nav_sty">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">จัดการข้อมูลพื้นฐาน</a></li>
                <li class="breadcrumb-item active" aria-current="page">ประเภทผู้ใช้งาน</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow mb-4">
            <div class="card-header" id="card_2">
                <h6 class="m-0 text-primary"><span><i class="fas fa-users"></i></span>&nbsp;ประเภทผู้ใช้งาน</h6>
            </div>
            <?php  
echo '<center><label class="text-danger">'.$this->session->flashdata
("message").'</label></center>';  
            ?>

            <div class="card-body" id="card_1">

                <button type="button" id="btnAdd" class="btn btn-inverse-primary btn-fw" data-toggle="modal">
                    <span><i class="fas fa-users"></i></span>เพิ่มประเภทผู้ใช้
                </button>
                &nbsp;
            </div>
            
            <!-- Modal เพิ่มข้อมูล -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มประเภทผู้ใช้งาน</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">

                            <!--ส่วนฟอร์มเพิ่มข้อมูล-->

                            <form action="" id="formadd" method="post" class="needs-validation">
                                <center>
                                    <div class="form-group" id="input_group_sty">
                                        <div class="input-group">

                                            <label for="validationCustom01..'">รหัสประเภทผู้ใช้งาน </label>
                                            <p class="text-danger">&nbsp;&nbsp;*</p>
                                            &nbsp;&nbsp;&nbsp;
                                            <div class="col-lg-3">
                                                <input type="text" name="userID" class="form-control" maxlength="2"
                                                    onkeyup="count_down_id(this);" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Alert for the number of characters-->

                                    <div class="form-group" id="input_group_sty">
                                        <div class="input-group">

                                            <label for="validationCustom02..'">ประเภทผู้ใช้งาน </label>
                                            <p class="text-danger">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;</p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="text" name="username" class="form-control" maxlength="40"
                                                onkeyup="count_downname(this);" required>
                                        </div>
                                </center>

                                <!------------------>
                        </div>
                        <div class="modal-footer">
                            <button name="insert" type="reset" class="btn btn-secondary"
                                data-dismiss="modal">ยกเลิก</button>
                            <button name="insert" type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!--------------------------------->
            
            <!-- Modal ส่วน edit -->
            <div class="modal fade" id="edit_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLongTitle"><span><i class="fas fa-edit"
                                        style="color:#47307b;"></i></span>แก้ไขข้อมูล</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!--ส่วนฟอร์มแก้ไขข้อมูล-->
                            
                            <form action="" id="formupdate" method="post" class="needs-validation">
                                <center>
                                    <div class="form-group" id="input_group_sty">
                                        <div class="input-group">

                                            <label for="validationCustom01">รหัสประเภทผู้ใช้งาน </label>
                                            <p class="text-danger">&nbsp;&nbsp;*</p>
                                            &nbsp;&nbsp;&nbsp;
                                            <div class="col-lg-3">
                                                <input type="text" name="typeeditID" class="form-control" maxlength="2"
                                                    onkeyup="count_down_editid(this);" required>

                                                <div class="form-group sty_a">
                                                    <span id="count7">0</span>
                                                    <span>/</span>
                                                    <span id="count8" style="color:#6699ff;">2</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Alert for the number of characters-->
                                        
                                        <script>
                                        function count_down_editid(obj) {

                                            document.getElementById('count7').innerHTML = obj.value.length;
                                            var element = document.getElementById('count8');

                                            element.innerHTML = 2 - obj.value.length;
                                            if (2 - obj.value.length == 0) {
                                                element.style.color = 'red';

                                            } else {
                                                element.style.color = '#6699ff';
                                            }
                                        }
                                        </script>
                                        <div class="form-group" id="input_group_sty">
                                            <div class="input-group">
                                                <label for="validationCustom02">ประเภทผู้ใช้งาน</label>
                                                <p class="text-danger">&nbsp;&nbsp;*</p>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="text" name="typeeditname" class="form-control"
                                                    maxlength="50" onkeyup="count_down_editname(this);" required>
                                            </div>
                                            <div class="form-group sty_a">
                                                <span id="count9">0</span>
                                                <span>/</span>
                                                <span id="count10" style="color:#6699ff;">50</span>
                                            </div>

                                            <!-- Alert for the number of characters-->
                                            <script>
                                            function count_down_editname(obj) {

                                                document.getElementById('count9').innerHTML = obj.value.length;
                                                var element = document.getElementById('count10');

                                                element.innerHTML = 50 - obj.value.length;
                                                if (50 - obj.value.length == 0) {
                                                    element.style.color = 'red';

                                                } else {
                                                    element.style.color = '#6699ff';
                                                }
                                            }
                                            </script>
                                        </div>
                                </center>

                                <!------------------>
                        </div>


                        <div class="modal-footer">
                            <button name="insert" type="reset" class="btn btn-secondary"
                                data-dismiss="modal">ยกเลิก</button>
                            <button name="insert" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!--------------------------------->
            <!-- Modal ส่วน del -->

            <div class="modal fade" id="del_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLongTitle"><span><i
                                        class="fa fa-exclamation-triangle"
                                        style="color:rgba(235,99,102,1.00)"></i></span>ลบข้อมูล</h2>
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
                                    <input type="hidden" name="usertypeID">

                                </center>

                                <!------------------>
                            </div>


                            <div class="modal-footer">
                                <button name="insert" type="reset" class="btn btn-secondary"
                                    data-dismiss="modal">ยกเลิก</button>
                                <button name="insert" type="submit" class="btn btn-danger btn-fw">ลบ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!------------------>
            <!-- Modal ส่วน select -->

            <div class="card-body">
                <div class="bootstrap-data-table-panel">
                    <div class="table-responsive">
                        <table id="style_table" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>รหัสประเภทผู้ใช้งาน</th>
                                    <th>ประเภทผู้ใช้งาน</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody id="showdata">
                                <tr>
                                    <td width="10px"></td>
                                    <td></td>
                                    <td width="10px">

                                        <!--edit_file  del_file  -->
                                        <!--	<a href="<?php echo base_url().'index.php/usertype/edit?id='.$rec->usertype_ID;?>" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>
                                                    <a href="<?php echo base_url().'index.php/usertype/edit?id='.$rec->usertype_ID;?>" data-toggle="modal" data-target="#edit_file" id="<?php echo $rec->usertype_ID; ?>"><i class="fas fa-edit" style="color:#47307b;">แก้ไข</i></a>&nbsp;
                                                    <a href="<?php echo base_url().'index.php/usertype/edit?id='.$rec->usertype_ID;?>" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)">ลบ</i></a>-->

                                        <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->


                                        <!-- <form action="<?php echo base_url(); ?>index.php/usertype/edit" method="post" id="editform"  class="needs-validation" >  -->
                                        <!------------------>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    
    $(function() {
        showAll();
        
        //เพิ่มข้อมูล
        $('#btnAdd').click(function() {
            $('#exampleModalCenter').modal('show');
            $('#formadd').attr('action', '<?php echo base_url(); ?>index.php/usertype/addusertype');
        });

        $('#btnSave').click(function() {
            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();
            //validate form
            var empoyeeName = $('input[name=txtEmployeeName]');
            var address = $('textarea[name=txtAddress]');
            var result = '';
            if (empoyeeName.val() == '') {
                empoyeeName.parent().parent().addClass('has-error');
            } else {
                empoyeeName.parent().parent().removeClass('has-error');
                result += '1';
            }
            if (address.val() == '') {
                address.parent().parent().addClass('has-error');
            } else {
                address.parent().parent().removeClass('has-error');
                result += '2';
            }

            if (result == '12') {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#myModal').modal('hide');
                            $('#myForm')[0].reset();
                            if (response.type == 'add') {
                                var type = 'added'
                            } else if (response.type == 'update') {
                                var type = "updated"
                            }
                            $('.alert-success').html('Employee ' + type + ' successfully')
                                .fadeIn().delay(4000).fadeOut('slow');
                            showAllEmployee();
                        } else {
                            alert('Error');
                        }
                    },
                    error: function() {
                        alert('ไม่สามารถเพิ่มข้อมูล');
                    }
                });
            }
        });

        //แก้ไขข้อมูล
        $('#showdata').on('click', '.fa-edit', function() {
            var id = $(this).attr('data');
            var popup = document.getElementById("editimage");
            $('#edit_file').modal('show');
            $('#formupdate').attr('action',
                '<?php echo base_url() ?>index.php/usertype/updateusertype');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>index.php/usertype/editusertype',
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    $('input[name=typeeditID]').val(data.usertype_ID);
                    $('input[name=typeeditname]').val(data.usertype_name);
                },
                error: function() {
                    alert('ไม่สามารถแก้ไขข้อมูล');
                }
            });
        });

        //ลบข้อมูล
        $('#showdata').on('click', '.fa-trash-alt', function() {
            var id = $(this).attr('data');
            $('#del_file').modal('show');
            //prevent previous handler - unbind()
            $('#formdelete').attr('action',
                '<?php echo base_url() ?>index.php/usertype/deleteusertype');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>index.php/usertype/editusertype',
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    $('#showddel').html('ต้องการลบสถานที่   "' + data.usertype_name + '"');
                    $('input[name=usertypeID]').val(data.usertype_ID);
                },
                error: function() {
                    alert('ไม่สามารถลบข้อมูล');
                }
            });
        });

        //แสดงข้อมูล
        function showAll() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>index.php/usertype/showAll',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].usertype_ID + '</td>' +
                            '<td>' + data[i].usertype_name + '</td>' +
                            '<td>' +
                            '<a href="javascript:;"  ><i class="fas fa-edit" style="color:#47307b;" data="' +
                            data[i].usertype_ID + '"></i></a>' +
                            '<a href="javascript:;" ><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)" data="' +
                            data[i].usertype_ID + '"></i></a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error: function() {
                    alert('ไม่มีข้อมูล');
                }
            });
        }
    });
    </script>
</body>
</html>