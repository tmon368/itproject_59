<div class="page-breadcrumb" id="nav_sty">
          <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">หน้าแรก</a></li>
                        <li class="breadcrumb-item active" aria-current="page">การนำเข้าข้อมูล</li>
                  </ol>
          </nav>
</div> <!--แถบนำทางผู้ใช้-->

<div class="col-lg-12 grid-margin stretch-card">

        <div class="card shadow mb-4">


      <div class="card-header">
                <h6 class="m-0 text-primary"><span class="fas fa-download"></span>&nbsp;การนำเข้าข้อมูล</h6>
            </div>

    <div class="card-body">

      <div class="container-fluid">
          <div class="row">
              <div class="col-10">
                <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#home"><span><i class="fa fa-exclamation-circle"></i></span>&nbsp;สถานะการอัพเดตข้อมูล</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu1"><span><i class="fas fa-users"></i></span>&nbsp;กลุ่มผู้ใช้งาน</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu2"><span><i class="fas fa-layer-group"></i></span>&nbsp;หมวดความผิด</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu3"><span><i class="fas fa-ban"></i></span>&nbsp;ฐานความผิด</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu4"><span><i class="far fa-calendar-alt"></i></span>&nbsp;วันหยุด</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu5"><span><i class="fas fa-building"></i></span>&nbsp;ประเภทหอพัก</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu6"><span><i class="fas fa-bed"></i></span>&nbsp;หอพัก</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu7"><span><i class="fas fa-map-marker-alt"></i></span>&nbsp;สถานที่</a>
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                      <h3> <span><i class="	fa fa-check-circle" style="color:#58D68D;font-size:28px;"></i></span>&nbsp;อัพเดตข้อมูลล่าสุด</h3>
                    </br>
                      <p>ชื่อไฟล์:&nbsp;&nbsp;Table_usergroup.csv</p>
                      <p>การอัพเดตล่าสุด:&nbsp;&nbsp; วันศุกร์ 13 พฤษภาคม 2561</p>
                      <p>เวลา:&nbsp;&nbsp; 22:30:59 </p>
                      <p>จำนวนข้อมูลที่อัพเดท:&nbsp;&nbsp; 120 record </p>
                    </div>

                    <!--นำเข้าข้อมูลกลุ่มผู้ใช้งาน-->
                    <div id="menu1" class="container tab-pane fade"><br>
                      <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                      <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>

                      <form action="">
                        <div class="form-group">
                          <input type="file" class="form-control-file border" name="file">
                        </div>
                        <button type="submit" class="btn btn-success btn-fw" style="font-family:'Prompt',sans-serif;" onclick="newPopup()">ยืนยัน</button>
                      </form>
                    </div>
                    <script type="text/javascript">
                    // Popup window code

                    function newPopup(url) {
                    	var myWindow = window.open("<?php echo site_url("Submit_to_db")?>", "", "width=700,height=800");

                    }
                    </script>

                    <!--นำเข้าข้อมูลหมวดความผิด-->
                    <div id="menu2" class="container tab-pane fade"><br>
                      <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                      <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>

                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="file" class="form-control-file border" name="file">
                        </div>
                        <button type="submit" class="btn btn-success btn-fw" style="font-family:'Prompt',sans-serif;">ยืนยัน</button>
                      </form>
                    </div>

                    <div id="menu3" class="container tab-pane fade"><br>
                      <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                      <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>

                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="file" class="form-control-file border" name="file">
                        </div>
                        <button type="submit" class="btn btn-success btn-fw" style="font-family:'Prompt',sans-serif;">ยืนยัน</button>
                      </form>
                    </div>

                    <div id="menu4" class="container tab-pane fade"><br>
                      <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                      <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>

                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="file" class="form-control-file border" name="file">
                        </div>
                        <button type="submit" class="btn btn-success btn-fw" style="font-family:'Prompt',sans-serif;">ยืนยัน</button>
                      </form>
                    </div>

                    <div id="menu5" class="container tab-pane fade"><br>
                      <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                      <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>

                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="file" class="form-control-file border" name="file">
                        </div>
                        <button type="submit" class="btn btn-success btn-fw" style="font-family:'Prompt',sans-serif;">ยืนยัน</button>
                      </form>
                    </div>

                    <div id="menu6" class="container tab-pane fade"><br>
                      <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                      <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>

                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="file" class="form-control-file border" name="file">
                        </div>
                        <button type="submit" class="btn btn-success btn-fw" style="font-family:'Prompt',sans-serif;">ยืนยัน</button>
                      </form>
                    </div>

                    <div id="menu7" class="container tab-pane fade"><br>
                      <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                      <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>

                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="file" class="form-control-file border" name="file">
                        </div>
                        <button type="submit" class="btn btn-success btn-fw" style="font-family:'Prompt',sans-serif;">ยืนยัน</button>
                      </form>
                    </div>

                  </div>

              </div>
              <!--<div class="col-2 bg-warning">
                  <p>Sed ut perspiciatis...</p>-->
              </div>
          </div>
        </div>





    </div>



    </div>
