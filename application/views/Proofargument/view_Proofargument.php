<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
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
        .text_position {
            padding-left: 0.9rem;
            font-size: 0.9rem;
        }
        label.label_txt {
            padding: inherit;
            font-weight: 900;
        } 
    </style> 
</head>
<body>
  <meta charset="UTF-8">
  <div class="page-breadcrumb" id="nav_sty">
          <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">รายงานตัวผู้กระทำความผิด</a></li>
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

<!--Modal ส่วน del  -->

  <div class="modal fade" id="dellfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLongTitle"><span><i class="fa fa-exclamation-triangle" style="color:rgba(235,99,102,1.00)"></i></span>ลบข้อมูล</h2>
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
                                        <input type="hidden" name="delID">
                                    </center>
                                    <!------------------>
                                </div>

                                <div class="modal-footer">
                                    <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button name="btndel" id="btndel" type="submit" class="btn btn-danger btn-fw">ลบ</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
  

<!-- Modal ส่วน edit -->

<!--------------------------------->

<div class="modal fade" id="del_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 650px!important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle"><span><i 
        class="" 
        style="color:rgba(235,99,102,1.00)"></i></span>ใบสั่งการกระทำความผิด</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <div class="modal-body">

                            <!--ส่วนฟอร์มแก้ไขข้อมูล-->
                            <form action="" id="formdelete" method="post" class="needs-validation">
                                <center>
                                    <div class="row">
                                    <div class="col-sm-4">
                                     <div class="input-group">
                                     <label class="label_txt">วันที่กระทำผิด:&nbsp;</label>
                                     <p class="text_position" id="committed_date"></p></div></div>
                                          <div class="col-sm-8">
                                        <div class="input-group">
                                            <label class="label_txt">เวลา:&nbsp;</label>
                                            <p class="text_position"  id="committed_time"></p>
                                        </div> </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <label class="label_txt" >สถานที่:&nbsp;</label>
                                            <p class="text_position"  id="place_name"></p>
                                        </div></div>  
                                    </div>
                                     <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <label class="label_txt">คำอธิบายบริเวณที่เกิดเหต:&nbsp;</label>
                                            <p class="text_position"  id="explanation"></p>
                                        </div></div>  
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <label class="label_txt">ฐานความผิด:&nbsp;</label>
                                            <p class="text_position"  id="off_desc"></p>
                                        </div></div>  
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <label class="label_txt">ไฟล์หลักฐาน :&nbsp;</label>
                                            <p class="text_position"  id="evidenre_name"></p>
                                        </div></div>  
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="input-group">
                                    	<label class="label_txt" >วันที่บันทึกหลักฐาน :&nbsp;</label>
                                    	<p class="text_position"  id="proof_date"></p>
                                    </div></div></div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="input-group">
                                    	<label class="label_txt">คำอธิบายการอุทธรณ์ความผิด :&nbsp;</label>
                                    	<p class="text_position"  id="Explanation"></p>
                                    </div></div></div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="input-group">
                                    	<label class="label_txt">ไฟล์หลักฐานการอุทธรณ์ความผิด :&nbsp;</label>
                                    	<p class="text_position"  id="proof_name"></p>
                                    </div></div></div> 
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

//ลบข้อมูล
$('#showdata').on('click', '.dellfile', function() {
        var id = $(this).attr('data');
        //alert(id)
        $('#dellfile').modal('show');
        $('#formdelete').attr('action', '<?php echo base_url() ?>index.php/VolunteerAc/deleteVolunteerAc');
        $.ajax({
            type: 'ajax',
            method: 'get',
          url: '<?php echo base_url() ?>index.php/VolunteerAc/editVolunteerAc',
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                $('#showddel').html('ต้องการลบกิจกรรม   "' + data[0].service_name + '"');
                $('input[name=delID]').val(data[0].service_ID );
            },
            error: function() {
                alert('ไม่สามารถลบข้อมูล');
            }
        });
    });



    $('#btndel').click(function() {
      
        var url = $('#formdelete').attr('action');
        var data = $('#formdelete').serialize();
        var service_ID = $('input[name=delID]');
        var result = '';

        if (service_ID.val() == '') {
        	service_ID.parent().parent().addClass('has-error');
        } else {
        	service_ID.parent().parent().removeClass('has-error');
            result += '1';
        }  
        if (result == '1') {  
            $.ajax({
                type: 'ajax', 
                method: 'post', 
                url: url,
                data: data,
                async: false,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#del_file').modal('hide');
                        $('#formdelete')[0].reset();
                        $('.alert-danger').html('ลบข้อมูลเรียบร้อย').fadeIn().delay(2000).fadeOut('slow');
                        $('#formdelete').empty();
                        show_all();
                        
                     
                    } else {
                        alert('Error');
                    }
                },

                error: function() {
                    //alert('id นี้ถูกใช้งานแล้ว');
                    $('#del_file').modal('hide');
                    $('#formdelete')[0].reset();
                    $('.alert-danger').html('แก้ไขเรียบร้อย').fadeIn().delay(5000).fadeOut('slow');
                    show_all();

                }
            });
        }
    });




  

  //select- 
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
           $('#Explanation').html(data.Explanation);
         
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
              if(data[i].results ==1){
            	  html +='<tr>'+
                  '<td>'+(i+1)+'</td>'+
                  '<td>'+ data[i].proof_date +'</td>'+
                  '<td>'+ data[i].off_desc +'</td>'+
                  '<td align="center">'+ data[i].resultsname +'</td>'+
                  '<td align="center"> <i style="color:rgba(67, 135, 254);font-size:1.5rem;" class="fa fa-file-text btn-fw del_data" data=' + data[i].proof_ID + '></i></td>' +
                
                  '</tr>';



              }else{
            html +='<tr>'+
                  '<td>'+(i+1)+'</td>'+
                  '<td>'+ data[i].proof_date +'</td>'+
                  '<td>'+ data[i].off_desc +'</td>'+
                  '<td align="center">'+ data[i].resultsname +'</td>'+
                  '<td align="center"> <i style="color:rgba(67, 135, 254);font-size:1.5rem;" class="fa fa-file-text btn-fw del_data" data=' + data[i].proof_ID + '></i></td>' +
                 
                  '</tr>';
              }
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
