<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<center>
<strong><div  class="alert alert-success" role="alert" style="display: none;"></div></strong>
<strong><div  class="alert alert-danger" role="alert" style="display: none;"></div></strong>
<strong><div  class="alert alert-warning" role="alert" style="display: none;"></div></strong>
</center>
<head>
 
  <title>รายงานกระทำความผิด</title>
<style> 
        input.largerCheckbox { 
            width: 20px; 
            height: 20px; 
        } 
         .content {
            font-family: 'Sarabun', sans-serif;

        }
    </style> 
</head>
<body>
  <meta charset="UTF-8">
  <div class="page-breadcrumb" id="nav_sty">
          <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item">รายงานกระทำความผิด</li>
                      
                  </ol>
          </nav>
</div>

<div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
          <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span  class=""></span>&nbsp;รายงานกระทำความผิด</h6>
                </div>              
      
           <!-- Modal เพิ่มข้อมูล -->
 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle"><i
                                        class="fa fa-check-square-o"
                                        style="color:rgba(0 205 0)"></i></span>ยืนยัน</h2></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      
      <div class="modal-body">

      <!--ส่วนฟอร์มเพิ่มข้อมูล--> 
          
                  <form action="" id="formadd" method="post"  class="needs-validation" >
      <center>

      
  
        <div class="form-group" id="input_group_sty">
        <div class="input-group" >
          <h4 class="col-sm-12" >ต้องการบันทึกการรายงานตัวกระทำความผิด</h4>       
           </div></div>
          
      </center>
       
      <!------------------>
 </div>
     
  
      <div class="modal-footer ">
      <button  name="insert" type="reset" class="btn btn-secondary " data-dismiss="modal">ยกเลิก</button>
      <button name="btnSave" id="btnSave" type="button" class="btn btn-success">ยืนยัน</button>
            
       
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
                            <h2 class="modal-title" id="exampleModalLongTitle"><span><i></i></span>การอุทธรณ์ความผิด</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body content">
                           <form action="" id="formupdate" method="post" class="needs-validation">  
                           <center>
                           <div class="row">
                           <div class="col-sm-12">
                           <div class="form-group" id="nav_sty">
                                        <div class="input-group"><label class="">วันที่บันทึกหลักฐาน.  :&nbsp; </label><label><input type="text" style="background-color:transparent;border:0px;" name="date_register" value="<?php echo date('Y-m-d')?>"></label></div></div>
                           </div></div>
                          <div class="row">
                           <div class="col-sm-12">
                           <div class="form-group" id="nav_sty">
                                        <div class="input-group"><label for="">คำอธิบายการอุทธรณ์ความผิด  <label class="text-danger">*</label>:&nbsp; </label>
                                        <textarea name="" rows="5" class="form-control" maxlength="100"></textarea></div></div>
                          </div></div>
                          <div class="row">
                           <div class="col-sm-10">
                           <div class="form-group" id="nav_sty">
                                        <div class="input-group"><label for="">แนบไฟล์หลักฐานการอุทธรณ์ความผิด :&nbsp; </label> 
                                        <input type="text"  class="form-control" maxlength="100"></div></div>
                          </div></div>
                           
                           
                           </center>
                           </form> 
                        </div>
         <div class="modal-footer">
                            <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                            <button name="btnSave" id="btnSave" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                        </div>


                                                        </div>
                                                      </div>
                                                    </div>

<!-- Modal ส่วน edit -->

<!--------------------------------->

<div class="modal fade" id="del_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 650px!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle"><span><i style="color:rgba(235,99,102,1.00)"></i></span>ใบสั่งการกระทำความผิด</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <div class="modal-body content">

                            <!--ส่วนฟอร์มแก้ไขข้อมูล-->
                            <form action="" id="formdelete" method="get" class="needs-validation">
                            
                                <center>
                                    <div class="row">
                                    <div class="col-sm-4">
                                     <div class="form-group" id="nav_sty">
                                     <div class="input-group"><p >วันที่กระทำผิด:&nbsp;</p><p  id="committed_date"></p> </div> </div></div>
                                          <div class="col-sm-8">
                                     <div class="form-group" id="nav_sty">
                                        <div class="input-group">
                                            <p for="">เวลา:&nbsp;</p>
                                            <p id="committed_time"></p>
                                      </div>
                                        </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                     <div class="form-group" id="nav_sty">
                                        <div class="input-group">
                                            <p for="">สถานที่:&nbsp;</p>
                                            <p id="place_name"></p>
                                      </div>
                                        </div>
                                         </div>  
                                    </div>
                                     <div class="row">
                                    <div class="col-sm-12">
                                     <div class="form-group" id="nav_sty">
                                        <div class="input-group">
                                            <p for="">คำอธิบายบริเวณที่เกิดเหตุ:&nbsp;</p>
                                            <p id="explanation"></p>
                                      </div>
                                        </div>
                                         </div>  
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                     <div class="form-group" id="nav_sty">
                                        <div class="input-group">
                                            <p for="">ฐานความผิด:&nbsp;</p>
                                            <p id="off_desc"></p>
                                      </div>
                                        </div>
                                         </div>  
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                     <div class="form-group" id="nav_sty">
                                        <div class="input-group">
                                            <p for="">ไฟล์หลักฐาน :&nbsp;</p>
                                            <p id="evidenre_name"></p>
                                      </div>
                                        </div>
                                         </div>  
                                    </div>
                                   
                                </center>
                               </form>
                        </div>
      

      <!--ข้อความยืนยันการลบข้อมูล-->
      <form action="" id="formdelete" method="post"  class="needs-validation" >
        <div class="modal-body" id="showdel">
        <center >
          <label id="showddel"></label>
        <input type="hidden" name="txtdelID" > 
        
      </center>
       
      <!------------------>
 </div>

 </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                               
 <!-- Modal ส่วน select -->

        <div class="card-body">
      <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="style_table" class="table table-hover">
                                            <thead>
                                                <tr>

                                                    <th>ลำดับที่</th>
                                                    <th>วันที่กระทำความผิด</th>
                                                    <th>ฐานความผิด</th>
                                                    <th>รายละเอียด</th>
                                                      <th>ยืนยันการกระทำผิด</th>
                                                        <th>ส่งหลักฐานอุทธรณ์</th>
                                                       
                                                  

                                                </tr>
                                            </thead>
                                            <tbody id="showdata">

                                                <tr>

                                                    <td width="10px"></td>
                                                    <td></td>
                                                    <td width="10px">
                             <!--edit_file  del_file  -->
                                        <!--	<a href="<?php echo base_url().'index.php/offensecate/edit?id='.$rec->oc_ID;?>" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>
                                                    <a href="<?php echo base_url().'index.php/offensecate/edit?id='.$rec->oc_ID;?>" data-toggle="modal" data-target="#edit_file" id="<?php echo $rec->oc_ID; ?>"><i class="fas fa-edit" style="color:#47307b;">แก้ไข</i></a>&nbsp;
                                                    <a href="<?php echo base_url().'index.php/offensecate/edit?id='.$rec->oc_ID;?>" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)">ลบ</i></a>-->

                                        <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->
                                        <!-- <form action="<?php echo base_url(); ?>index.php/offensecate/edit" method="post" id="editform"  class="needs-validation" >  -->
                                          <!------------------>
                                                    </td>
                                               

                                                </tr>
                                             
              
                                            </tbody>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                            <td></td>
                                                      <td>
                                     <div class="card-body " id="card_1">
        							 <button type="button" id="text1" style="display:none" class="btn btn-success btn-fw" data-toggle="modal" >
                  					 <i"></i>ยืนยัน </button>
       								 </div></td>
           
                                                         
                                        </table>
                                       
                                    </div>
                                </div>

      </div>
      </div>
</div>


<script>
  /*
    $(document).ready(function(){
$("#edit_file").modal("show");

    });*/
    $(function(){

  
showAll();
$("#oh_ID").change(function(){
        var active_track;
        $.ajax({
            url: "<?php echo base_url(); ?>index.php/OffenseHead/selectstudentoffensehead'",
            data: "oh_ID=" + $("#oh_ID").val(),
            type: "POST",
            async:false,
            success: function(data, status) { 
               var result = data.split(",");
               active_track = result[0];
               var msg = result[1];
              // alert(msg)
               $("#msg1").html(msg);                                                                               

            },
            error: function(xhr, status, exception) { alert(status); }
        });
        return active_track;
    });
//Add New

$('#btnAdd').click(function() {
        $('#exampleModalCenter').modal('show');
        //$('#formadd').attr('action', '<?php echo base_url(); ?>index.php/holiday1/addholiday');
    });

    $('#btnSave').click(function(){
  var url = $('#formadd').attr('action');
  var data = $('#formadd').serialize();
  //validate form
  var id = $('input[name=txtid]');
  var result = '';
  
  if(id.val()==''){
	  id.parent().parent().addClass('has-error');
  }else{
	  id.parent().parent().removeClass('has-error');
    result +='1';
  }
  if(result=='1'){
    $.ajax({
      type: 'ajax',
      method: 'post',
      url: url,
      data: data,
      async: false,
      dataType: 'json',
      success: function(response){
        if(response.success){
          $('#exampleModalCenter').modal('hide');
           //$(this).find('#formadd')[0].reset();
           
          $('#formadd')[0].reset();   
          $('.alert-success').html('บันทึกข้อมูลเรียบร้อย').fadeIn().delay(2000).fadeOut('slow');
        //  $('#textkey').empty();      
          //$('#msg1').empty();
          showAll();
        }else{
          alert('Error');
        }
      },
      error: function(){
        alert('id นี้ถูกใช้งานแล้ว');
        $('#exampleModalCenter').modal('hide');
        $('#formadd')[0].reset();
        $('#nav_sty')[0].reset();   
       // $('.alert-danger').html('id นี้ถูกใช้งานแล้ว').fadeIn().delay(2000).fadeOut('slow');
        $('#msg1').empty();
        showAll();
      }
    });
  }
});


    // แก้ไขข้อมูล
    $('#showdata').on('click', '.edit_data', function() {
        var date = new Date();
        date_off = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();

      // alert(id)
       $('#edit_file').modal('show');
       //$('#formupdate').attr('action','<?php echo base_url() ?>index.php/OffenseHead/selectstudentoffensehead');
         $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/OffenseHead/selectoffenseorder',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
        	
             

            },
            error: function() {
                alert('ไม่สามารถแก้ไขข้อมูล');
            }
        });
    });
    
    $('#btnedit').click(function(){
		var url = $('#formupdate').attr('action');
		var data = $('#formupdate').serialize();
		//validate form
		var oc_ID = $('input[name=txteditID]');
		var oc_desc = $('input[name=txteditname]');
		var result = '';
		
		if(oc_ID.val()==''){
			oc_ID.parent().parent().addClass('has-error');
		}else{
			oc_ID.parent().parent().removeClass('has-error');
			result +='1';
		}
		if(oc_desc.val()==''){
			oc_desc.parent().parent().addClass('has-error');
		}else{
			oc_desc.parent().parent().removeClass('has-error');
			result +='2';
		}
		

		
		if(result=='12'){
			$.ajax({
				type: 'ajax',
				method: 'post',
				url: url,
				data: data,
				async: false,
				dataType: 'json',
				success: function(response){
					if(response.success){
						$('#edit_file').modal('hide');
						$('#formupdate')[0].reset();		
						$('.alert-warning').html('แก้ไขข้อมูลเรียบร้อย').fadeIn().delay(2000).fadeOut('slow');
						showAll();
					}else{
						alert('Error');
					}
				},
				
				error: function(){
					//alert('id นี้ถูกใช้งานแล้ว');
					$('#edit_file').modal('hide');
					$('#formupdate')[0].reset();		
					$('.alert-danger').html('แก้ไขเรียบร้อย').fadeIn().delay(2000).fadeOut('slow');
					showAll();
				}
			});
		}
	});

  

    //delete- 
    $('#showdata').on('click', '.del_data', function(){
      var id = $(this).attr('data');
    //  alert(id)
      $('#del_file').modal('show');
      //prevent previous handler - unbind()
       //$('#formdelete').attr('action', '<?php echo base_url() ?>index.php/holiday1/deleteholiday');
        $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/OffenseHead/selectoffenseorder',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
           //console.log(data);
           //$('#showddel').html('"'+data.offensestd_ID+'"');
          // $("#std_fname").html("Hello");
           $("#std_fname").html(data.std_fname);
           $("#std_lname").html(data.std_lname);
           $('#committed_date').html(data.committed_date);
           $('#committed_time').html(data.committed_time);
           $('#explanation').html(data.explanation);
           $('#off_desc').html(data.off_desc);
           $('#place_name').html(data.place_name);
           $('#evidenre_name').html(data.evidenre_name);
    
           $('.content').html(html);
           //$("#std_fname").html(data.oh_ID); 
           // $('input[name=txtdelID]').val(data.hh_ID);
            
        },
          error: function(){
            alert('ไม่สามารถลบข้อมูล');
          }
        });
      });

    
   
/*
 	    $.ajax({
          type: 'ajax',
          url: '<?php echo site_url("OffenseHead/selectstudentoffensehead") ?>',
          method: 'get',
          data: {id: id},
          async: false,
          dataType: 'json',
          success: function(data) {
              //alert(data[0].oc_ID);
              for (i = 0; i < data.length; i++) {
                  alert(data[i].oc_ID+data[i].oc_desc);
                  $('#std_fname').append('<label value="' + data[i].std_fname + '">' + data[i].std_fname + '</label>');
                  $('#std_lname').append('<labelvalue="' + data[i].std_lname + '">' + data[i].std_lname + '</label>');
                  $('#committed_time').append('<label value="' + data[i].committed_time + '">' + data[i].committed_time + '</label>');
                  $('#committed_date').append('<label value="' + data[i].committed_date + '">' + data[i].committed_date + '</label>');
                  $('#off_desc').append('<label value="' + data[i].off_desc + '">' + data[i].off_desc + '</label>');
                  $('#place_name').append('<label value="' + data[i].place_name + '">' + data[i].place_name + '</label>');
                  $('#explanation').append('<label value="' + data[i].explanation + '">' + data[i].explanation + '</label>');
                  $('#evidenre_name').append('<label value="' + data[i].evidenre_name + '">' + data[i].evidenre_name + '</label>');
                 // $('#txteditoc').append('<option value="' + data[i].oc_ID + '">' + data[i].oc_desc + '</option>');
                 
              }
          }
      });*/

/*
      function selectstudentoffensehead() {
          $.ajax({
              type: 'ajax',
              url: '<?php echo base_url() ?>index.php/OffenseHead/selectstudentoffensehead',
              async: false,
              dataType: 'json',
              success: function(data) {
            	$("#std_fname").html(data[0].std_fname);
              	$("#std_lname").html(data[0].std_lname);
              	$("#committed_date").html(data[0].committed_date);
              	$("#committed_time").html(data[0].committed_time);
              	$("#place_name").html(data[0].place_name); 
              	$("#explanation").html(data[0].explanation);
              	$("#off_desc").html(data[0].off_desc);      
              	$("#evidenre_name").html(data[0].evidenre_name);    
              	

              },
              error: function() {
                  alert('ไม่มีข้อมูล');
              }
          });
      }*/
/*
      function selectoffenseorder() {
          $.ajax({
              type: 'ajax',
              url: '<?php echo base_url() ?>index.php/OffenseHead/selectoffenseorder',
              async: false,
              dataType: 'json',
              success: function(data) {
            	$("#std_fname").html(data[0].std_fname);
            	$("#std_lname").html(data[0].std_lname);
            	$("#committed_date").html(data[0].committed_date);
            	$("#committed_time	").html(data[0].committed_time	);
            	$("#place_name").html(data[0].place_name); 
              	$("#explanation ").html(data[0].explanation);
              	$("#off_desc").html(data[0].off_desc); 
             	$("#evidenre_name").html(data[0].evidenre_name);     
        
             	

              },
              error: function() {
                  alert('ไม่มีข้อมูล');
              }
          });
      }*/
     //function
      function showAll(){
          $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/OffenseHead/selectstudentoffensehead',
            async: false,
            dataType: 'json',
            success: function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                html +='<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td>'+ data[i].committed_date +'</td>'+
                      '<td>'+ data[i].off_desc +'</td>'+
                      '<td align="center"> <i style="color:rgba(67, 135, 254);font-size:1.5rem;" class="fa fa-file-text btn-fw del_data" data=' + data[i].offensestd_ID  + '></i></td>' +
                       '<td align="center"><input type="checkbox"  id="checkbox1" onclick="show_text(this);check_click();"  class="largerCheckbox" ></td>'+
                      '<td align="center"> <i  style="color:rgba(67, 135, 254);font-size:1.5rem;" id="button1" value="button"disabled="disabled" class="far fa-file-archive btn-fw edit_data" data=' + data[i].offensestd_ID  + '></i></td>' +
                      '</tr>';
              }
              $('#showdata').html(html);
            },
            error: function(){
              alert('Could not get Data from Database');
            }
          });
        }
      });

      function show_text(obj)
      {

      if(obj.checked)
      {
      document.getElementById("text1").style.display="";
      }
      else
      {
      document.getElementById("text1").style.display="none";
      }

      }

      function check_click()
      {
      if(document.getElementById('checkbox1').checked==true)
      {
      document.getElementById('button1').disabled = true;
      }
      else
      {
      document.getElementById('button1').disabled = false;
      }
      }
  
</script>

</body>
</html>
