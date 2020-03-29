<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_show_activity_.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/normalize.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_report_offencase.css') ?>">



<head>
    <!-- <title> รับรองกิจกรรมบำเพ็ญประโยชน์ | ระบบวินัยนักศึกษา</title> -->
</head>
<script>
    var dataset = [];
    var dataservices = [];
</script>

<body>



    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('Teacher_dashboard') ?>" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ออกรายงาน</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-11 grid-margin stretch-card">
                <div class="card shadow mb-4">
                    <div class="card-header" id="card_2">
                        <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;รายงานนักศึกษาที่กระทำความผิดแยกตามหมวดความผิด ประจำเดือน มีนาคม 2563</h6>
                    </div>
                    <div class="card-body">
                        
                        <table id="data_activity_participants" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                     <th >ลำดับ</th>
                                    <th>รหัสนักศึกษา</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>คะแนนคงเหลือ</th>
                                    <th>หลักสูตร</th>
                                   <th>ความผิด</th>
                                    <th>สถานะการกระทำผิด</th>
                                    
                                    
                                    
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2 grid-margin stretch-card">
                <div>
                   
                    <div class="Print"><img src="<?php echo base_url('re/images/print.png') ?>" alt="center" class="ImgPrint" style="max-width:45px"></div>

                </div>
            </div>
        </div>



    </div>



    <script type="text/javascript">
        $(document).ready(function() {
            //select_offencecate_type_6();
            showall();
            var groupColumn =4;

            $('#data_activity_participants').DataTable({
                "bDestroy": true,
                "data": dataset,
                columns: [{
                        data: 'no'
                    },
                    {
                        data: 'S_ID'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'score'
                    },
                    {
                        data: 'cur_name'
                    },
                    {
                        data: 'off_desc'
                    },
                    {
                        data: 'status'
                    }
                ],
                columnDefs: [{
                    orderable: false,
                    targets: [2, 3, 4],
                }, {
                    "visible": false,
                    "targets": groupColumn
                }],
                "order": [
                    [groupColumn, 'asc']
                ],
                rowGroup: {
                    dataSrc: 'cur_name',
                    startRender: null,
                    endRender: function(rows, group) {
                        return group + ' (' + rows.count() + ')';
                    },
                    
                },
                "displayLength": 5,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(groupColumn, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            console.log(group);
                            $(rows).eq(i).before('<tr class="group HeaderGroup"><td colspan="8">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });


        });

        // function select_offencecate_type_6() {
        //     var i = 0;
        //     data = {
        //         oc_ID: 6
        //     }

        //     $.ajax({
        //         url: '<?php echo site_url('HeadOffenceCate/getOC_ID') ?>',
        //         type: 'GET',
        //         async: false,
        //         dataType: 'json',
        //         data: data,
        //         success: function(data) {
        //             console.log(data);
        //             $.each(data, function(key, value) {
        //                 dataset.push({
        //                     no: value.seq_no,
        //                     S_ID: value.S_ID,
        //                     name: value.std_fname + " " + value.std_lname,
        //                     score: value.behavior_score,
        //                     cur_name: value.cur_name,
        //                     dname: value.dname,
        //                     off_desc: value.off_desc
                            
        //                 })
        //             });
        //             console.log(dataset);
        //         },
        //         error: function() {
        //             alert('ไม่มีข้อมูล');
        //         }
        //     });
        // }
        // $(function() {


        // });
        function showall() {
            var i = 0;
            data = {
                
            }

            $.ajax({
                url: '<?php echo site_url('ReportDataCurriculumHeader/showall') ?>',
                type: 'GET',
                async: false,
                dataType: 'json',
                data: data,
                success: function(data) {
                    console.log(data);
                    $.each(data, function(key, value) {
                        dataset.push({
                            no: value.seq_no,
                            S_ID: value.S_ID,
                            name: value.std_fname + " " + value.std_lname,
                            score: value.behavior_score,
                            cur_name: value.cur_name,
                            off_desc: value.off_desc,
                            status:value.statusoff,
                            
                         
                           
                            
                        })
                    });
                    console.log(dataset);
                },
                error: function() {
                    alert('ไม่มีข้อมูล');
                }
            });
        }
        $(function() {


        });
    </script>
<div lass="col-lg-10 grid-margin stretch-card">
สถานะการกระทำผิด </br>
    0: รอการรายงานตัว 1: รอการอนุมัติหลักฐาน 2: หมดเขตการรายงานตัว กรุณาติดต่อ เจ้าหน้าที่ 3: รอการอบรม </br>
    4: รอการบำเพ็ญประโยชน์ 5: รอการรับรองกิจกรรม 6: เกินระยะเวลาการบำเพ็ญประโยชน์ กรุณาดิตต่อเจ้าหน้าที่ 
</div>
</body>