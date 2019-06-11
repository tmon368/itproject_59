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



      








 <!-- Modal ส่วน select -->

				<div class="card-body">
			<div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="style_table" class="table table-hover">
                                            <thead>
                                                <tr>

                                                    <th>#</th>
                                                    <th>ปี</th>
                                                    <th>จัดการ</th>
                                                  

                                                </tr>
                                            </thead>
                                            <tbody id="showdata">

                                                <tr>

                                                    <td width="10px"></td>
                                                    <td></td>
                                                    <td width="10px">
                                                    
														<!--edit_file  del_file  -->
													<!--	<a href="<?php echo base_url().'index.php/holiday1/edit?id='.$rec->hh_ID;?>" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>
                                                    <a href="<?php echo base_url().'index.php/holiday1/edit?id='.$rec->hh_ID;?>" data-toggle="modal" data-target="#edit_file" id="<?php echo $rec->holiday_ID; ?>"><i class="fas fa-edit" style="color:#47307b;">แก้ไข</i></a>&nbsp;
                                                    <a href="<?php echo base_url().'index.php/holiday1/edit?id='.$rec->hh_ID;?>" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)">ลบ</i></a>-->
			
                                    <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->

                                   


                                      

 
 

	
				
			
               	
                                     <!-- <form action="<?php echo base_url(); ?>index.php/holiday1/edit" method="post" id="editform"  class="needs-validation" >  -->
                                   
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
      $('#formadd').attr('action', '<?php echo base_url(); ?>index.php/holiday1/addholiday');
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
  /*
 $('#showdata').on('click', '.fa-edit', function(){
      var id = $(this).attr('data');
      var popup = document.getElementById("editimage");
      $('#edit_file').modal('show');

     // $('#exampleModalCenter').find('.modal-title').text('แก้ไขข้อมูล');
      $('#formupdate').attr('action', '<?php echo base_url() ?>index.php/holiday1/edit');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/holiday1/edit',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=txteditID]').val(data.hh_ID);
          $('input[name=txteditname]').val(data.holiday_name);
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    });
  */

   

    //delete- 
    $('#showdata').on('click', '.fa-trash-alt', function(){
      var id = $(this).attr('data');
      $('#del_file').modal('show');
      //prevent previous handler - unbind()
       $('#formdelete').attr('action', '<?php echo base_url() ?>index.php/holiday1/deleteholiday');
        $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/holiday1/editholiday',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
            $('#showddel').html('ต้องการลบวันหยุด   "'+data.holiday_name+'"');  
            $('input[name=txtdelID]').val(data.hh_ID);
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
        url: '<?php echo base_url() ?>index.php/holiday1/showAll',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].hh_ID+'</td>'+
                  '<td>'+data[i].h_year+'</td>'+
                  '<td>'+
                  '<a href="<?php echo base_url() ?>index.php/holiday/edit"  ><i class="fas fa-edit" style="color:#47307b;" data="'+data[i].h_ID+'"></i></a>'+
                    
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