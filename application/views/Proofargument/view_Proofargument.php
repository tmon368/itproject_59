<!doctype html>
<html lang="en">
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
    </style> 
</head>
<body>
  <meta charset="UTF-8">
  <div class="page-breadcrumb" id="nav_sty">
          <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">รายงานกระทำความผิด</a></li>
                        <li class="breadcrumb-item active" aria-current="page">รายการอุทธรณ์ความผิด</li>
                  </ol>
          </nav>
</div>

<div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
          <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span  class=""></span>&nbsp;รายงานกระทำความผิด</h6>
                </div>              
        <div class="card-body " id="card_1">
    


        </div> 
           <!-- Modal เพิ่มข้อมูล -->
 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มพุทธศักราช</h2>
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
          <label  class="col-sm-4"  for="validationCustom02">พุทธศักราช</label>&nbsp;
                    <input type="text" name="txtname"  class="form-control col-sm-7" maxlength="4" onkeyup="count_down(this);" required>
           </div><div>
       
</div>
</div>
          
      </center>
       
      <!------------------>
 </div>
     
  
      <div class="modal-footer ">
      <button  name="insert" type="reset" class="btn btn-secondary " data-dismiss="modal">ยกเลิก</button>
      <button name="btnSave" id="btnSave" type="button" class="btn btn-success">บันทึกข้อมูล</button>
            
       
      </div>
 </form>
    </div>
  </div>
</div>

<!--------------------------------->

<!-- Modal ส่วน edit -->

<!--------------------------------->

<div class="modal fade" id="del_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 650px!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle"><span><i 
        class="" 
        style="color:rgba(235,99,102,1.00)"></i></span>ใบสั่งการกระทำความผิด</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <div class="modal-body">

                            <!--ส่วนฟอร์มแก้ไขข้อมูล-->
                            <form action="" id="formdelete" method="post" class="needs-validation">
                                <center>
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group" id="nav_sty">
                                        <div class="input-group"><label for="">ชื่อ :&nbsp; </label><label id="std_fname"></label></div></div>
                                    </div>
                                 <div class="col-sm-6">
                                 <div class="form-group" id="nav_sty">
                                        <div class="input-group"><label for="">สกุล :&nbsp;</label><label id="std_lname"></label></div></div></div>   
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-4">
                                     <div class="form-group" id="nav_sty">
                                     <div class="input-group"><label for="">วันที่กระทำผิด:&nbsp;</label><label id="committed_date"></label> </div> </div></div>
                                          <div class="col-sm-8">
                                     <div class="form-group" id="nav_sty">
                                        <div class="input-group">
                                            <label for="">เวลา:&nbsp;</label>
                                            <label id="committed_time"></label>
                                      </div>
                                        </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                     <div class="form-group" id="nav_sty">
                                        <div class="input-group">
                                            <label for="">สถานที่:&nbsp;</label>
                                            <label id="place_name"></label>
                                      </div>
                                        </div>
                                         </div>  
                                    </div>
                                     <div class="row">
                                    <div class="col-sm-12">
                                     <div class="form-group" id="nav_sty">
                                        <div class="input-group">
                                            <label for="">คำอธิบายบริเวณที่เกิดเหต:&nbsp;</label>
                                            <label id="explanation"></label>
                                      </div>
                                        </div>
                                         </div>  
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                     <div class="form-group" id="nav_sty">
                                        <div class="input-group">
                                            <label for="">ฐานความผิด:&nbsp;</label>
                                            <label id="off_desc"></label>
                                      </div>
                                        </div>
                                         </div>  
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                     <div class="form-group" id="nav_sty">
                                        <div class="input-group">
                                            <label for="">ไฟล์หลักฐาน :&nbsp;</label>
                                            <label id="evidenre_name"></label>
                                      </div>
                                        </div>
                                         </div>  
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group" id="nav_sty">
                                    <div class="input-group">
                                    	<label>วันที่บันทึกหลักฐาน :&nbsp;</label>
                                    	<label id="proof_date"></label>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group" id="nav_sty">
                                    <div class="input-group">
                                    	<label>คำอธิบายการอุทธรณ์ความผิด :&nbsp;</label>
                                    	<label id="explanation"></label>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group" id="nav_sty">
                                    <div class="input-group">
                                    	<label>ไฟล์หลักฐานการอุทธรณ์ความผิด :&nbsp;</label>
                                    	<label id="proof_name"></label>
                                    </div>
                                    </div>
                                    </div>
                                    </div> 
                                </center>
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
                                                    <th>วันที่บันทึกหลักฐาน</th>
                                                    <th>ฐานความผิด</th>
                                                    <th>สถานะการแย้ง</th>
                                                      <th>รายละเอียด</th>
                                                        <th>หมายเหตุ</th>
                                                       
                                                  

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
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                             
              
                                            </tbody>
                                            
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
$("#proof_ID").change(function(){
        var active_track;
        $.ajax({
            url: "<?php echo base_url(); ?>index.php/Proofargument/selectstudentproofargument'",
            data: "proof_ID=" + $("#proof_ID").val(),
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
        $('#formadd').attr('action', '<?php echo base_url(); ?>index.php/holiday1/addholiday');
    });

    $('#btnSave').click(function(){
  var url = $('#formadd').attr('action');
  var data = $('#formadd').serialize();
  //validate form
  var id = $('input[name=txtid]');
  var name = $('input[name=txtname]');
  var result = '';
  
  if(id.val()==''){
    id.parent().parent().addClass('has-error');
  }else{
    id.parent().parent().removeClass('has-error');
    result +='1';
  }
  if(name.val()==''){
    name.parent().parent().addClass('has-error');
  }else{
    name.parent().parent().removeClass('has-error');
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
        //$('#nav_sty')[0].reset();   
        $('.alert-danger').html('id นี้ถูกใช้งานแล้ว').fadeIn().delay(2000).fadeOut('slow');
        $('#msg1').empty();
        showAll();
      }
    });
  }
});


    // แก้ไขข้อมูล
    $('#showdata').on('click', '.edit_data', function() {
        var id = $(this).attr('data');
        var popup = document.getElementById("editimage");
        $('#edit_file').modal('show');
     //  $('#formupdate').attr('action','<?php echo base_url() ?>index.php/OffenseHead/selectstudentoffensehead');
        $.ajax({
            type: 'ajax',
            method: 'get',
          //  url: '<?php echo base_url() ?>index.php/OffenseHead/selectstudentoffensehead',
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                $('input[name=txteditID]').val(data.oc_ID);
                $('input[name=txteditname]').val(data.oc_desc);

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
        url: '<?php echo base_url() ?>index.php/Proofargument/selectoffenseorder',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
            //console.log(data);
           // $('#showddel').html('"'+data.oh_year+'"'););
          // $("#std_fname").html("Hello");
           $("#std_fname").html(data.std_fname);
           $("#std_lname").html(data.std_lname);
           $('#committed_date').html(data.committed_date);
           $('#committed_time').html(data.committed_time);
           $('#explanation').html(data.explanation);
           $('#off_desc').html(data.off_desc);
           $('#place_name').html(data.place_name);
           $('#evidenre_name').html(data.evidenre_name);
           $('#proof_date').html(data.proof_date);
           $('#proof_name').html(data.proof_name);
           $('#explanation').html(data.explanation);
         
           //$("#std_fname").html(data.oh_ID); 
           // $('input[name=txtdelID]').val(data.hh_ID);
            
        },
          error: function(){
            alert('ไม่สามารถลบข้อมูล');
          }
        });
      });

      $('#btndel').click(function(){
      var url = $('#formdelete').attr('action');
      var data = $('#formdelete').serialize();
      var h_ID = $('input[name=txtdelID]');
      var result = '';
      
      if(h_ID.val()==''){
        h_ID.parent().parent().addClass('has-error');
      }else{
        h_ID.parent().parent().removeClass('has-error');
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
              $('#del_file').modal('hide');
              $('#formdelete')[0].reset();    
              $('.alert-danger').html('ลบข้อมูลเรียบร้อย').fadeIn().delay(2000).fadeOut('slow');
              //$('#formdelete').empty();
              showAll();
            }else{
              alert('Error');
            }
          },
          
        error: function(){
            //alert('id นี้ถูกใช้งานแล้ว');
            $('#del_file').modal('hide');
            $('#formdelete')[0].reset();    
            $('.alert-danger').html('ลบข้อมูลเรียบร้อย').fadeIn().delay(5000).fadeOut('slow');
            showAll();
          }
        });
      }
    });
/*
 	    $.ajax({
          type: 'ajax',
          url: '<?php echo site_url("OffenseHead/selectstudentoffensehead") ?>',
          dataType: 'json',
          success: function(data) {
              //alert(data[0].oc_ID);
              for (i = 0; i < data.length; i++) {
                  //alert(data[i].oc_ID+data[i].oc_desc);
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
      });
*/
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
      }
      */
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
      }
      */
     //function
    function showAll(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/Proofargument/selectstudentproofargument',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+(i+1)+'</td>'+
                  '<td>'+ data[i].proof_date +'</td>'+
                  '<td>'+ data[i].off_desc +'</td>'+
                  '<td align="center">'+ data[i].results +'</td>'+
                  '<td align="center"> <i style="font-size:25px;color:blue" class="far fa-file-alt btn-fw del_data" data=' + data[i].proof_ID + '></i></td>' +
                  '<td align="center"><a href="#"><i class="fas fa-edit  btn-fw edit_data" style="color:#47307b;" data='+ data[i].proof_ID +'></i></a>&nbsp;<a href="#"><i class="fas fa-trash-alt btn-fw del_data" style="color:rgba(235,99,102,1.00)" data='+ data[i].oh_ID +'></i></a></td>'
                  + 
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
  
</script>

</body>
</html>
