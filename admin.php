<html>
 <head>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <div class="heading">
             <h2>HEY!! I AM ADMIN</h2>
            </div>
<form method="post" action=>

<div class="input">
<button type="button" name="sname" class="btn">SORT BY NAME</button>
</div>
<div class="input">
<button type="button" name="pyear" class="btn">SORT BY PASSED OUT YEAR</button>
</div>

<div class="input">
<button type="button" name="hscore" class="btn">SORT BY HACKER RANK SCORE</button>
</div>
<div class="input">
<button type="button" name="chefscore" class="btn">SORT BY CODECHEF SCORE</button>
</div>
<div class="input">
<button type="button" name="forcescore" class="btn">SORT BY CODEFORCES SCORE</button>
</div>
<div class="input">
<button type="button" name="chefrat" class="btn">SORT BY CODECHEF RATING</button>
</div>
<div class="input">
<button type="button" name="forcerating" class="btn">SORT BY CODEFORCES RATING</button>
</div>
<div class="input">
<button type="button" name="spoj" class="btn">SORT BY SPOJ SCORE</button>
</div>
</form>
</center>
 </body>
  </html>

<?php
if(isset($_POST['sname'])){
    $conn= new mysqli('localhost','root','','register');
$st=$conn->prepare("select * from student order by 'name'");
}


 