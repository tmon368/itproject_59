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
              			<h6 class="m-0 text-primary"><span class="fas fa-user-alt"></span>&nbsp;ฐานความผิด</h6>
            		</div>
				<div class="card-body" id="card_1">

				<button type="button" class="btn btn-inverse-primary btn-fw" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-user-plus"></i>เพิ่มฐานความผิด
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
		  <center>
		  <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">รหัสหมวดความผิด&nbsp;&nbsp;</label>&nbsp;
					<select class="form-control">
					<option value ="6">6</option>
					<option value ="8">8</option>
					<option value ="9">9</option>
					<option value ="11">11</option>
					
					</select>
					</div>
					<br>
        <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">รหัสฐานความผิด&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="รหัสฐานความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>
        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">3</span>
      </div>
        <br>
         <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">ชื่อฐานความผิด&nbsp;&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="ชื่อฐานความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">40</span>
      </div>
 <br>
         <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">คะแนนที่ห้ก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="คะแนนที่ห้ก" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">2</span>
      </div>
      <!-- Alert for the number of characters-->
      <script>
          function count_down(obj) {

              document.getElementById('count1').innerHTML = obj.value.length;
              var element = document.getElementById('count2');

              element.innerHTML = 40 - obj.value.length;
              if (40 - obj.value.length == 0) {
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-success">เพิ่มข้อมูล</button>
      </div>
    </div>
  </div>
</div>
<!--------------------------------->




				<div class="card-body">
			<div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="style_table" class="table table-hover" >
                                            <thead>
                                                <tr>

                                                    <th>รหัสหมวดความผิด</th>
                                                    <th>รหัสฐานความผิด</th>
                                                    <th>ชื่อฐานความผิด</th>
                                                    <th>คะแนนที่ห้ก</th>
                                                 	<th>จัดการ</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td width="10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</td>
                                                    <td>นำสุราเครื่องดื่มที่มีแอลกออล์เข้ามาในพื้นที่มหาวิทยาลัย</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;10</td>
                                                    <td width="10px">

                                                    <a href="#" data-toggle="modal" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>&nbsp;
                                                    <a href="#" data-toggle="modal" data-target="#del_file"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)"></i></a>

                                    <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->

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
                                                            ต้องการลบข้อมูลฐานความผิด
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
                                                    					  <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">รหัสหมวดความผิด&nbsp;&nbsp;</label>&nbsp;
					<select class="form-control">
					<option value ="6">6</option>
					<option value ="8">8</option>
					<option value ="9">9</option>
					<option value ="11">11</option>
					
					</select>
					</div>
					<br>
        <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">รหัสฐานความผิด&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="รหัสฐานความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>
        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">3</span>
      </div>
        <br>
         <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">ชื่อฐานความผิด&nbsp;&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="ชื่อฐานความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">40</span>
      </div>
 <br>
         <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">คะแนนที่ห้ก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="คะแนนที่ห้ก" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">2</span>
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
                                                <tr>

                                                     <td width="10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2</td>
                                                    <td>กระทำผิดเกี่ยวกับ พ.ร.บ จราจร</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;5</td>
                                                    <td width="10px">

                                                    <a href="#" data-toggle="modal" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>&nbsp;
                                                    <a href="#" data-toggle="modal" data-target="#del_file"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)"></i></a>

                                    <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->

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
                                                            ต้องการลบข้อมูลฐานความผิด
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
                                                    					  <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">รหัสหมวดความผิด&nbsp;&nbsp;</label>&nbsp;
					<select class="form-control">
					<option value ="6">6</option>
					<option value ="8">8</option>
					<option value ="9">9</option>
					<option value ="11">11</option>
					
					</select>
					</div>
					<br>
        <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">รหัสฐานความผิด&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="รหัสฐานความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>
        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">3</span>
      </div>
        <br>
         <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">ชื่อฐานความผิด&nbsp;&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="ชื่อฐานความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">40</span>
      </div>
 <br>
         <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">คะแนนที่ห้ก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="คะแนนที่ห้ก" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">2</span>
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
                                                <tr>

                                                     <td width="10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18</td>
                                                    <td>สูบบุหรี่ภายในอาคาร</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;10</td>
                                                    <td width="10px">

                                                    <a href="#" data-toggle="modal" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>&nbsp;
                                                    <a href="#" data-toggle="modal" data-target="#del_file"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)"></i></a>

                                    <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->

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
                                                            ต้องการลบข้อมูลฐานความผิด
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
                                                    					  <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">รหัสหมวดความผิด&nbsp;&nbsp;</label>&nbsp;
					<select class="form-control">
					<option value ="6">6</option>
					<option value ="8">8</option>
					<option value ="9">9</option>
					<option value ="11">11</option>
					
					</select>
					</div>
					<br>
        <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">รหัสฐานความผิด&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="รหัสฐานความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>
        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">3</span>
      </div>
        <br>
         <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">ชื่อฐานความผิด&nbsp;&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="ชื่อฐานความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">40</span>
      </div>
 <br>
         <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">คะแนนที่ห้ก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="คะแนนที่ห้ก" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">2</span>
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
                                                <tr>

                                                    <td width="10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21</td>
                                                    <td>ทิ้งขยะในที่ซึ่งมิใช่ถังขยะหรือสถานที่ที่มหาวิทยาลัยจัดไว้ให้ทิ้งขยะ</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;5</td>
                                                    <td width="10px">

                                                    <a href="#" data-toggle="modal" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>&nbsp;
                                                    <a href="#" data-toggle="modal" data-target="#del_file"><i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)"></i></a>

                                    <!--ส่วนของ madal จะใช้การจัดการด้วย id ส่วนของ data-target กับ id ของ class จะต้องเหมือนกัน -->

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
                                                            ต้องการลบข้อมูลฐานความผิด
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
                                                    					  <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">รหัสหมวดความผิด&nbsp;&nbsp;</label>&nbsp;
					<select class="form-control">
					<option value ="6">6</option>
					<option value ="8">8</option>
					<option value ="9">9</option>
					<option value ="11">11</option>
					
					</select>
					</div>
					<br>
        <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">รหัสฐานความผิด&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="รหัสฐานความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>
        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">3</span>
      </div>
        <br>
         <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">ชื่อฐานความผิด&nbsp;&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="ชื่อฐานความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">40</span>
      </div>
 <br>
         <div class="form-group" id="input_group_sty">
				<div class="input-group" >
					<label for="add_udroup">คะแนนที่ห้ก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="คะแนนที่ห้ก" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">2</span>
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