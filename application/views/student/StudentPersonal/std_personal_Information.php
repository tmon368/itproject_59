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
      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">รหัสนักศึกษา : &nbsp;&nbsp; </a></li>
      <li id="msg1"> </li>
    </ol>
  </nav>
</div>
<div class="page-breadcrumb" id="nav_sty">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">ชื่อ : &nbsp;&nbsp; </a></li>
      <li id="msg2"> </li>
    </ol>
  </nav>
</div>
<div class="page-breadcrumb" id="nav_sty">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">นามสกุล : &nbsp;&nbsp; </a></li>
      <li id="msg3"> </li>
    </ol>
  </nav>
</div>

    
    
    
    
   
   
</body>

</html>
<script>
    $(document).ready(function() {
    	 showAll();
        //$('[data-toggle="popover"]').popover();

        
        
        
    function showAll() {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/Student_dashboard/selectstudent',
                    async: false,
                    dataType: 'json',
                    success: function(data) {

                    	$("#msg1").html(data[0].S_ID);
                    	$("#msg2").html(data[0].std_fname);
                    	$("#msg3").html(data[0].std_lname);

                    },
                    error: function() {
                        alert('ไม่มีข้อมูล');
                    }
                });
            }

    });
</script>