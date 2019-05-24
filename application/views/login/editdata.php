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

  <H1>เน�เธ�เน�เน�เธ�เธ�เน�เธญเธกเธนเธฅ </H1><br>
  <form method="post" action="<?php echo base_url().'index.php/loginuser/editdata?id='.$user_data[0]->E_ID;?>">
            <br>
            username :<input type="text" name="username" value="<?php echo $user_data[0]->UName; ?>"  required><br><br>
            password :<input type="text"  name="password" value="<?php echo $user_data[0]->Pass; ?>"  required>
            <br><br>
            <button  name="insert" type="submit">เธขเธทเธ�เธขเธฑเธ�</button>
            <button  name="insert" type="reset">เธขเธ�เน€เธฅเธดเธ�</button>
 
			</form>




</body>

</html>
