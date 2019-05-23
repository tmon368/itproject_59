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

<!--	<div class="card-body" id="card_1">
    <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
  </div>-->

      <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มประเภทผู้ใช้งาน</h2>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">

  <!--ส่วนฟอร์มเพิ่มข้อมูล-->
  <center><div class="form-group">
    <div class="input-group">
      <label for="add_udroup">ประเภทผู้ใช้</label>&nbsp;
                <input type="text" class="form-control" placeholder="เพิ่มประเภทผู้ใช้" aria-label="Username" aria-describedby="colored-addon1" required>

    </div>
  </div></center>
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

      <div class="container-fluid">
          <div class="row">
              <div class="col-5">
                <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#home"><span><i class="fa fa-exclamation-circle"></i></span>&nbsp;สถานะการอัพเดตข้อมูล</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu1"><span><i class="fas fa-download"></i></span>&nbsp;นำเข้าข้อมูล</a>
                    </li>
                    <!--<li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                    </li>-->
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                      <h3> <span><i class="fa fa-exclamation-circle" style="color:#5DADE2;"></i></span>&nbsp;อัพเดตข้อมูลล่าสุด</h3>
                    </br>
                      <p>ชื่อไฟล์:&nbsp;&nbsp;DB_name_type.sql</p>
                      <p>การอัพเดตล่าสุด:&nbsp;&nbsp; วันศุกร์ 13 พฤษภาคม 2561</p>
                      <p>เวลา:&nbsp;&nbsp; 22:30:59 </p>
                      <p>จำนวนข้อมูลที่อัพเดท:&nbsp;&nbsp; 120 record </p>
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                      <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                      <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>

                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="file" class="form-control-file border" name="file">
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-family:'Prompt',sans-serif;">ยืนยัน</button>
                      </form>

                    </div>
                    <!--<div id="menu2" class="container tab-pane fade"><br>
                      <h3>Menu 2</h3>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>-->
                  </div>

              </div>
              <!--<div class="col-2 bg-warning">
                  <p>Sed ut perspiciatis...</p>-->
              </div>
          </div>
        </div>





    </div>



    </div>
