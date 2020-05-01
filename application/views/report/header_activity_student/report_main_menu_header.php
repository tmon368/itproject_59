<link rel="stylesheet" href="<?php echo base_url('re/css/scss_main_menu.scss') ?>">

<head>
    <title> ออกรายงาน | ระบบวินัยนักศึกษา</title>
</head>

<body>

    <div class="container-fluid">

 
    <div class="row col-lg-">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card shadow mb-4">
                    <div class="card-header" id="card_4">
                        <h6 class="m-0 text-primary"><span><i class="fa fa-table"></i></span>&nbsp;&nbsp;รายงานรายเดือน</h6>
                    </div>
            </br>
                    <a href="<?php echo site_url('ReportDataOffencecateHeader') ?>" > &nbsp;&nbsp;&nbsp;&nbsp;รายงานนักศึกษาที่กระทำความผิดแยกตามหมวดความผิด</a>
                    <a href="<?php echo site_url('ReportDataOffenceHeader') ?>" > &nbsp;&nbsp;&nbsp;&nbsp;รายงานนักศึกษาที่กระทำความผิดแยกตามฐานความผิด</a>
                    <a href="<?php echo site_url('ReportDataDivisionsHeader') ?>" > &nbsp;&nbsp;&nbsp;&nbsp;รายงานนักศึกษาที่กระทำความผิดแยกตามสำนักวิชา</a>
                    <a href="<?php echo site_url('ReportDataCurriculumHeader') ?>" > &nbsp;&nbsp;&nbsp;&nbsp;รายงานนักศึกษาที่กระทำความผิดแยกตามหลักสูตร</a>
                    <a href="<?php echo site_url('ReportDataDormitoryHeader') ?>" > &nbsp;&nbsp;&nbsp;&nbsp;รายงานนักศึกษาที่กระทำความผิดแยกตามหอพัก</a>
                    <a href="<?php echo site_url('') ?>" > &nbsp;&nbsp;&nbsp;&nbsp;ค้นหาตามช่วงเวลา</a>
                   
                    <div class="card-body">

                        
                    </div>
                </div>
    
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                <div class="card shadow mb-4">
                    <div class="card-header" id="card_4">
                        <h6 class="m-0 text-primary"><span><i  class="fa fa-area-chart"></i></span>&nbsp;&nbsp;กราฟรายเดือน</h6>
                    </div>
                    </br>
                  
                    <a href="<?php echo site_url('ReportChartOffencemonthHeader') ?>"> &nbsp;&nbsp;&nbsp;&nbsp;สถิตินักศึกษาที่กระทำความผิดแยกตามฐานความผิด</a>
                    <a href="<?php echo site_url('ReportChartOffencecatemonthHeader') ?>"> &nbsp;&nbsp;&nbsp;&nbsp;สถิตินักศึกษาที่กระทำความผิดแยกตามหมวดความผิด</a>
                    <a href="<?php echo site_url('ReportChartdivisionsmonthHeader') ?>"> &nbsp;&nbsp;&nbsp;&nbsp;สถิตินักศึกษาที่กระทำความผิดแยกตามสำนัก</a
                    <a href="<?php echo site_url('ReportChartcurriculummonthHeader') ?>"> &nbsp;&nbsp;&nbsp;&nbsp;สถิตินักศึกษาที่กระทำความผิดแยกตามหลักสูตร</a>
                    <a href="<?php echo site_url('ReportChartdormitorymonthHeader') ?>"> &nbsp;&nbsp;&nbsp;&nbsp;สถิตินักศึกษาที่กระทำความผิดแยกตามหอพัก</a>
             
                    
                   
                        
                    
                </div>
                
                </div>
               
</div>
</div >
   