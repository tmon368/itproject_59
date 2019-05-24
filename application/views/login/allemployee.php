<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<head>

  <title>เน€เธ�เธดเน�เธก เธฅเธ� เน�เธ�เน�เน�เธ� เธ�เน�เธญเธกเธนเธฅ admin</title>

</head>


<body>
  
  <?php
echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
echo '<label><a href="'.base_url().'index.php/loginuser/logout">Logout</a></label>';  
?>
<br>


<?php 
// ** เน€เธฃเธตเธขเธ�เธ”เธนเธ�เน�เธญเธกเธนเธฅ **
/*
<table border="1" width="80%" cellpadding="0">
    <thead>
    <tr>
      <th>id</th>
       <th>username</th>
        <th>password</th>
    </tr>
    </thead>
    <tbody>
<?php
foreach($records as $rec){ ?>
   <!--test select data in DB
   echo $rec->E_ID."      ".$rec->UName."     ".$rec->Pass."<br/>"; -->
    <tr>
            <td><?php echo $rec->E_ID; ?></td>
             <td><?php echo $rec->UName; ?></td>
              <td><?php echo $rec->Pass; ?></td>
          </tr>
          <?php } ?>
    </tbody>

  </table>
*/ ?>


<br><br>
<a href="<?php echo base_url(); ?>index.php/loginuser/select" > เธ”เธนเธ�เน�เธญเธกเธนเธฅ </a><br>




</body>

</html>
