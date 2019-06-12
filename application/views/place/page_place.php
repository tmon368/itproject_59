<!doctype html>
<html lang="en">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<div class="alert alert-success" style="display: none;">
    
  </div>
<head>

  <title>สถานที่ admin</title>

</head>
<body>
  <meta charset="UTF-8">
  
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
              			<h6 class="m-0 text-primary"><span  class="fas fa-user-alt"></span>&nbsp;สถานที่</h6>
            		</div>
            		<?php  
echo '<center><label class="text-danger">'.$this->session->flashdata
("message").'</label></center>';  

            ?>
           		
				<div class="card-body" id="card_1">
				
				<button type="button" id="btnAdd" class="btn btn-inverse-primary btn-fw" data-toggle="modal" >
									<span><i class="fas fa-map-marker-alt"></i></span>เพิ่มสถานที่
				</button>
				&nbsp;



				</div>
					<!-- Modal เพิ่มข้อมูล -->
 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มสถานที่</h2>
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
				
					<label for="validationCustom01">รหัสสถานที่  </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;
					<div class="col-lg-3">
                    <input type="text" name="txtID"  class="form-control"  maxlength="4" onkeyup="count_down_id(this);" required>
			
				<div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">4</span>
      </div></div></div>
      <!-- Alert for the number of characters-->
      <script>
          function count_down_id(obj) {

              document.getElementById('count1').innerHTML = obj.value.length;
              var element = document.getElementById('count2');

              element.innerHTML = 4 - obj.value.length;
              if (4 - obj.value.length == 0) {
                  element.style.color = 'red';

              } else {
                  element.style.color = '#6699ff';
              }
          }
      </script>
				
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="validationCustom02">ชื่อสถานที่</label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="txtname"   class="form-control"  maxlength="50" onkeyup="count_downname(this);" required>
				</div>
				<div class="form-group sty_a">
        <span id="count3">0</span>
        <span>/</span>
        <span id="count4" style="color:#6699ff;">50</span>
      </div>

      <!-- Alert for the number of characters-->
      <script>
          function count_downname(obj) {

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
				
					<label for="validationCustom02">คำอธิบายสถานที่</label>&nbsp;
					
                    <textarea  name="txtdescription" rows="4" class="form-control"  maxlength="100" onkeyup="count_downdescription(this);" required></textarea>
				</div>
				<div class="form-group sty_a">
        <span id="count5">0</span>
        <span>/</span>
        <span id="count6" style="color:#6699ff;">100</span>
      </div>

      <!-- Alert for the number of characters-->
      <script>
          function count_downdescription(obj) {

              document.getElementById('count5').innerHTML = obj.value.length;
              var element = document.getElementById('count6');

              element.innerHTML = 100 - obj.value.length;
              if (100 - obj.value.length == 0) {
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

                   <!--ฟอร์มแก้ไขข้อมูล-->
     <form action="" id="formupdate" method="post"  class="needs-validation" >
      <center>
     <div class="form-group" id="input_group_sty" >
				<div class="input-group" >
				
					<label for="validationCustom01">รหัสสถานที่  </label>
					<p class="text-danger">&nbsp;&nbsp;*</p>
					&nbsp;&nbsp;&nbsp;
					<div class="col-lg-3">
                    <input type="text" name="txteditID"  class="form-control"  maxlength="4" onkeyup="count_down_editid(this);" required>
				
				<div class="form-group sty_a">
        <span id="count7">0</span>
        <span>/</span>
        <span id="count8" style="color:#6699ff;">4</span>
      </div></div></div>

      <!-- Alert for the number of characters-->
      <script>
          function count_down_editid(obj) {

              document.getElementById('count7').innerHTML = obj.value.length;
              var element = document.getElementById('count8');

              element.innerHTML = 4 - obj.value.length;
              if (4 - obj.value.length == 0) {
                  element.style.color = 'red';

              } else {
                  element.style.color = '#6699ff';
              }
          }
      </script>
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="validationCustom02">ชื่อสถานที่</label>&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="txteditname"  class="form-control"  maxlength="50" onkeyup="count_down_editname(this);" required>
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
        
        <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="validationCustom02">คำอธิบายสถานที่</label>&nbsp;
                    <textarea name="txteditdescription"  rows="4" class="form-control"  maxlength="100" onkeyup="count_down_editdescription(this);" required></textarea>
				</div>
				<div class="form-group sty_a">
        <span id="count11">0</span>
        <span>/</span>
        <span id="count12" style="color:#6699ff;">100</span>
      </div>

      <!-- Alert for the number of characters-->
      <script>
          function count_down_editdescription(obj) {

              document.getElementById('count11').innerHTML = obj.value.length;
              var element = document.getElementById('count12');

              element.innerHTML = 100 - obj.value.length;
              if (100 - obj.value.length == 0) {
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

                                                    <th>#</th>
                                                    <th>ชื่อสถานที่</th>
                                                    <th>คำอธิบายสถานที่</th>
                                                    <th>จัดการ</th>

                                                </tr>
                                            </thead>
                                            <tbody id="showdata">

                                                <tr>

                                                    <td width="10px"></td>
                                                    <td></td>
                                                    <td width="10px">
                                                    
														<!--edit_file  del_file  -->
													<!--	<a href="<?php echo base_url().'index.php/place/edit?id='.$rec->place_ID;?>" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>
                                                    <a href="<?php echo base_url().'index.php/place/edit?id='.$rec->place_ID;?>" data-toggle="modal" data-target="#edit_file" id="<?php echo $rec->place_ID; ?>"><i class="fas fa-edit" style="color:#47307b;">แก้ไข</i></a>&nbsp;
                                                    <a href="<?php echo base_url().'index.php/place/edit?id='.$rec->place_ID;?>" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)">ลบ</i></a>-->
			
                                    <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->

                                   


                                      

 
 

	
				
			
               	
                                     <!-- <form action="<?php echo base_url(); ?>index.php/place/edit" method="post" id="editform"  class="needs-validation" >  -->
                                   
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
      $('#formadd').attr('action', '<?php echo base_url(); ?>index.php/place/addplace');
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
      $('#formupdate').attr('action', '<?php echo base_url() ?>index.php/place/updateplace');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/place/editplace',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteditID]').val(data.place_ID);
          $('input[name=txteditname]').val(data.place_name);
          $('textarea[name=txteditdescription]').val(data.description);
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
       $('#formdelete').attr('action', '<?php echo base_url() ?>index.php/place/deleteplace');
        $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/place/editplace',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
            $('#showddel').html('ต้องการลบสถานที่   "'+data.place_name+'"');  
            $('input[name=txtdelID]').val(data.place_ID);
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
        url: '<?php echo base_url() ?>index.php/place/showAll',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].place_ID+'</td>'+
                  '<td>'+data[i].place_name+'</td>'+
                  '<td>'+data[i].description+'</td>'+

                  '<td>'+
                    '<a href="javascript:;"  ><i class="fas fa-edit" style="color:#47307b;" data="'+data[i].place_ID+'"></i></a>'+
                    '<a href="javascript:;" ><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)" data="'+data[i].place_ID+'"></i></a>'+
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