<?php
session_start(); 
?>
<html>
<head>
<style>
table
{
border-style:solid;
border-width:2px;
border-color:pink;
}
h1 {
  background-color:green;
  color: white;
}
</style>

</head>
<body bgcolor="#EEFDEF">
<center>
<h1>You Have Logged in Successfully..!</h1>
</center>
<?php
if($_GET){
$email=$_GET['user'];
}
$_SESSION["email"]=$email;
$conn= new mysqli('localhost','root','','register');
$stmt= $conn->prepare("select * from student where vemail=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt_result=$stmt->get_result();
$data=$stmt_result->fetch_assoc();
echo "<table border='1'>
<tr>
<th>DETAILS</th>
</tr>";

echo "<tr>";
echo "<td>email</td>";
echo "<td>" .$data['vemail']. "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>Name</td>";
echo "<td>" .$data['name']. "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>RollNo</td>";
echo "<td>" .$data['rno']. "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>PhNo</td>";
echo "<td>" .$data['num']. "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Branch</td>";
echo "<td>" .$data['branch']. "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>PassOutYear</td>";
echo "<td>" .$data['year']. "</td>";
echo "</tr>";
echo "</table>";
?>
<form action="scrap.php" method="post" >
<div class="input">
<label>Enter your CODECHEF USERNAME</label>
<input type="text" name="chef" >
<input type="submit">
</div>
</form>
<form action="scrap-codeforce.php" method="post" >
<div class="input">
<label>Enter your CODEFORCE USERNAME</label>
<input type="text" name="chef" >
<input type="submit">
</div>
</form>
                       

<form method="post" action=>
<div class="input">
<button type="submit" name="GETTOP10" class="btn">GETTOP10</button>
</div>
</form>
<br>
<br>
</body>
</html>


<?php
if(isset($_POST['GETTOP10'])){

$conn= new mysqli('localhost','root','','register');
$stmt= $conn->prepare("select * from student LIMIT 10");
//$stmt->bind_param("s",$email);
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
}}

?>
  