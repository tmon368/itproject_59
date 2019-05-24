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
<H1>เน€เธ�เธดเน�เธกเธ�เน�เธญเธกเธนเธฅ </H1><br>
  
<form method="post" action="<?php echo base_url(); ?>index.php/loginuser/insert">
            <br>
            username :<input type="text" name="username"   placeholder="เธ�เธทเน�เธญเธ�เธนเน�เน�เธ�เน�เธ�เธฒเธ�" required><br><br>
            password :<input type="password"  name="password"   placeholder="เธฃเธซเธฑเธชเธ�เน�เธฒเธ�" required>
            <br><br>
            <button  name="insert" type="submit">เธขเธทเธ�เธขเธฑเธ�</button>
            <button  name="insert" type="reset">เธขเธ�เน€เธฅเธดเธ�</button>
 
			</form>





</body>

</html>
