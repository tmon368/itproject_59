<!doctype html>
<html lang="en">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<div class="alert alert-success" style="display: none;">
    
  </div>
<head>

  <title>วันหยุด admin</title>

</head>
<body>
  <meta charset="UTF-8">
  
<div class="page-breadcrumb" id="nav_sty">
          <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">จัดการข้อมูลพื้นฐาน</a></li>
                        <li class="breadcrumb-item active" aria-current="page">วันหยุด</li>
                  </ol>
          </nav> 
</div>

<div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
					<div class="card-header" id="card_2">
              			<h6 class="m-0 text-primary"><span  class="fas fa-user-alt"></span>&nbsp;วันหยุด</h6>
            		</div>
            		<?php  
echo '<center><label class="text-danger">'.$this->session->flashdata
("message").'</label></center>';  

            ?>
           		
				<div class="card-body" id="card_1">
				
				<button type="button" id="btnAdd" class="btn btn-inverse-primary btn-fw" data-toggle="modal" >
									<i class="fas fa-user-plus"></i>เพิ่มวันหยุด
				</button>
				&nbsp;



				</div>
					 <!-- Modal เพิ่มข้อมูล -->
 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มวันหยุด</h2>
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
					<label  class="col-sm-4" for="validationCustom02">วันที่หยุด</label>&nbsp;
                    <input type="date" name="txtdate"  class="form-control col-sm-5"  maxlength="50" onkeyup="count_down(this);" required>
        </div>
</div>
        <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label  class="col-sm-4"  for="validationCustom02">ชื่อวันหยุด</label>&nbsp;
                    <input type="textarea" name="txtdescrip"  class="form-control" maxlength="50" onkeyup="count_down(this);" required>
           </div>
        	<div class="form-group sty_a">
        	<span id="count3">0</span>
        	<span>/</span>
        	<span id="count4" style="color:#6699ff;">50</span>
      </div>
           <!-- Alert for the number of characters-->
      <script>
          function count_down(obj) {

              document.getElementById('count3').innerHTML = obj.value.length;
              var element = document.getElementById('count4');

              element.innerHTML = 50 - obj.value.length;
              if (50 - obj.value.length == 0) {
                  element.style.color = 'red';

              } else {
                  element.style.color = '#6699ff';
              }
          }
      </script>
</div>
           <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label  class="col-sm-4" for="validationCustom02">ประเภทวันหยุด</label>&nbsp;
                <select class="form-control" name="addtype">
                  <option  value="วันหยุดประจำปี" class="form-control">วันหยุดประจำปี</option>
                  <option  value="วันหยุดที่มีการเปลี่ยนแปลงแต่ละปี" class="form-control">วันหยุดที่มีการเปลี่ยนแปลงแต่ละปี</option>
                </select>
				</div></div>
			</center>
			 
		  <!------------------>
 </div>
     
   
      <div class="modal-footer">
      <button  name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      <button  name="insert" type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
            
       
      </div>
 </form>
    </div>
  </div>
</div>


<!--------------------------------->


<!-- Modal ส่วน edit -->


 <div class="modal fade" id="edit_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
        <div class="modal-header">
    <h2 class="modal-title" id="exampleModalLongTitle"><span><i class="fas fa-edit" style="color:#47307b;"></i></span>แก้ไขข้อมูล</h2>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
             </button>
               </div>
       <div class="modal-body">

                   <!--ฟอร์มแก้ไขข้อมูล-->
     <form action="" id="formupdate" method="post"  class="needs-validation" >
     <center>


      
<div class="form-group" id="input_group_sty">
<div class="input-group" >
<label  class="col-sm-3" for="validationCustom02">รหัสวันหยุด</label>&nbsp;
            <input type="text" name="txteditid"  class="form-control col-sm-2"  maxlength="50" onkeyup="count_down(this);" required>

  <label  class="col-sm-2" for="validationCustom02">วันที่หยุด</label>&nbsp;
            <input type="date" name="txtdate"  class="form-control col-sm"  maxlength="50" required>
</div>
</div>
<div class="form-group" id="input_group_sty">
<div class="input-group" >
<label  class="col-sm-3" for="validationCustom02">ชื่อวันหยุด</label>&nbsp;
            <input type="textarea" name="txtdescrip"  class="form-control" maxlength="50" onkeyup="count_down(this);" required>
   </div>
  <div class="form-group sty_a">
  <span id="count3">0</span>
  <span>/</span>
  <span id="count4" style="color:#6699ff;">50</span>
</div>
   <!-- Alert for the number of characters-->
<script>
  function count_down(obj) {

      document.getElementById('count3').innerHTML = obj.value.length;
      var element = document.getElementById('count4');

      element.innerHTML = 50 - obj.value.length;
      if (50 - obj.value.length == 0) {
          element.style.color = 'red';

      } else {
          element.style.color = '#6699ff';
      }
  }
</script>
</div>
   <div class="form-group" id="input_group_sty">
<div class="input-group" >
  <label  class="col-sm-3" for="validationCustom02">ประเภทวันหยุด</label>&nbsp;
        <select class="form-control" name="addtype">
          <option  value="วันหยุดประจำปี" class="form-control">วันหยุดประจำปี</option>
          <option  value="วันหยุดที่มีการเปลี่ยนแปลงแต่ละปี" class="form-control">วันหยุดที่มีการเปลี่ยนแปลงแต่ละปี</option>
        </select>
</div></div>
</center>

       
      <!------------------>
 </div>
     
   
      <div class="modal-footer">
      <button  name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      <button  name="insert" type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
            
       
      </div>
 </form>
                                                        </div>
                                                      </div>
                                                    </div>









<!--------------------------------->




 <!-- Modal ส่วน del -->
                                    
                                    <div class="modal fade" id="del_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h2 class="modal-title" id="exampleModalLongTitle"><span><i class="fa fa-exclamation-triangle" style="color:rgba(235,99,102,1.00)"></i></span>ลบข้อมูล</h2>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body" id="showdel">

                                                          <!--ข้อความยืนยันการลบข้อมูล-->
                                                          <form action="" id="formdelete" method="post"  class="needs-validation" >
      <center >
          <label id="showddel"></label>
        <input type="hidden" name="txtdelID" > 
        
      </center>
       
      <!------------------>
 </div>
     
   
      <div class="modal-footer">
      <button  name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      <button  name="insert" type="submit" class="btn btn-danger btn-fw">ลบ</button>
            
       
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

                                                    <th>#</th>
                                                    <th>วันที่หยุด</th>
                                                    <th>ชื่อวันหยุด</th>
                                                    <th>ประเภทวันหยุด</th>
                                                    <th>จัดการ</th>

                                                </tr>
                                            </thead>
                                            <tbody id="showdata">

                                                <tr>

                                                    <td width="10px"></td>
                                                    <td></td>
                                                    <td width="10px">
                                                    
														<!--edit_file  del_file  -->
													<!--	<a href="<?php echo base_url().'index.php/holiday/edit?id='.$rec->h_ID;?>" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>
                                                    <a href="<?php echo base_url().'index.php/holiday/edit?id='.$rec->h_ID;?>" data-toggle="modal" data-target="#edit_file" id="<?php echo $rec->holiday_ID; ?>"><i class="fas fa-edit" style="color:#47307b;">แก้ไข</i></a>&nbsp;
                                                    <a href="<?php echo base_url().'index.php/holiday/edit?id='.$rec->h_ID;?>" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)">ลบ</i></a>-->
			
                                    <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->

                                   


                                      

 
 

	
				
			
               	
                                     <!-- <form action="<?php echo base_url(); ?>index.php/holiday/edit" method="post" id="editform"  class="needs-validation" >  -->
                                   
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
  /*
    $(document).ready(function(){
$("#edit_file").modal("show");

    });*/
  $(function(){

  
    showAll();

    //Add New

    $('#btnAdd').click(function(){
      $('#exampleModalCenter').modal('show');
      $('#formadd').attr('action', '<?php echo base_url(); ?>index.php/holiday/addholiday');
    });


    $('#btnSave').click(function(){
      var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();
      //validate form
      var empoyeeName = $('input[name=txtEmployeeName]');
      var address = $('textarea[name=txtAddress]');
      var result = '';
      if(empoyeeName.val()==''){
        empoyeeName.parent().parent().addClass('has-error');
      }else{
        empoyeeName.parent().parent().removeClass('has-error');
        result +='1';
      }
      if(address.val()==''){
        address.parent().parent().addClass('has-error');
      }else{
        address.parent().parent().removeClass('has-error');
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
              $('#myModal').modal('hide');
              $('#myForm')[0].reset();
              if(response.type=='add'){
                var type = 'added'
              }else if(response.type=='update'){
                var type ="updated"
              }
              $('.alert-success').html('Employee '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
              showAllEmployee();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not add data');
          }
        });
      }
    });

    //edit

 $('#showdata').on('click', '.fa-edit', function(){
      var id = $(this).attr('data');
      var popup = document.getElementById("editimage");
      $('#edit_file').modal('show');

     // $('#exampleModalCenter').find('.modal-title').text('แก้ไขข้อมูล');
      $('#formupdate').attr('action', '<?php echo base_url() ?>index.php/holiday/updateholiday');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/holiday/editholiday',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteditid]').val(data.h_ID);
          $('input[name=txtdate]').val(data.h_date);
          $('input[name=txtdescrip]').val(data.description);
          $('input[name=addtype]').val(data.h_type);

        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    });

   

    //delete- 
    $('#showdata').on('click', '.fa-trash-alt', function(){
      var id = $(this).attr('data');
      $('#del_file').modal('show');
      //prevent previous handler - unbind()
       $('#formdelete').attr('action', '<?php echo base_url() ?>index.php/holiday/deleteholiday');
        $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/holiday/editholiday',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
            $('#showddel').html('ต้องการลบวันหยุด   "'+data.holiday_name+'"');  
            $('input[name=txtdelID]').val(data.h_ID);
        },
          error: function(){
            alert('Error deleting');
          }
        });
      });
 



    //function
    function showAll(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/holiday/showAll',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].h_ID+'</td>'+
                  '<td>'+data[i].h_date+'</td>'+
                  '<td>'+data[i].description+'</td>'+
                  '<td>'+data[i].h_type+'</td>'+
 '<td>'+
                    '<a href="javascript:;"  ><i class="fas fa-edit" style="color:#47307b;" data="'+data[i].h_ID+'"></i></a>'+
                    '<a href="javascript:;" ><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)" data="'+data[i].h_ID+'"></i></a>'+
                  '</td>'+
                 
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