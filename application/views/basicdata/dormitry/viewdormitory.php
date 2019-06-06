<div class="page-breadcrumb" id="nav_sty">
          <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">จัดการข้อมูลพื้นฐาน</a></li>
                        <li class="breadcrumb-item active" aria-current="page">หอพัก</li>
                  </ol>
          </nav>
</div>
<div class="col-lg-8 grid-margin stretch-card">
            <div class="card shadow mb-4">
          <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span class="fas fa-user-alt"></span>&nbsp;หอพัก</h6>
                </div>
       
<!-- Modal เพิ่มข้อมูล -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มหมวดความผิด</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

      <!--ส่วนฟอร์มเพิ่มข้อมูล-->
      <center>
        <div class="form-group" id="input_group_sty">
        <div class="input-group" >
          <label for="add_udroup">รหัสหมวดความผิด</label>&nbsp;
                    <input type="text" class="form-control" placeholder="รหัสหมวดความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40"  onkeyup="count_down(this);">            
        </div>
        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">2</span>
      </div>
        
        <br>
         <div class="form-group" id="input_group_sty">
        <div class="input-group" >
          <label for="add_udroup">ชื่อหมวดความผิด&nbsp;</label>&nbsp;
                    <input type="text" class="form-control" placeholder="ชื่อหมวดความผิด" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">50</span>
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
                                        <table id="style_table" class="table table-hover">
                                            <thead>
                                                <tr>

                                               
                                                    <th>รายการ</th>
                                                    <th>จัดการ</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                

                                                    
                                                    <td>กรุณาใส่ข้อมูลหอพัก</td>
                                                    <td width="10px">

                        <a href="1" data-toggle="modal" data-target="#edit_file"><i class="fas fa-edit" style="color:#47307b;"></i></a>&nbsp;
                                      
                                    <!-- Modal ส่วน del -->
      
                                                          <!------------------>

                                      <!-- Modal ส่วน edit -->
                                    <div class="modal fade" id="edit_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h2 class="modal-title" id="exampleModalLongTitle"><span><i class="fas fa-edit" style="color:#47307b;"></i></span>กรุณาใส่ข้อมูล</h2>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">

                                                          <!--ฟอร์มแก้ไขข้อมูล-->
                                                         
     		
			 <label for="add_udroup">เลือกประเภทหอพัก&nbsp;</label>&nbsp; 
			        <select name="เลือกหอพักมหาลัย"  style="width:180px;">
                 	<option value="เจ้าหน้าที่วินัย">เลือกประเภทหอพัก</option>
                <option value="เจ้าหน้าที่วินัย">หอพักในมหาวิทยาลัย</option>
                <option value="หัวหน้าส่วนกิจการนักศึกษา">หอพักนอกมหาวิทยาลัย</option>    
              </select><br>

             <br>
         <div class="form-group" id="input_group_sty">
        <div class="input-group" >
          <label for="add_udroup">ชื่อหอพัก&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control" placeholder="ชื่อหอพัก" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">20</span>
      </div>
     
         <div class="form-group" id="input_group_sty">
        <div class="input-group" >
          <label for="add_udroup">ชื่อที่ปรึกษาหอพัก&nbsp;</label>&nbsp;
          <input type="text" class="form-control" placeholder="ชื่อที่ปรึกษาหอพัก" aria-label="Username" aria-describedby="colored-addon1"  maxlength="40" required="" onkeyup="count_down(this);">            
        </div>

        <div class="form-group sty_a">
        <span id="count1">0</span>
        <span>/</span>
        <span id="count2" style="color:#6699ff;">10</span>
      </div>
            
                
                   </div>
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
