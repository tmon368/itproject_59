<!doctype html>
<html lang="en">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<div class="alert alert-success" style="display: none;">
    
  </div>
<head>

  <!-- <title>หมวดความผิด admin</title>-->
 
</head>
<body>
  <meta charset="UTF-8">
  
<div class="page-breadcrumb" id="nav_sty">
          <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">จัดการข้อมูลพื้นฐาน</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ประเภทหอพัก</li>
                  </ol>
          </nav>
</div>

<div class="col-lg-8 grid-margin stretch-card">
            <div class="card shadow mb-4">
					<div class="card-header" id="card_2">
              			<h6 class="m-0 text-primary"><span><i class="fas fa-layer-group"></i></span>&nbsp;ประเภทหอพัก</h6>
            		</div>
            		<?php  
echo '<center><label class="text-danger">'.$this->session->flashdata
("message").'</label></center>';  

            ?>
           		
				<div class="card-body" id="card_1">
				
				<button type="button" id="btnAdd" class="btn btn-inverse-primary btn-fw" data-toggle="modal" >
									<span><i class="fas fa-layer-group"></i></span>เพิ่มประเภทหอพัก
				</button>
				&nbsp;



				</div>
					<!-- Modal เพิ่มข้อมูล -->
 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มประเภทหอพัก<h2>
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
				
					<label for="validationCustom01..'">รหัสประเภทหอพัก </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;
					<div class="col-lg-3">
                    <input type="text" name="txtID"  class="form-control"  maxlength="1" onkeyup="count_down_id(this);" required>
			
				<div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">1</span>
      </div></div></div>
      <!-- Alert for the number of characters-->
      <script>
          function count_down_id(obj) {

              document.getElementById('count1').innerHTML = obj.value.length;
              var element = document.getElementById('count2');

              element.innerHTML = 1 - obj.value.length;
              if (4 - obj.value.length == 0) {
                  element.style.color = 'red';

              } else {
                  element.style.color = '#6699ff';
              }
          }
      </script>
				
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
				
						<label for="validationCustom02..'">ประเภทหอพัก </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;
                    <input type="text" name="txtname"  class="form-control"  maxlength="30" onkeyup="count_downname(this);" required>
			
			</div>
			
			
				<div class="form-group sty_a">
        <span id="count3">0</span>
        <span>/</span>
        <span id="count4" style="color:#6699ff;">30</span>
      </div>
      <!-- Alert for the number of characters-->
      <script>
          function count_downname(obj) {

              document.getElementById('count3').innerHTML = obj.value.length;
              var element = document.getElementById('count4');

              element.innerHTML = 30 - obj.value.length;
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
				
					<label for="validationCustom01">รหัสประเภทหอพัก </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;
					<div class="col-lg-3">
                    <input type="text" name="txteditID"  class="form-control"  maxlength="1" onkeyup="count_down_editid(this);" required>
				
				<div class="form-group sty_a">
        <span id="count7">0</span>
        <span>/</span>
        <span id="count8" style="color:#6699ff;">1</span>
      </div></div></div>

      <!-- Alert for the number of characters-->
      <script>
          function count_down_editid(obj) {

              document.getElementById('count7').innerHTML = obj.value.length;
              var element = document.getElementById('count8');

              element.innerHTML = 1 - obj.value.length;
              if (2 - obj.value.length == 0) {
                  element.style.color = 'red';

              } else {
                  element.style.color = '#6699ff';
              }
          }
      </script>
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="validationCustom02">ชื่อหมวดความผิด</label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="txteditname"  class="form-control"  maxlength="30" onkeyup="count_down_editname(this);" required>
				</div>
				<div class="form-group sty_a">
        <span id="count9">0</span>
        <span>/</span>
        <span id="count10" style="color:#6699ff;">30</span>
      </div>

      <!-- Alert for the number of characters-->
      <script>
          function count_down_editname(obj) {

              document.getElementById('count9').innerHTML = obj.value.length;
              var element = document.getElementById('count10');

              element.innerHTML = 30 - obj.value.length;
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

                                                    <th>รหัสประเภทหอพัก <th>
                                                    <th>ชื่อประเภทหอพัก </th>
													<th>จัดการ</th>

                                                </tr>
                                            </thead>
                                            <tbody id="showdata">

                                                <tr>

                                                    <td width="10px"></td>
                                                    <td></td>
                                                    <td width="10px">
                                                    
														<!--edit_file  del_file  -->
													<!--	<a href="<?php echo base_url().'index.php/dormtype/edit?id='.$rec->dormtype_ID;?>" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>
                                                    <a href="<?php echo base_url().'index.php/dormtype/edit?id='.$rec->dormtype_ID;?>" data-toggle="modal" data-target="#edit_file" id="<?php echo $rec->dormtype_ID; ?>"><i class="fas fa-edit" style="color:#47307b;">แก้ไข</i></a>&nbsp;
                                                    <a href="<?php echo base_url().'index.php/dormtype/edit?id='.$rec->dormtype_ID;?>" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)">ลบ</i></a>-->
			
                                    <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->

                                   


                                      

 
 

	
				
			
               	
                                     <!-- <form action="<?php echo base_url(); ?>index.php/dormtype/edit" method="post" id="editform"  class="needs-validation" >  -->
                                   
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
      $('#formadd').attr('action', '<?php echo base_url(); ?>index.php/dormtype/adddormtype');
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
      $('#formupdate').attr('action', '<?php echo base_url() ?>index.php/dormtype/updatedormtype');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/dormtype/editdormtype',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteditID]').val(data.dormtype_ID);
          $('input[name=txteditname]').val(data.dormtype_desc);

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
       $('#formdelete').attr('action', '<?php echo base_url() ?>index.php/dormtype/deletedormtype');
        $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/dormtype/editdormtype',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
            $('#showddel').html('ต้องการประเภทหอพัก   "'+data.type_name+'"');  
            $('input[name=txtdelID]').val(data.dormtype_ID);
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
        url: '<?php echo base_url() ?>index.php/dormtype/showAll',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].dormtype_ID+'</td>'+
                  '<td>'+data[i].type_name+'</td>'+
                

                  '<td>'+
                    '<a href="javascript:;"  ><i class="fas fa-edit" style="color:#47307b;" data="'+data[i].dormtype_ID+'"></i></a>'+
                    '<a href="javascript:;" ><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)" data="'+data[i].dormtype_ID+'"></i></a>'+
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