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
<button type="submit" name="sname" class="btn">SORT BY NAME</button>
</div>
<div class="input">
<button type="submit" name="pyear" class="btn">SORT BY PASSED OUT YEAR</button>
</div>

<div class="input">
<button type="submit" name="hscore" class="btn">SORT BY HACKER RANK SCORE</button>
</div>
<div class="input">
<button type="submit" name="chefscore" class="btn">SORT BY CODECHEF SCORE</button>
</div>
<div class="input">
<button type="submit" name="forcescore" class="btn">SORT BY CODEFORCES SCORE</button>
</div>
<div class="input">
<button type="submit" name="chefrat" class="btn">SORT BY CODECHEF RATING</button>
</div>
<div class="input">
<button type="submit" name="forcerating" class="btn">SORT BY CODEFORCES RATING</button>
</div>
<div class="input">
<button type="submit" name="spoj" class="btn">SORT BY SPOJ SCORE</button>
</div>
</form>
</center>
 </body>
  </html>

<?php
 $conn= new mysqli('localhost','root','','register');
if(isset($_POST['sname'])){

$stmt=$conn->prepare("select * from student ORDER BY name");
$stmt->execute();
$stmt_result=$stmt->get_result();
echo "<table border='1'>
<tr>
<th>VEMAIL</th>
<th>NAME</th>
<th>ROLLNO</th>
<th>PHNO</th>
<th>BRANCH</th>
<th>YEAR</th>
<th>CODECHEF_SCORE</th>
<th>CODEFORCES_SCORE</th>
</tr>";
while(($stmt_result->num_rows)>0){
$row=$stmt_result->fetch_assoc();
            echo "<tr>";
                echo "<td>" . $row['vemail'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['rno'] . "</td>";
                echo "<td>" . $row['num'] . "</td>";
		echo "<td>" . $row['branch'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['codechef'] . "</td>";
                echo "<td>" . $row['codeforces'] . "</td>";
            echo "</tr>";


}
}
if(isset($_POST['pyear'])){

$stmt=$conn->prepare("select * from student ORDER BY year");
$stmt->execute();
$stmt_result=$stmt->get_result();
echo "<table border='1'>
<tr>
<th>VEMAIL</th>
<th>NAME</th>
<th>ROLLNO</th>
<th>PHNO</th>
<th>BRANCH</th>
<th>YEAR</th>
<th>CODECHEF_SCORE</th>
<th>CODEFORCES_SCORE</th>
</tr>";
while(($stmt_result->num_rows)>0){
$row=$stmt_result->fetch_assoc();
            echo "<tr>";
                echo "<td>" . $row['vemail'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['rno'] . "</td>";
                echo "<td>" . $row['num'] . "</td>";
		echo "<td>" . $row['branch'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['codechef'] . "</td>";
                echo "<td>" . $row['codeforces'] . "</td>";
            echo "</tr>";


}
}
if(isset($_POST['chefscore'])){

$stmt=$conn->prepare("select * from student ORDER BY codechef");
$stmt->execute();
$stmt_result=$stmt->get_result();
echo "<table border='1'>
<tr>
<th>VEMAIL</th>
<th>NAME</th>
<th>ROLLNO</th>
<th>PHNO</th>
<th>BRANCH</th>
<th>YEAR</th>
<th>CODECHEF_SCORE</th>
<th>CODEFORCES_SCORE</th>
</tr>";
while(($stmt_result->num_rows)>0){
$row=$stmt_result->fetch_assoc();
            echo "<tr>";
                echo "<td>" . $row['vemail'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['rno'] . "</td>";
                echo "<td>" . $row['num'] . "</td>";
		echo "<td>" . $row['branch'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['codechef'] . "</td>";
                echo "<td>" . $row['codeforces'] . "</td>";
            echo "</tr>";


}
}
if(isset($_POST['chefrat'])){

$stmt=$conn->prepare("select * from student ORDER BY codechef");
$stmt->execute();
$stmt_result=$stmt->get_result();
echo "<table border='1'>
<tr>
<th>VEMAIL</th>
<th>NAME</th>
<th>ROLLNO</th>
<th>PHNO</th>
<th>BRANCH</th>
<th>YEAR</th>
<th>CODECHEF_SCORE</th>
<th>CODEFORCES_SCORE</th>
</tr>";
while(($stmt_result->num_rows)>0){
$row=$stmt_result->fetch_assoc();
            echo "<tr>";
                echo "<td>" . $row['vemail'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['rno'] . "</td>";
                echo "<td>" . $row['num'] . "</td>";
		echo "<td>" . $row['branch'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['codechef'] . "</td>";
                echo "<td>" . $row['codeforces'] . "</td>";
            echo "</tr>";


}
}
if(isset($_POST['forcescore'])){

$stmt=$conn->prepare("select * from student ORDER BY codeforces");
$stmt->execute();
$stmt_result=$stmt->get_result();
echo "<table border='1'>
<tr>
<th>VEMAIL</th>
<th>NAME</th>
<th>ROLLNO</th>
<th>PHNO</th>
<th>BRANCH</th>
<th>YEAR</th>
<th>CODECHEF_SCORE</th>
<th>CODEFORCES_SCORE</th>
</tr>";
while(($stmt_result->num_rows)>0){
$row=$stmt_result->fetch_assoc();
            echo "<tr>";
                echo "<td>" . $row['vemail'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['rno'] . "</td>";
                echo "<td>" . $row['num'] . "</td>";
		echo "<td>" . $row['branch'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['codechef'] . "</td>";
                echo "<td>" . $row['codeforces'] . "</td>";
            echo "</tr>";


}
}
if(isset($_POST['forcerating'])){

$stmt=$conn->prepare("select * from student ORDER BY codeforces");
$stmt->execute();
$stmt_result=$stmt->get_result();
echo "<table border='1'>
<tr>
<th>VEMAIL</th>
<th>NAME</th>
<th>ROLLNO</th>
<th>PHNO</th>
<th>BRANCH</th>
<th>YEAR</th>
<th>CODECHEF_SCORE</th>
<th>CODEFORCES_SCORE</th>
</tr>";
while(($stmt_result->num_rows)>0){
$row=$stmt_result->fetch_assoc();
            echo "<tr>";
                echo "<td>" . $row['vemail'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['rno'] . "</td>";
                echo "<td>" . $row['num'] . "</td>";
		echo "<td>" . $row['branch'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['codechef'] . "</td>";
                echo "<td>" . $row['codeforces'] . "</td>";
            echo "</tr>";


}
}




?>
 