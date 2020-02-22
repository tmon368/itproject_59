<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_OffenseHead.css') ?>">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

<head>
  <title>รายงานกระทำความผิด | ระบบวินัยนักศึกษามหาวิทยาลัยวลัยลักษณ์</title>
  <style>
    input.largerCheckbox {
      width: 20px;
      height: 20px;
    }

    .content {
      font-family: 'Sarabun', sans-serif;
    }

    .text_position {
      padding-left: 0.9rem;
      font-size: 0.9rem;
    }

    label.label_txt {
      padding: inherit;
      font-weight: 900;
    }
  </style>
</head>

<body>
  <meta charset="UTF-8">
  <div class="page-breadcrumb" id="nav_sty">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">รายงานกระทำความผิด</li>

      </ol>
    </nav>
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card shadow mb-4">
      <div class="card-header" id="card_2">
        <h6 class="m-0 text-primary"><span class=""></span>&nbsp;รายงานกระทำความผิด</h6>
      </div>

      <div class="card-body">
        <div class="bootstrap-data-table-panel">
          <div class="table-responsive">
            <table id="style_table" class="table table-hover">
              <thead>
                <tr>
                  <th>ลำดับที่</th>
                  <th>วันที่กระทำความผิด</th>
                  <th>ฐานความผิด</th>
                  <th>รายละเอียด</th>
                  <th>ส่งหลักฐานอุทธรณ์</th>
                </tr>
              </thead>
              <tbody id="showdata">


              </tbody>
            </table>

          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="modal fade" id="show_detail_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 650px!important;" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLongTitle"><span><i style="color:rgba(235,99,102,1.00)"></i></span>ใบสั่งการกระทำความผิด</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body content">
          <div class="row">
            <div class="col-sm-4">
              <div class="input-group">
                <label class="label_txt">วันที่กระทำผิด:&nbsp;</label>
                <p class="text_position" id="committed_date"></p>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="input-group">
                <label class="label_txt">เวลา:&nbsp;</label>
                <p class="text_position" id="committed_time"></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="input-group">
                <label class="label_txt">สถานที่:&nbsp;</label>
                <p class="text_position" id="place_name"></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="input-group">
                <label class="label_txt">คำอธิบายบริเวณที่เกิดเหตุ:&nbsp;</label>
                <p class="text_position" id="explanation"></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="input-group">
                <label class="label_txt">ฐานความผิด:&nbsp;</label>
                <p class="text_position" id="off_desc"></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="input-group">
                <label class="label_txt">ไฟล์หลักฐาน :&nbsp;</label>
                <p class="text_position" id="evidenre_name"></p>
              </div>
            </div>
          </div>


        </div>

      </div>
    </div>
  </div>



  <div class="modal fade" id="file_offhead" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 650px!important;" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLongTitle">การอุทธรณ์ความผิด</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="#" id="form-file" name="form-file" method="post" enctype="multipart/form-data">
          <div class="modal-body ">

            <div class="row">
              <div class="col-sm-12">
                <label for="datasubmit" class="label">วันที่บันทึกหลักฐาน:</label><span class="datasubmit"></span>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <label for="explanfile" class="label">คำอธิบายการอุทธรณ์ความผิด:<span class="fixdata">*</span></label>
                <textarea class="form-control" name="explanation" id="explanation" cols="30" rows="5" required></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <label for="explanfile" class="label">แนบไฟล์หลักฐาน:<span class="fixdata">*</span></label>
                <input type="file" name="myFile" id="myFile" class="InputFile" required>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12" style="text-align: right;">
                <span class="title2"><i class="fas fa-exclamation-circle"></i>แนะนำวิธีใช้: รองรับการอัพโหลดไฟล์ประเภท pdf เท่านั้น</span>
              </div>
            </div>


            <div class="modal-footer">
              <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
              <button name="btnedit" id="btnedit" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  </div>


  <script>
    $(document).ready(function() {
      showAll();
      test();
      var file = document.getElementById('myFile');

      file.onchange = function(e) {
        var ext = this.value.match(/\.([^\.]+)$/)[1];
        switch (ext) {
          case 'pdf':
            break;
          default:
            alert('ระบบรองรับเฉพาะไฟล์ประเภท pdf ไฟล์เท่านั้น');
            this.value = '';
        }
      };
    });

    function test() {
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/OffenseHead/selectoffenseforinsert',
        data: {
          id: 37
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          console.log (data);
        }
      });
    }



    function showAll() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/OffenseHead/selectstudentoffensehead',
        async: false,
        dataType: 'json',
        success: function(data) {
          console.log(data);
          var html = '';
          var i = 0;
          $.each(data, function(key, value) {
            i++
            html += '<tr>';
            html += '<td>' + i + '</td>'
            html += '<td>' + value.committed_date + '</td>';
            html += '<td>' + value.off_desc + '</td>';
            html += '<td class="tddetail"><span class="fileicon " data="' + value.offensestd_ID + '"><i class="fas fa-file-alt"></i></span></td>';
            html += '<td class="filetd"><img src="<?php echo base_url('re/images/folder.png') ?>" alt="" class="ImgFolder" data="'+value.offensestd_ID+'"></td>';
            html += '</tr>';
          });

          $('#showdata').html(html);
        },
        error: function() {
          alert('');
        }
      });
    }

    $("#form-file").on("submit", function(e) {
      e.preventDefault();

      var formData = new FormData(document.getElementById("form-file"));

      $.ajax({
        url: '<?php echo base_url(); ?>index.php/OffenseHead/insertproofargument',
        cache: false,
        data: formData,
        processData: false,
        contentType: false,
        type: "POST",
        success: function(data) {
          console.log(data);
        }
      });
    });

    $('#showdata').on('click', '.fileicon', function() {
      $('#show_detail_file').modal('show');

    });


    $('#showdata').on('click', '.ImgFolder', function() {
      $('#file_offhead').modal('show');
      var date = new Date();
      var data_submit_file = date.getDate() + '-' + (date.getMonth() + 1) + '-' + date.getFullYear();
      $('.datasubmit').text(" " + data_submit_file);
      //var id = $(this).attr('data');
    });
  </script>