<!doctype html>
<html lang="en">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<center>
<strong><div  class="alert alert-success" role="alert" style="display: none;"></div></strong>
<strong><div  class="alert alert-danger" role="alert" style="display: none;"></div></strong>
<strong><div  class="alert alert-warning" role="alert" style="display: none;"></div></strong>
</center>
<head>
    <title>รายตัวกระทำความผิด</title>
<style> 
        input.largerCheckbox { 
            width: 25px; 
            height: 25px; 
        } 
    </style> 
</head>
<body>
    <meta charset="UTF-8">
    <div class="page-breadcrumb" id="nav_sty">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">รายงานตัวกระทำความผิด</li>
            </ol>
        </nav>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow mb-4">
            <div class="card-header" id="card_2">
                <h6 class="m-0 text-primary"><span><i class=""></i></span>&nbsp;รายงานตัวกระทำความผิด</h6>
            </div>
           

        
             <div id="myModal"  > </div>

            <!-- Modal เพิ่มข้อมูล -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " style="max-width: 650px!important;" role="document" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มหมวดความผิด</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        
                            <!--ส่วนฟอร์มเพิ่มข้อมูล-->

                            <form action="" id="formadd" method="post" class="needs-validation">
                                <center>
                                    <div class="form-group" id="input_group_sty">
                                        <div class="input-group">

                                            <label for="validationCustom01..'">รหัสหมวดความผิด </label>
                                            <p class="text-danger">&nbsp;&nbsp;*</p>

                                            <div class="col-lg-3">
                                                <input type="text" name="txtID" id="oc_ID"class="form-control" maxlength="2"
                                                    onkeyup="count_down_id(this);" required>
                                           <div id="msg1"></div>
                                                   <!--   <div id="msg2" style="color:red"></div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="input_group_sty">
                                        <div class="input-group">

                                            <label for="validationCustom02..'">ชื่อหมวดความผิด </label>
                                            <p class="text-danger">&nbsp;&nbsp;*</p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="text" name="txtname" class="form-control" maxlength="50"
                                                onkeyup="count_downname(this);" required>
                                        </div>
                                        
                                </center>

                                <!------------------>
                        </div>
                        <div class="modal-footer">
                            <button name="insert" type="reset" class="btn btn-secondary"
                                data-dismiss="modal">ยกเลิก</button>
                            <button name="btnSave" id="btnSave" type="button" class="btn btn-success">บันทึกข้อมูล</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--------------------------------->
            <!-- Modal ส่วน edit -->

            <div class="modal fade" id="edit_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered"style="max-width: 650px!important;" role="document">
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

                                            <label for="validationCustom01">รหัสหมวดความผิด </label>
                                            <p class="text-danger">&nbsp;&nbsp;*</p>
                                            &nbsp;&nbsp;&nbsp;
                                            <div class="col-lg-3">
                                                <input type="text" readonly name="txteditID" class="form-control" maxlength="2"
                                                    onkeyup="count_down_editid(this);" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="input_group_sty">
                                        <div class="input-group">
                                            <label for="validationCustom02">ชื่อหมวดความผิด</label>
                                            <p class="text-danger">&nbsp;&nbsp;*</p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="text" name="txteditname" class="form-control" maxlength="50"
                                                onkeyup="count_down_editname(this);" required>
                                        </div>
                                         
                                </center>
                                <!------------------>
                        </div>
                        <div class="modal-footer">
                            <button name="insert" type="reset" class="btn btn-secondary"
                                data-dismiss="modal">ยกเลิก</button>
                            <button name="btnedit" type="button" id="btnedit" class="btn btn-success">บันทึกข้อมูล</button>
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
                                    <input type="hidden" name="txtdelID">
                                </center>
                                <!------------------>
                            </div>
                            
                            <div class="modal-footer">
                                <button name="insert" type="reset" class="btn btn-secondary"
                                    data-dismiss="modal">ยกเลิก</button>
                                <button name="btndel" id="btndel" type="button" class="btn btn-danger btn-fw">ลบ</button>
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
                                    <th width="10px">ลำดับที่</th>
                                    <th>วันที่กระทำความผิด</th>
                                    <th>ฐานความผิด</th>
                                    <th>รายละเอียด</th>
                                    <th>ยืนยันการกระทำความผิด</th>
                                    <th>ส่งหลักฐานแย้ง</th>
                                </tr>
                            </thead>
                            <tbody id="showdata" >
                                <tr>
                                    <td width="10px"></td>
                                    <td><p id="committed_date"></p></td>
                                    <td width="10px"><p id="committed_time"></p></td>
                                    <td align="center"><i style="font-size:25px;color:blue" class="far fa-file-alt btn-fw edit_data"></i></td>
                                    <td align="center"> <input type="checkbox" name="logo1" class="largerCheckbox" ></td>
                                  	<td align="center"> <i style="font-size:25px;color:black" class="far fa-file-archive btn-fw edit_data"></i></td>
                                </tr>
                            </tbody>
                            <tbody id="showdata" >
                            <tr>
                            <td></td>
                               <td></td>
                                  <td></td>
                                     <td></td>
                                        <td></td>
                                      
                                        <br>
                            	<td><button type="button" id="btnAdd" class="btn btn-inverse-primary btn-fw" data-toggle="modal">
                            	<span><i class="" id="btnAdd"></i></span>บันทึก </button></td>
                            	</tr>
                            	</tbody>
                        </table>
                    </div>
            </div>
                </div> 
            </div>
        </div>

    
    <script>
    $(document).ready(function(){
        showAll();
        selectstudentoffensehead();
        selectoffenseorder();

        
        
function selectstudentoffensehead() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/OffenseHead/selectstudentoffensehead',
            async: false,
            dataType: 'json',
            success: function(data) {

            	$("#S_ID").html(data[0].S_ID);
            	$("#committed_date").html(data[0].committed_date);
            	$("#committed_time").html(data[0].committed_time);
            
            	
            	
            	
            	//$("#email1").html(data[0].email);    	
            },
            error: function() {
                alert('ไม่มีข้อมูล'); 
            }
        });
    }

function selectoffenseorder() {
    $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/OffenseHead/selectoffenseorder',
        async: false,
        dataType: 'json',
        success: function(data) {

        	$("#S_ID").html(data[0].S_ID);
        	$("#std_fname").html(data[0].std_fname);
        	$("#std_lname").html(data[0].std_lname);
        	$("#committed_date").html(data[0].committed_date);
        	$("#committed_time").html(data[0].committed_time);
        	$("#place_name").html(data[0].place_name);
        	$("#explanation").html(data[0].explanation);    
        	$("#off_desc").html(data[0].off_desc);
        	$("#offeviden_ID").html(data[0].offeviden_ID);
        	
        	
        	
        	//$("#email1").html(data[0].email);    	
        },
        error: function() {
            alert('ไม่มีข้อมูล'); 
        }
    });
}


        //แสดงข้อมูล
        function showAll() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>index.php/OffenseHead/showAll',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                        	'<td>' + ($i++) + '</td>' +
                            '<td>' + data[i].committed_date + '</td>' +
                            '<td>' + data[i].committed_time + '</td>' +
                        
                            
                            
                            '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error: function() {
                //    alert('ไม่มีข้อมูล');
                }
            });
        }
    });
    </script>
</body>
</html>