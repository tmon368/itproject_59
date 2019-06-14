<!doctype html>
<html lang="en">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<div class="alert alert-success" style="display: none;">
    
  </div>
<head>

  <title>ฐานความผิด admin</title>

</head>
<body>
  <meta charset="UTF-8">
  
<div class="page-breadcrumb" id="nav_sty">
          <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">จัดการข้อมูลพื้นฐาน</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ฐานความผิด</li>
                  </ol>
          </nav>
</div>

<div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
					<div class="card-header" id="card_2">
              			<h6 class="m-0 text-primary"><span><i class="fas fa-ban"></i></span>&nbsp;ฐานความผิด</h6>
            		</div>
            		<?php  
echo '<center><label class="text-danger">'.$this->session->flashdata
("message").'</label></center>';  

            ?>
           		
				<div class="card-body" id="card_1">
				
				<button type="button" id="btnAdd" class="btn btn-inverse-primary btn-fw" data-toggle="modal" >
									<span><i class="fas fa-ban"></i></span>เพิ่มฐานความผิด
				</button>
				&nbsp;



				</div>
					<!-- Modal เพิ่มข้อมูล -->
 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มฐานความผิด</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      
      <div class="modal-body">

		  <!--ส่วนฟอร์มเพิ่มข้อมูล-->
		      
           <form action="" id="formadd" method="post"  class="needs-validation" >
		  <center>
		  <div class="form-group" id="input_group_sty" >
				<div class="input-group" >
				
					<label for="validationCustom02..'">รหัสหมวดความผิด  </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					<div class="col-lg-3" >
					<select name="txtfy"class="form-control"  required >
					<option value ="6">6</option>
					<option value ="8">8</option>
					<option value ="9">9</option>
					<option value ="11">11</option>
					</select>
                   
      </div></div></div>
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
				
						<label for="validationCustom01..'">รหัสฐานความผิด  </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;
						<div class="col-lg-4">
                    <input type="text" name="txtID"  class="form-control"  maxlength="3" onkeyup="count_down_id(this);" required>
			
			
			
			
			
				</div></div></div>
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
				
						<label for="validationCustom02..'">ชื่อฐานความผิด  </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="col-lg-9">
                    <input type="text" name="txtname"  class="form-control"  maxlength="100" onkeyup="count_downname(this);" required>
			
		
		   
			
			
				
				</div></div></div>
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
				
						<label for="validationCustom02..'">คะแนนที่หัก  </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="col-lg-3">
                    <input type="text" name="txtpoint"  class="form-control"  maxlength="2" onkeyup="count_downpoint(this);" required>
			
		
			
				
				</div>
				
				
				
			
				
				
				
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

                   <!--ส่วนฟอร์มแก้ไขข้อมูล-->
     <form action="" id="formupdate" method="post"  class="needs-validation" >
      <center>
      <div class="form-group" id="input_group_sty" >
				<div class="input-group" >
				
					<label for="validationCustom02..'">รหัสหมวดความผิด  </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					<div class="col-lg-3" >
					<select name="txteditfy"class="form-control"  required >
					<option value ="6">6</option>
					<option value ="8">8</option>
					<option value ="9">9</option>
					<option value ="11">11</option>
					</select>
					
                   
      </div></div></div>
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
				
						<label for="validationCustom01..'">รหัสฐานความผิด  </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;
						<div class="col-lg-4">
                    <input type="text" name="txteditID"  class="form-control"  maxlength="3" onkeyup="count_down_editid(this);" required>
			
			
			
			
			
				</div></div></div>
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
				
						<label for="validationCustom02..'">ชื่อฐานความผิด  </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="col-lg-9">
                    <input type="text" name="txteditname"  class="form-control"  maxlength="100" onkeyup="count_downeditname(this);" required>
			
		
		   
			
			
				
				</div></div></div>
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
				
						<label for="validationCustom02..'">คะแนนที่หัก  </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="col-lg-3">
                    <input type="text" name="txteditpoint"  class="form-control"  maxlength="2" onkeyup="count_downeditpoint(this);" required>
			
		
			
				
				</div>
				
     
        
      </center>
       
      <!------------------>
 </div>
     
   
      <div class="modal-footer">
      <button  name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      <button  name="insert" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
            
       
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
                                                          <!--ส่วนฟอร์มลบข้อมูล-->
                                                          <form action="" id="formdelete" method="post"  class="needs-validation" >
                                                          <div class="modal-body" id="showdel">

                                                          <!--ข้อความยืนยันการลบข้อมูล-->
                                                          
      <center >
          <div id="showddel"></div>
        <input  type="hidden" name="txtdelID" > 
        
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

                                                    <th>รหัสหมวดความผิด</th>
                                                    <th>รหัสฐานความผิด</th>
                                                    <th>ชื่อฐานความผิด</th>
                                                    <th>คะแนนที่หัก</th>
													<th>จัดการ</th>

                                                </tr>
                                            </thead>
                                            <tbody id="showdata">

                                                <tr>

                                                    <td width="10px"></td>
                                                    <td></td>
                                                    <td width="10px">
                                                    
														<!--edit_file  del_file  -->
													<!--	<a href="<?php echo base_url().'index.php/offense/edit?id='.$rec->off_ID;?>" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>
                                                    <a href="<?php echo base_url().'index.php/offense/edit?id='.$rec->off_ID;?>" data-toggle="modal" data-target="#edit_file" id="<?php echo $rec->off_ID; ?>"><i class="fas fa-edit" style="color:#47307b;">แก้ไข</i></a>&nbsp;
                                                    <a href="<?php echo base_url().'index.php/offense/edit?id='.$rec->off_ID;?>" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)">ลบ</i></a>-->
			
                                    <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->

                                   


                                      

 
 

	
				
			
               	
                                     <!-- <form action="<?php echo base_url(); ?>index.php/offense/edit" method="post" id="editform"  class="needs-validation" >  -->
                                   
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
 
  $(function(){

  
    showAll();

    //เพิ่มข้อมูล

    $('#btnAdd').click(function(){
      $('#exampleModalCenter').modal('show');
      $('#formadd').attr('action', '<?php echo base_url(); ?>index.php/offense/addoffense');
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
            alert('ไม่สามารถเพิ่มข้อมูล');
          }
        });
      }
    });

    //แก้ไขข้อมูล
 $('#showdata').on('click', '.fa-edit', function(){
      var id = $(this).attr('data');
      var popup = document.getElementById("editimage");
      $('#edit_file').modal('show');
      $('#formupdate').attr('action', '<?php echo base_url() ?>index.php/offense/updateoffense');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/offense/editoffense',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteditID]').val(data.off_ID);
          $('input[name=txteditname]').val(data.off_desc);
          $('input[name=txteditpoint]').val(data.point);
          $('input[name=txteditfy]').val(data.oc_ID);

        },
        error: function(){
          alert('ไม่สามารถแก้ไขข้อมูล');
        }
      });
    });

   

    //ลบข้อมูล
    $('#showdata').on('click', '.fa-trash-alt', function(){
      var id = $(this).attr('data');
      $('#del_file').modal('show');
      //prevent previous handler - unbind()
       $('#formdelete').attr('action', '<?php echo base_url() ?>index.php/offense/deleteoffense');
        $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/offense/editoffense',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
            $('#showddel').html('ต้องการลบฐานความผิด   "'+data.off_desc+'"');  
            $('input[name=txtdelID]').val(data.off_ID);
        },
          error: function(){
            alert('ไม่สามารถลบข้อมูล');
          }
        });
      });
 



    //แสดงข้อมูล
    function showAll(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/offense/showAll',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
            	  '<td>'+data[i].oc_ID+'</td>'+
                  '<td>'+data[i].off_ID+'</td>'+
                  '<td>'+data[i].off_desc+'</td>'+
                  '<td>'+data[i].point+'</td>'+
                  
                

                  '<td>'+
                    '<a href="javascript:;"  ><i class="fas fa-edit" style="color:#47307b;" data="'+data[i].off_ID+'"></i></a>'+
                    '<a href="javascript:;" ><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)" data="'+data[i].off_ID+'"></i></a>'+
                  '</td>'+
                  '</tr>';
          }
          $('#showdata').html(html);
        },
        error: function(){
          alert('ไม่มีข้อมูล');
        }
      });
    }
  });
</script>




















</body>

</html>