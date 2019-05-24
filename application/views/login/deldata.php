<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<head>

  <title>เน�เธ�เน�เน�เธ�เธ�เน�เธญเธกเธนเธฅ admin</title>

</head>
<body>
  
  <?php 
  echo '<label><a href="'.base_url().'index.php/loginuser/select">เธ�เธฅเธฑเธ�</a></label>'; 

  ?>
<br>

<!--foreach($user_data as $row){ -->

  <H1>เธฅเธ�เธ�เน�เธญเธกเธนเธฅ </H1><br>
  
            <br>
            Username : <?php echo $user_data[0]->UName; ?><br><br>
            Password : <?php echo $user_data[0]->Pass; ?>
            <br><br>
           
            <?php 
           echo '<label><a href="'.base_url().'index.php/loginuser/deldata?id='.$user_data[0]->E_ID.'">[เธฅเธ�เธ�เน�เธญเธกเธนเธฅ]</a></label>'; 
           ?>        
           <?php 
           echo '<label><a href="'.base_url().'index.php/loginuser/select">[เธขเธ�เน€เธฅเธดเธ�]</a></label>'; 
           ?>
           





</body>

</html>
