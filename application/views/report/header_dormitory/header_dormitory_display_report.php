<link rel="stylesheet" href="<?php echo base_url('re/css/css_report_offencase.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/normalize.min.css') ?>">

<head>
    <title>ระบบวินัยนักศึกษามหาวิทยาลัยวลัยลักษณ์</title>
    <style>
        .select2-container--open .select2-dropdown--below {
            width: 420px !important;
        }

        .selectplace {
            width: 20rem;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 2;
            font-size: 14px;
            font-family: 'Taviraj', serif;
        }
        .card-body{
            color: #444;
            line-height: 2;
            font-size: 14px;
            font-family: 'Taviraj', serif;
        }
        
        

    </style>
</head>

<body>
    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('#') ?>" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">#</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-5 grid-margin stretch-card">
                <div class="card shadow mb-10" >
                    <div class="card-header" id="card_2">
                        <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;หน้าแสดงชื่อรายงานทั้งหมด</h6>
                    </div>
                    
                    <div class="card-body">
                        <i class="fas fa-file-alt" style="font-size:24px">&nbsp;&nbsp;&nbsp;รายงาน </i></br>
                        <a href="<?php echo site_url('offc') ?>" class="breadcrumb-link" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รายงานนักศึกษาที่กระทำความทุกหอพัก (รายเดือน)</a></span> </br>
                         <a href="<?php echo site_url('offctime') ?>" class="breadcrumb-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รายงานนักศึกษาที่กระทำความผิดทั้งหลักสูตร (ตามช่วงเวลา)</a> </br>
                         
                        </div>
                    <div class="card-body">
                    <i class="fa fa-bar-chart" style="font-size:24px">&nbsp;&nbsp;&nbsp;กราฟ</i></br>
                    <a href="<?php echo site_url('offcate') ?>" class="breadcrumb-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนนักศึกษาที่กระทำความทุกหอพัก (รายเดือน) </br>
                    
                    </div>
                </div>
            </div>



        </div>




    </div>


</body>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {

        //showAll();

        $('#tblName').DataTable();
        autoFill: true
    });

    function showAll() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo site_url("#") ?>',
            async: false,
            dataType: 'json',
            success: function(data) {


            },
            error: function() {
                alert('ไม่มีข้อมูล');
            }
        });
    }
</script>

</html>

</body>