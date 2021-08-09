<?php include('logincheck.php');  ?>
<html>
<head>
 <title>Performance tracker</title>
 
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
<body>
 
 <form method="post" action=logincheck.php>
<div class="input">
<label>Enter your Vardhaman email ID</label>
<input type="text" name="vemail" pattern=".+@vardhaman\.org" required>
</div>

<div class="input">
<label>Password :</label>
<input type="Password" name="password">
</div>
<div class="input">
<button type="submit" name="Register" class="btn">LOG IN</button>
</div>
<p> Not a member yet? <a href="register.php"> REGISTER</a><p>

</form>

</body>
  </html>
