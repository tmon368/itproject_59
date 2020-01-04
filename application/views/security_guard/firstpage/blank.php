<link rel="stylesheet" href="<?php echo base_url('re/css/css_user_security.css'); ?>">

<head>
    <title>หน้าแรก</title>
    <style>

    </style>
</head>


<!-- Used CSS custom3.css -->
<div class="page-breadcrumb" id="nav_sty">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">หน้าแรก</li>
        </ol>
    </nav>
</div>

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card shadow mb-4">
        <div class="card-header" id="card_2">
            <h6 class="m-0 text-primary"><span id="icon_home"><i class="fa fa-home"></i></span>หน้าแรก</h6>
        </div>

        <div class="content">

            <div class="showdata">

                <div class="persondata">
                    <img src="<?php echo base_url('re/images/man.png') ?>" alt="Paris" width="40" height="40">
                    <div class="data">
                        <span id="name_student">นายสายัน สิริวิวัฒนากุล</span>
                        <div> <span id="text1">รหัสนักศึกษา:</span><span id="student_id">59124568</span></div>
                        <div> <span id="text2">ฐานความผิด:</span><span id="offense_name">ไม่สวมหมวกกันน็อค</span></div>
                    </div>

                    <div class="progress_bar">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                        </div>
                    </div>

                </div>

                

            </div>
            <div class="search">
                <form action="">
                    <label for="studentid">รหัสนักศึกษา</label>
                    <input type="text" class="form_input" name="" id="" placeholder="กรอกรหัสนักศึกษา">
                    <label for="date">วันที่</label>
                    <div class="date_time">
                        <select class="date_time_input" name="" id="data">
                            <option selected>วันที่</option>
                        </select>
                        <select class="date_time_input" name="" id="datemount">
                            <option selected>เดือน</option>
                        </select>
                        <select class="date_time_input" name="" id="dateyear">
                            <option selected>ปี</option>
                        </select>
                    </div>
                    <label for="sort">เรียงลำดับ</label>
                    <select class="sort" name="" id="">
                        <option selected>เรียงลำดับ</option>
                    </select>
                </form>
                <div class="btn_search">ค้นหา</div>
            </div>

        </div>




    </div>
</div>

<script>
$(document).ready(function() {

    setmount();
    setyear();
    //alert("Starting page ..");


});

function setmount() {
    var html = '';
    var monthNames = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม",
        "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
    ];
    console.log(monthNames.length);
    for (var i = 0; i < monthNames.length; i++) {
        var num = num + 1;
        html += '<option value="' + num + '"> ' + monthNames[i] + '</option>';
    }
    $('#datemount').html(html);

}

function setyear() {
    //var min = new Date().getFullYear,max = min+9;
    html = ''
    for (i = new Date().getFullYear(); i > 2015; i--) {
        html += '<option value="' + i + '"> ' + i + '</option>'
    }
    $('#dateyear').html(html);
    $('#dateyear2').html(html);


}

$(".submit").click(function() {

    var data = $('#serachdata').serialize();
    var option = $("input[name='option1']:checked").val();

    if (option == "1") {
        searchday(data);
    } else if (option == "2") {
        //startment
    } else if (option == "3") {
        //stament
    } else {
        //stament
    }
});

$("#option1day").click(function() {
    //alert("XXXX")
    $("#dateday").prop("disabled", false);
    $("#datemount").prop("disabled", true);
    $("#dateyear").prop("disabled", true);
    $("#dateyear2").prop("disabled", true);
});


$("#option2mount").click(function() {
    $("#datemount").prop("disabled", false);
    $("#dateyear").prop("disabled", false);
    $("#dateday").prop("disabled", true);
    $("#dateyear2").prop("disabled", true);
});

$("#option3year").click(function() {
    $("#dateyear2").prop("disabled", false);

    $("#dateday").prop("disabled", true); //option1
    $("#datemount").prop("disabled", true); //option2
    $("#dateyear").prop("disabled", true); //option2   
});

function searchday(data) {
    $.ajax({
        url: '<?php echo site_url("Security_guard_dashboard/getDashboardday") ?>',
        async: false,
        dataType: 'json',
        data: data, //ห้ามลืม
        success: function(data) {
            console.log(data);

            var html = '';
            var i = 0;
            $.each(data, function(key, value) {

                i++;
                html += '<tr>';
                html += '<td>' + i + '</td>';
                html += '<td>' + value.committed_date + '</td>';
                html += '<td>' + value.committed_time + '</td>';
                html += '<td>' + value.S_ID + '</td>';
                html += '<td>' + value.std_fname + ' ' + value.std_lname + '</td>';
                html += '<td>' + value.off_desc + '</td>';
                html += '<td> <a href="javascript:;" data=' + value.oh_ID +
                    ' class="show_data"><i class="fa fa-file-text" style="color:rgba(67, 135, 254);font-size:1.5rem;"></i></a></td>';
                html += '</tr>';

                $('#showdata').html(html);

            });

        }
    });

}

function searchmounth(data) {
    //stament


}
</script>