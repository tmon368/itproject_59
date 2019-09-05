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
           

        
    
            <!-- Modal เพิ่มข้อมูล -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " style="max-width: 750px!important;" role="document" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLongTitle">ใบสั่งการกระทำความผิด</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!--ส่วนฟอร์มเพิ่มข้อมูล-->

                            <form action="" id="formadd" >
                              
                                 <div class="row"  >
                                 <div class="col-sm-4"  >
                                 	<label>ชื่อ</label><p id="std_fname"></p>
                                 </div>
                                 <div class="col-sm-8">
                                 	<label>สกุล</label><p id=""></p>
                                 		</div>
                                 </div>
                                 <div class="row">
                                 <div class="col-sm-6">
                                 <label>วันที่กระทำความผิด</label><p id=""></p>
                                 </div>
                                 <div class="col-sm-6">
                                 <label>เวลา</label><p id=""></p>
                                 </div>
                                 </div>
                                 <div class="row">
                                 <div class="col-sm-12">
                                 <label>สถานที่</label><p id=""></p>
                                 </div>
                                 </div>
                                 <div class="row">
                                 <div class="col-sm-12">
                                 <label>คำอธิบายบริเวณที่เกิดเหตุ</label><p id=""></p>
                                 </div>
                                 </div>
                                 <div class="row">
                                 <div class="col-sm-12" >
                                 <label>ฐานความผิด</label><p id=""></p>
                                 </div>
                                 </div>
                                 <div class="row">
                                 <div class="col-sm-12">
                                 <label>ไฟล์หลักฐาน</label>
                                 </div>
                                 <br>  <br>  <br>  <br>  <br>
                                 </div>
                                        
                                
						</form>
						 </div>
                              </div> 
                        </div>
                         </div>
                         
                         
                         <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " style="max-width: 750px!important;" role="document" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLongTitle">แย้งการกระทำความผิด</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="" id="formadd2" method="post">
                        <div class="row">
                        <div class="col-sm-12">
                        <label>วันที่บันทึกหลักฐาน</label><p id=""></p>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-11">
                        <label>คำอธิบาย</label><textarea name="txtexplanation" rows="4" class="form-control" maxlength="100"></textarea>
                        </div>
                        <div class="col-sm-1">
                        </div>
                        </div>
                          <br>
                        <div class="row">
                        <div class="col-sm-12">
                        <label>แนบไฟล์หลักฐาน</label><input type="file" name="txtproofname" class="form-control-file border">
                        </div>
                        <br>  <br>  <br>  <br>  <br>
                        </div>
                        </form>
                        </div>
                         <div class="modal-footer">
                            <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                            <button name="btnSave2" id="btnSave2" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                        </div>
                        
                        
                        </div>
                        </div>
                        </div>
                       
                         
                         
                         
                        
            <!-- Modal ส่วน select -->
            
            

            <div class="card-body">
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
                                    <td width="10px" >1</td>
                                    <td id="committed_date"></td>
                                    <td width="10px" id="off_desc"></td>
                                    <td align="center"><i style="font-size:25px;color:blue" id="btnAdd" data-toggle="modal"class="far fa-file-alt btn-fw "></i></td>
                                    <td align="center"> <input type="checkbox" name="logo1" class="largerCheckbox" ></td>
                                    <td align="center"> <i style="font-size:25px;color:black" id="btnBdd" data-toggle="modal" class="far fa-file-archive btn-fw edit_data"></i></td>
                               
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
            	$("#oh_ID").html(data[0].oh_ID);
            	$("#committed_date").html(data[0].committed_date);
            	$("#off_desc").html(data[0].off_desc);
            
            	
            	
            	
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



//เพิ่มข้อมูล
$('#btnAdd').click(function() {
 	$('#formadd')[0].reset();
 	$("#msg1").empty();
     $('#exampleModalCenter').modal('show');
     //$('#formadd').attr('action', '<?php echo base_url(); ?>index.php/OffenseHead/showAll2');
 });

$('#btnBdd').click(function() {
 	$('#formadd2')[0].reset();
 	//$("#msg1").empty();
     $('#exampleModalCenter2').modal('show');
    $('#formadd2').attr('action', '<?php echo base_url(); ?>index.php/OffenseHead/addoffensehead');
 });

$('#btnSave2').click(function(){
	  var url = $('#formadd2').attr('action');
	  var data = $('#formadd2').serialize();
	  //validate form
	  var proof_ID = $('input[name=txtproofid]');
	  var explanation = $('input[name=txtexplanation]');
	  var proof_name =$('input[name=txtproofname]')
	  var result = '';

	  if(proof_ID.val()==''){
		  proof_ID.parent().parent().addClass('has-error');
	  }else{
		  proof_ID.parent().parent().removeClass('has-error');
	    result +='1';
	  } 
	  if(explanation.val()==''){
		  explanation.parent().parent().addClass('has-error');
	  }else{
		  explanation.parent().parent().removeClass('has-error');
	    result +='2';
	  }
	  if(proof_name.val()==''){
		  proof_name.parent().parent().addClass('has-error');
	  }else{
		  proof_name.parent().parent().removeClass('has-error');
	    result +='3';
	  }

	  if(result=='123'){
	    $.ajax({
	      type: 'ajax',
	      method: 'post',
	      url: url,
	      data: data,
	      async: false,
	      dataType: 'json',
	      success: function(response){
	        if(response.success){
	          $('#exampleModalCenter2').modal('hide');
	           //$(this).find('#formadd')[0].reset();
	           
	          $('#formadd2')[0].reset();   
	          $('.alert-success').html('บันทึกข้อมูลเรียบร้อย').fadeIn().delay(2000).fadeOut('slow');
	        //  $('#textkey').empty();      
	          //$('#msg1').empty();
	          //showAll();
	        }else{
	          alert('Error');
	        }
	      },
	      error: function(){
	        alert('id นี้ถูกใช้งานแล้ว');
	        $('#exampleModalCenter2').modal('hide');
	        $('#formadd2')[0].reset();
	        //$('#nav_sty')[0].reset();   
	        $('.alert-danger').html('id นี้ถูกใช้งานแล้ว').fadeIn().delay(2000).fadeOut('slow');
	        $('#msg1').empty();
	        //showAll();
	      }
	    });
	  }
	});
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
                    for (i=0; i<data.length; i++) {
                        html += '<tr>' +
                        	'<td>' + (i+1) + '</td>' +
                            '<td>' + data[i].committed_date + '</td>' +
                            '<td>' + data[i].off_desc + '</td>' +
                    
                            
                      
                            '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error: function() {
                 //alert('ไม่มีข้อมูล');
                }
            });
        }
    });
    </script>
</body>
</html>