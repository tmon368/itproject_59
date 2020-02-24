<!doctype html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url('re/css/load_style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/css_view_proofargument.css') ?>">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<head>
  <title>ติดตามผลการยื่นอุธรณ์ความผิด | ระบบวินัยนักศึกษามหาวิทยาลัยวลัยลักษณ์</title>
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
        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">รายงานตัวผู้กระทำความผิด</a></li>
        <li class="breadcrumb-item active" aria-current="page">ติดตามผลการอุทธรณ์ความผิด</li>
      </ol>
    </nav>
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card shadow mb-4">
      <div class="card-header" id="card_2">
        <h6 class="m-0 text-primary"><span class=""></span>&nbsp;ติดตามผลการอุทธรณ์ความผิด</h6>
      </div>

      <div class="card-body">
        <div class="bootstrap-data-table-panel">
          <div class="table-responsive">
            <table id="style_table" class="table table-hover">
              <thead>
                <tr>
                  <th id="sort">ลำดับที่</th>
                  <th id="date">วันที่บันทึกหลักฐาน</th>
                  <th id="offcate">ฐานความผิด</th>
                  <th id="status">สถานะการแย้ง</th>
                  <th id="detail">รายละเอียด</th>
                </tr>
              </thead>
              <tbody id="showdata">
                <tr>
                  <td>1</td>
                  <td>20/02/2020</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function() {


    });
  </script>

</body>

</html>