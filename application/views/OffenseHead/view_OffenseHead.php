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

      <!-- Modal เพิ่มข้อมูล -->

      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 650px!important;" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLongTitle">การอุทธรณ์ความผิด</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body ">
              <form action="" id="formadd" name="formadd" method="post">
                <center>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="input-group">
                        <label class="label_txt">วันที่บันทึกหลักฐาน. :&nbsp; </label>
                        <input type="text" style="background-color:transparent;border:0px;" name="proof_date" id="proof_date" value="<?php echo date('Y-m-d') ?>">
                        <input type="hidden" name="report_ID">
                        <input type="hidden" name="S_ID">
                        <input type="hidden" name="person_ID">
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="input-group">
                            <label class="label_txt">คำอธิบายการอุทธรณ์ความผิด <label class="text-danger">*</label>:&nbsp; </label>
                            <textarea name="Explanation" id="Explanation" rows="5" class="form-control" maxlength="100"></textarea>

                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="input-group">
                            <label class="label_txt">แนบไฟล์หลักฐานการอุทธรณ์ความผิด :&nbsp; </label>
                            <input type="file" name="proof_name" id="proof_name">


                          </div>
                        </div>


                </center>

            </div>
            <div class="modal-footer">
              <button name="insert" type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
              <button name="btnSave" id="btnSave" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
            </div>
            </form>
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

              <!--ส่วนฟอร์มแก้ไขข้อมูล-->
              <form action="" id="formdelete" method="get" class="needs-validation">

                <center>
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

                </center>
              </form>
            </div>


            <!--ข้อความยืนยันการลบข้อมูล-->
            <form action="" id="formdelete" method="post" class="needs-validation">
              <div class="modal-body" id="showdel">
                <center>
                  <label id="showddel"></label>
                  <input type="hidden" name="txtdelID">

                </center>

                <!------------------>
              </div>

            </form>
          </div>
        </div>
      </div>

      <!-- Modal ส่วน select -->

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


  <script>
    $(function() {
      showAll();

    });



    function showAll() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/OffenseHead/selectstudentoffensehead',
        async: false,
        dataType: 'json',
        success: function(data) {

          console.log (data);

          var html = '';
          var i=0;
          $.each(data, function(key, value) {
            i++
              html += '<tr>';
                html += '<td>'+ i +'</td>'
                html += '<td>'+ value.committed_date +'</td>';
                html += '<td>'+ value.off_desc +'</td>';
                html += '<td class="tddetail"><span class="fileicon " data="'+ value.offensestd_ID +'"><i class="fas fa-file-alt"></i></span></td>';
                html += '<td class="tdfile"><span class="file iconfile">ส่งหลักฐาน</span></td>';
              html += '</tr>';
          });

          $('#showdata').html(html);
        },
        error: function() {
          alert('');
        }
      });
    }

    $('#showdata').on('click', '.fileicon', function(){
      $('#show_detail_file').modal('show');
    });


    $('#showdata').on('click', '.btnSave', function() {
      var id = $(this).attr('data');
      $('#exampleModalCenter').modal('show');
      //prevent previous handler - unbind()
      $('#formadd').attr('action',
        '<?php echo base_url() ?>index.php/OffenseHead/insertproofargument');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/OffenseHead/selectoffenseforinsert',
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          // alert(data);
          console.log(data)
          // $('#showddel').html('ต้องการลบหมวดความผิด   "' + data.oc_desc + '"');
          $("#report_ID").html(data.report_ID);
          $("#S_ID").html(data.S_ID);
          $('#person_ID').html(data.person_ID);


        },
        error: function() {
          alert('ไม่สามารถลบข้อมูล');
        }
      });
    });

    $('#btnSave').click(function() {
      var url = $('#formadd').attr('action');
      var data = $('#formadd').serialize();

      $.ajax({
        type: 'ajax',
        method: 'post',
        url: url,
        data: data,
        async: false,
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            $('#exampleModalCenter').modal('hide');
            $('#formadd')[0].reset();
            $('.alert-success').html('ยื่นอุธรณ์เรียบร้อย').fadeIn().delay(2000).fadeOut('slow');
            showAll();
          } else {

          }
        },
        error: function() {
          //alert('id นี้ถูกใช้งานแล้ว');
          $('#edit_file').modal('hide');
          $('#formadd')[0].reset();
          $('.alert-danger').html('ไม่สามารถแก้ไขได้').fadeIn().delay(2000).fadeOut('slow');
          showAll();
        }
      });
    });

    $('#showdata').on('click', '.btnbutton', function() {
      var id = $(this).attr('data');
      // alert(id)
      $('#exampleModalCenter').modal('show');
      $('#formadd').attr('action', '<?php echo base_url() ?>index.php/OffenseHead/insertproofargument');

      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>index.php/OffenseHead/selectoffenseforinsert',
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          $('input[name=report_ID]').val(data.report_ID);
          $('input[name=S_ID]').val(data.S_ID);
          $('input[name=person_ID]').val(data.person_ID);


        },
        error: function() {
          alert('ไม่สามารถแก้ไขข้อมูล');
        }
      });
    });
  </script>