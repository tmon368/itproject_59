<!doctype html>
<html lang="en">

<head>

  <title>สถานที่ admin</title>

</head>
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
              			<h6 class="m-0 text-primary"><span class="fas fa-user-alt"></span>&nbsp;สถานที่</h6>
            		</div>
            		
            		
           <form action="" method="post"  class="needs-validation" > 		
				<div class="card-body" id="card_1">
				
				<button type="button" class="btn btn-inverse-primary btn-fw" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-user-plus"></i>เพิ่มกลุ่มผู้ใช้
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
		 
		  <center>
		  <div class="form-group" id="input_group_sty" >
				<div class="input-group" >
				
					<label for="validationCustom01">รหัสสถานที่</label>&nbsp;
                    <input type="text" name="place_ID"  class="form-control" placeholder="รหัสสถานที่" aria-label="Username" aria-describedby="colored-addon1" maxlength="4"  required>
				</div></div>
				<div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="validationCustom02">ชื่อสถานที่</label>&nbsp;
                    <input type="text" name="place_name"  class="form-control" placeholder="ชื่อสถานที่" aria-label="Username" aria-describedby="colored-addon1" maxlength="40" required>
				</div></div>
			</center>
			 
		  <!------------------>
 </div>
     
   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" onclick="location.href='<?php echo base_url(); ?>index.php/place/addnew'" name="insert"  class="btn btn-success">เพิ่มข้อมูล</button>
      </div>
 
    </div>
  </div>
</div>

</form>
<!--------------------------------->





				<div class="card-body">
			<div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="style_table" class="table table-hover">
                                            <thead>
                                                <tr>

                                                    <th>#</th>
                                                    <th>ชื่อสถานที่</th>
                                                    <th>จัดการ</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                     <?php
                                                    foreach($records as $rec){ ?>
                                                <tr>

                                                    <td width="10px"><?php echo $rec->place_ID; ?></td>
                                                    <td><?php echo $rec->place_name; ?></td>
                                                    <td width="10px">

                                                    <a href="#" data-toggle="modal" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>&nbsp;
                                                    <a href="#" data-toggle="modal" data-target="#del_file"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)"></i></a>

                                    <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->
<?php } ?>
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
                                                          <div class="modal-body">

                                                          <!--ข้อความยืนยันการลบข้อมูล-->
                                                          <center>
                                                            ต้องการลบข้อมูลประเภทผู้ใช้ "<?php echo $rec->place_name; ?>"
                                                          </center>
                                                          <!------------------>

                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                            <button type="button" class="btn btn-danger btn-fw">ลบ</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                      <!------------------>


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
                                                    		  <center><div class="form-group">
                                                    				<div class="input-group">
                                                    					<label for="add_udroup">ประเภทผู้ใช้ :</label>&nbsp;
                                                                        <input type="text" class="form-control" placeholder="เพิ่มประเภทผู้ใช้" aria-label="Username" aria-describedby="colored-addon1" value="<?php echo $rec->place_name; ?>" required>

                                                    				</div>


                                                    			</div></center>
                                                    		  <!------------------>

                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                            <button type="button" class="btn btn-success">บันทึกข้อมูล</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
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
</body>

</html>