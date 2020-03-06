<link rel="stylesheet" href="<?php echo base_url('re/css/css_notify_user_student.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/step_progress.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/inputfile.css') ?>">




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
    </style>
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
       
        <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card shadow mb-4">
                    <div class="card-header" id="card_2">
                        <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;รายงานแสดงสถานที่ที่นักศึกษากระทำความผิด</h6>
                    </div>

                    <div class="card-body">
                        <table id="style_table" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th id="idsort">ลำดับ</th>
                                    <th>รหัสนักศึกษา</th>
                                    <th id="detail_activity_regis">ชื่อ</th>
                                    <th id="person_control">สกุล</th>
                                    <th>คะแนนที่เหลือ</th>
                                    <th>หลักสูตร</th>
                                    <th>หอพัก</th>

                                </tr>
                            </thead>
                            <tbody id="showdata">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2 grid-margin stretch-card">
                <div>
                    <select name="placeid" id="placeid" class="form-control"></select>
                    <button type="button" class="" id="search_data">ค้นหา</button>
                    <div class="Print"><img src="<?php echo base_url('re/images/print.png') ?>" alt="center" class="ImgPrint" style="max-width:30px"></div>

                </div>
            </div>
          

        </div>




    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {

        showAll();
        getPlaceSetInDropdownlists();
        $('#tblName').DataTable();
        autoFill: true

        function showAll() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>index.php/ReportDisciplineOfficerPlace/showAll',
                async: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var point = 100;
                    var html = '';
                    var n = 1;

                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +

                            '<td> <center>' + n + ' </center></td>' +
                            '<td> <center>' + data[i].S_ID + '</center></td>' +
                            '<td> ' + data[i].std_fname + '</td>' +
                            '<td> ' + data[i].std_lname + '</td>' +
                            '<td  align="right">' + data[i].behavior_score + '</right></td>' +
                            //         '<td> <left>' + data[i].dname + '</left></td>' +
                            //  '<td align="right">' + data[i].point + '</right></td>' +
                            //    '<td align="right">' + data[i].num_off + '</td>' +
                            '<td> <left>' + data[i].cur_name + '</left></td>' +
                            '<td> <left>' + data[i].dname + '</left></td>' +



                            '</tr>';
                        n += 1;
                    }
                    $('#tdata').empty();
                    $('#showdata').html(html);

                    //$('#dataall').html(num-1);
                },
                error: function() {
                    alert('ไม่มีข้อมูล');
                }
            });
        }

        function getPlaceSetInDropdownlists() {
            var htmlcode = '';
            $.ajax({
                url: '<?php echo site_url('getOffenseCate/selectPlace') ?>',
                type: 'GET',
                async: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                   htmlcode += '<option>เลือกสถานที่</option>'
                     $.each(data, function(key, value) {
                     htmlcode += '<option value="'+ value.place_ID +'">'+ value.place_name +'</option>'
                     })
                   $('#placeid').html(htmlcode);
                },
                error: function() {
                    alert('ไม่มีข้อมูล');
                }
            });
        }
        $('#search_data').click(function() {
            var id = $('#placeid').val();
            var i=0;
            data = {
                place_id:id
            }
            $.ajax({
                url: '<?php echo site_url('ReportDisciplineOfficerPlace/getPlace_ID') ?>',
                type: 'GET',
                async: false,
                dataType: 'json',
                data:data,
                success: function(data) {
                    console.log(data);
                    var htmlcode = '';
                    $.each(data, function(key, value) {
                        i++;
                        htmlcode += '<tr>';
                        htmlcode += '<td>'+i+'</td>';
                        htmlcode += '<td>'+ value.S_ID +'</td>';
                        htmlcode += '<td>'+ value.std_fname +'</td>';
                        htmlcode += '<td>'+ value.std_lname +'</td>';
                        htmlcode += '<td>'+ value.behavior_score +'</td>';
                        htmlcode += '<td>'+ value.cur_name +'</td>';
                        htmlcode += '<td>'+ value.dname +'</td>';
                    })
                    $('#showdata').html(htmlcode);
                },
                error: function() {
                    alert('ไม่มีข้อมูล');
                }
            });
    });
});
</script>

</html>

</body>