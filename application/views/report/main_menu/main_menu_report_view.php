<link rel="stylesheet" href="<?php echo base_url('re/css/scss_main_menu.scss') ?>">

<head>
    <title> ออกรายงาน | ระบบวินัยนักศึกษา</title>
</head>

<body>

    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('#') ?>" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ออกรายงาน</li>
                </ol>
            </nav>
        </div>

        <div class="row MainMenu">
            <div class="col-sm-6 ReportGraph">
                <div><span class="icongraph"><i class="fa fa-area-chart"></i></span></div>
                <div class="TextStyReport">ออกรายงานแบบกราฟ</div>
            </div>
            <div class="col-sm-6 ReportTable">
                <div><span class="icongraph"><i class="fa fa-table"></i></span></div>
                <div class="TextStyReport">ออกรายงานแบบตาราง</div>
            </div>
        </div>

    </div>
    <script>
    $(document).ready(function() {


    });
    
    $(".ReportTable").click(function() {
        window.location.href = "<?php echo site_url('ReportTable')?>";
    });



    </script>