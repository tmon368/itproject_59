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
                        <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;รายงานนักศึกษาที่กระทำความผิด ประจำเดือน มีนาคม 2563</h6>
                    </div>
                    <div class="card-body">
                        <table id="style_table" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th id="idsort">ลำดับ</th>
                                    <th align="center">คะแนนที่เหลือ</center></th>
                                    <th align="center">รหัสนักศึกษา </center>
                                    </th>
                                    <th align="center">ชื่อ</center></th>
                                    <th align="center">สกุล</center></th>
                                   
                                    
                                   
                                    <th align="center">ฐานความผิด</center></th>


                                </tr>
                            </thead>
                            <tbody id="showdata">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
                <div>
                    
                    <div class="Print"><img src="<?php echo base_url('re/images/print.png') ?>" alt="center" class="ImgPrint" style="max-width:30px"></div>

                </div>

            </div>


        </div>




    </div>


</body>

<div class="test" id="tdata">
    XXXXXX | YYYYY
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {

        showAll();
        //getOffenseCateSetInDropdownlists();
        $('#tblName').DataTable();
        autoFill: true

        function showAll() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>index.php/ReportTeacher/showAll',
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
                            '<td align="center">' + data[i].S_ID + '</center></td>' +
                            '<td  align="center">' + data[i].behavior_score + '</center></td>' +
                            '<td> ' + data[i].std_fname + '</td>' +
                            '<td> ' + data[i].std_lname + '</td>' +
                            
                            //         '<td> <left>' + data[i].dname + '</left></td>' +
                            //  '<td align="right">' + data[i].point + '</right></td>' +
                            //    '<td align="right">' + data[i].num_off + '</td>' +
                           // '<td align="left"> ' + data[i].cur_name + '</left></td>' +
                            //'<td align="center"> ' + data[i].room_number + '</center></td>' +
                            '<td align="left"> ' + data[i].off_desc + '</left></td>' +


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
    
      



        $('.Print').click(function() {
            $('#tdata').print()
        });

        $(".test").find('.ImgPrint').on('click', function() {
            //Print ele2 with default options
            $(".test").print({
                mediaPrint: true,
                stylesheet: "https:fonts.googleapis.com/css?family=Sarabun&display=swap"
            });
        });
    });
</script>

</html>

</body>