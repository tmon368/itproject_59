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

    <title>สถานที่ admin</title>

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
                    <h5>New Products</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                            <li><i class="feather icon-maximize full-card"></i></li>
                            <li><i class="feather icon-minus minimize-card"></i></li>
                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                            <li><i class="feather icon-trash close-card"></i></li>
                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card table-card">

                    <div class="card-block p-b-0">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Product Code</th>
                                        <th>Customer</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sofa</td>
                                        <td>#PHD001</td>
                                        <td>abc@gmail.com</td>
                                        <td><label class="label label-danger">Out Stock</label></td>
                                        <td>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Computer</td>
                                        <td>#PHD002</td>
                                        <td>cdc@gmail.com</td>
                                        <td><label class="label label-success">In Stock</label></td>
                                        <td>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mobile</td>
                                        <td>#PHD003</td>
                                        <td>pqr@gmail.com</td>
                                        <td><label class="label label-danger">Out Stock</label></td>
                                        <td>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Coat</td>
                                        <td>#PHD004</td>
                                        <td>bcs@gmail.com</td>
                                        <td><label class="label label-success">In Stock</label></td>
                                        <td>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Watch</td>
                                        <td>#PHD005</td>
                                        <td>cdc@gmail.com</td>
                                        <td><label class="label label-success">In Stock</label></td>
                                        <td>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shoes</td>
                                        <td>#PHD006</td>
                                        <td>pqr@gmail.com</td>
                                        <td><label class="label label-danger">Out Stock</label></td>
                                        <td>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                        </td>
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