<!-- Navigation Bar-->
<div class="page-breadcrumb" id="nav_sty">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">หน้าแรก</a></li>
      <li class="breadcrumb-item active" aria-current="page">การนำเข้าข้อมูล</li>
    </ol>
  </nav>
</div>

<!--import data CSV file to Database-->
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
                <a class="nav-link" data-toggle="tab" href="#menu1"><span><i class="fas fa-users"></i></span>&nbsp;นักศึกษา</a>
              </li>
            
            </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2"><span><i class="fas fa-users"></i></span>&nbsp;บุคลากร</a>
              </li>
              
               </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu3"><span><i class="fas fa-users"></i></span>&nbsp;หลักสูตร</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu4"><span><i class="fas fa-users"></i></span>&nbsp;ยานพาหนะ</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu5"><span><i class="fas fa-users"></i></span>&nbsp;หน่วยงาน</a>
              </li>
              
               <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu6"><span><i class="fas fa-users"></i></span>&nbsp;สถานะนักศึกษา</a>
              </li>
              
              
              
              
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div id="home" class="container tab-pane active"><br>
                <h3> <span><i class="	fa fa-check-circle" style="color:#58D68D;font-size:28px;"></i></span>&nbsp;อัพเดตข้อมูลล่าสุด</h3>

                <p>ชื่อไฟล์:&nbsp;&nbsp;Table_usergroup.csv &nbsp;&nbsp;ตาราง:&nbsp;&nbsp;usertype</p>
                <p>การอัพเดตล่าสุด:&nbsp;&nbsp; วันศุกร์ 13 พฤษภาคม 2561</p>
                <p>เวลา:&nbsp;&nbsp; 22:30:59 น. </p>
                <p>จำนวนข้อมูลที่อัพเดท:&nbsp;&nbsp; 120 ระเบียน</p>
              </div>

              <!--นำเข้าข้อมูลนักศึกษา-->
              <div id="menu1" class="container tab-pane fade"><br>
                <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>
                
                
                
                
                

                <!-- ส่งค่าไปยัง Contrller Submit_to_db method:import-->
                <form action="<?php echo site_url() ?>/Submit_to_db/import" method="post" id="#" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="file" name="csv_file" id="csv_file" required accept=".csv, .xls,.xlsx" />
                  </div>
                  <button type="submit" name="import_csv" class="btn btn-success btn-fw" id="import_csv_btn">Import CSV</button>
                </form>
              </div>
              
              
               <div id="menu2" class="container tab-pane fade"><br>
                <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>
   
                <!-- ส่งค่าไปยัง Contrller Submit_to_db method:import-->
                <form action="<?php echo site_url() ?>/Submit_to_db/importstatus" method="post" id="#" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="file" name="csv_file" id="csv_file" required accept=".csv, .xls,.xlsx" />
                  </div>
                  <button type="submit" name="import_csv" class="btn btn-success btn-fw" id="import_csv_btn">Import CSV</button>
                </form>
              </div>
              
              
              
              
              
                <div id="menu3" class="container tab-pane fade"><br>
                <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>
    
                <!-- ส่งค่าไปยัง Contrller Submit_to_db method:import-->
                <form method="post"  action="<?php echo site_url() ?>/import_data/importcurriculum" method="post" id="#" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="file" name="_fileup" id="_fileup" required accept=".csv, .xls,.xlsx" />
                  </div>
                  <button type="submit" name="btn_submitcurriculum" class="btn btn-success btn-fw" id="btn_submitcurriculum">Import CSV</button>
                </form>
              </div>
              
              
              
              
               <div id="menu4" class="container tab-pane fade"><br>
                <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>
    
                <!-- ส่งค่าไปยัง Contrller Submit_to_db method:import-->
                <form method="post"  action="<?php echo site_url() ?>/import_data/importvehicles" method="post" id="#" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="file" name="_fileup" id="_fileup" required accept=".csv, .xls,.xlsx" />
                  </div>
                  <button type="submit" name="btn_submitvehicles" class="btn btn-success btn-fw" id="btn_submitvehicles">Import CSV</button>
                </form>
              </div>
              
              
              
              
              
              
              
              
              
               <div id="menu5" class="container tab-pane fade"><br>
                <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>
 
                <!-- ส่งค่าไปยัง Contrller Submit_to_db method:import-->
                <form method="post"  action="<?php echo site_url() ?>/import_data/importdivisions" method="post" id="#" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="file" name="_fileup" id="_fileup" required accept=".csv, .xls,.xlsx" />
                  </div>
                  <button type="submit" name="btn_submitdivisions" class="btn btn-success btn-fw" id="btn_submitdivisions">Import CSV</button>
                </form>
              </div>
              
              
              
              
              <div id="menu6" class="container tab-pane fade"><br>
                <h3><span><i class="fas fa-download" style="color:#5DADE2;"></i></span>&nbsp;นำเข้าข้อมูล</h3>
                <p style="color:#99A3A4;">รองรับไฟล์ประเภท .csv ในการนำเข้าข้อมูลลงฐานข้อมูล</p>
    
                <!-- ส่งค่าไปยัง Contrller Submit_to_db method:import-->
                <form method="post"  action="<?php echo site_url() ?>/import_data/importstatus" method="post" id="#" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="file" name="_fileup" id="_fileup" required accept=".csv, .xls,.xlsx"/>
                  </div>
                  <button type="submit" name="btn_submitstatus" class="btn btn-success btn-fw" id="btn_submitstatus">Import CSV</button>
                </form>
              </div>
              
              
              
              
              
              

            </div>
          </div>

        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script>
        $(document).ready(function() {
          
            //Function insert
        

        });
      </script>