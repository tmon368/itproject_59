<link rel="stylesheet" href="<?php echo base_url('re/css/css_notify_user_student.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('re/css/step_progress.css') ?>">
<link href="https://fonts.googleapis.com/css?family=Taviraj&display=swap" rel="stylesheet">

<head>
    <title>แจ้งเหตุกระทำความผิด | ระบบวินัยนักศึกษามหาวิทยาลัยวลัยลักษณ์</title>
    <style></style>
</head>

<body>
    <div class="container-fluid">

        <div class="page-breadcrumb" id="nav_sty">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url("Student_dashboard") ?>" class="breadcrumb-link">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">แจ้งเหตุการกระทำความผิด</li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-header" id="card_2">
                    <h6 class="m-0 text-primary"><span><i class="#"></i></span>&nbsp;รายการแจ้งเหตุการกระทำความผิด</h6>
                </div>


                <div>
                    <form action="#" name="form1" id="submitForm" method="post" enctype="multipart/form-data">
                        <input type="text" name="amount" value="100">
                        <input type="text" name="mytext2" id="mytext2">
                        <input type="file" name="pic_upload" id="pic_upload" />
                        <input type="submit" value="submit">
                    </form>
                </div>




            </div>
        </div>




</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#submitForm').submit(function(e){
			e.preventDefault();
			//var formData = new FormData(this);
            var formData = new FormData($(this)[0]);
			console.log(formData);
		
			$.ajax({
				type:'POST',
                url: '<?php echo base_url(); ?>index.php/Notifyoffense/test',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				//dataType: 'JSON',
				success:function(data){
                   console.log(data);
			}
		});
		
	  });
    });
</script>
