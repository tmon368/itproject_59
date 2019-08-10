<!doctype html>
<html lang="en">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<center>
    <strong>
        <div class="alert alert-success" role="alert" style="display: none;"></div>
    </strong>
    <strong>
        <div class="alert alert-danger" role="alert" style="display: none;"></div>
    </strong>
    <strong>
        <div class="alert alert-warning" role="alert" style="display: none;"></div>
    </strong>
</center>

<head>

    <title>...</title>

</head>

<body>
    <meta charset="UTF-8">

    <div class="page-breadcrumb" id="nav_sty">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <!--<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">จัดการข้อมูลพื้นฐาน</a></li>-->
                <li class="breadcrumb-item active" aria-current="page">หน้าแรก</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">

                <div class="card-header">
                    <h5 class="m-0 text-primary">รายการความผิดของคะแนนที่โดนหัก</h5>
                </div>
                <div class="card table-card">
                    <div class="card-block p-b-0">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>วันที่ทำผิด</th>
                                        <th>จำนวนครั้ง</th>
                                        <th>ฐานความผิด</th>
                                        <th>คะแนนที่หัก</th>
                                        <th>สถานะการกระทำความผิด</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>22/12/62</td>
                                        <td>5</td>
                                        <td>ชับขี่หรือซ้อนท้ายโดยไม่สวมหมวกนิรภัย</td>
                                        <td>10</td>
                                        <td><span class="badge badge-warning">รอการอบรม</span></td>

                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>19/12/61</td>
                                        <td>4</td>
                                        <td>ชับขี่หรือซ้อนท้ายโดยไม่สวมหมวกนิรภัย</td>
                                        <td>0</td>
                                        <td><span class="badge badge-secondary">คืนคะแนนเรียบร้อยแล้ว</span></td>

                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>10/06/60</td>
                                        <td>1</td>
                                        <td>ขับรถโดยไม่มีใบอนุญาติขับขี่</td>
                                        <td>0</td>
                                        <td><span class="badge badge-secondary">คืนคะแนนเรียบร้อยแล้ว</span></td>

                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>01/12/59</td>
                                        <td>2</td>
                                        <td>ขับรถย้อนศร</td>
                                        <td>0</td>
                                        <td><span class="badge badge-secondary">คืนคะแนนเรียบร้อยแล้ว</span></td>

                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>30/10/59</td>
                                        <td>1</td>
                                        <td>ขับรถโดยไม่มีใบอนุญาติขับขี่</td>
                                        <td>0</td>
                                        <td><span class="badge badge-secondary">คืนคะแนนเรียบร้อยแล้ว</span></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4">

            <div class="card comp-card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-25">คะแนนความประพฤติ</h6>

                            <!--Progress Bar-->
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:100%"></div>
                            </div>
                            <h3 class="f-w-700 text-c">100</h3>
                            <p class="m-b-0">สถานะนักศึกษา: <font color="green">ปกติ</font> &nbsp;
                                <a href="#" title="หมายเหตุ" data-toggle="popover" data-trigger="focus" data-content="คะแนนคงเหลือ 90 คะแนน / คะแนนที่หัก 10 คะแนน"><span><i class="fa fa-question-circle" id="ExpScr"></i></span></a></p>

                        </div>
                        <div class="col-auto">
                            <h2><i class="fa fa-user icon"></i></h2>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>