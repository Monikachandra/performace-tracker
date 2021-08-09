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
<form method="post" >
<div class="input">
<label>Enter your CODECHEF USERNAME</label>
<input type="text" name="chef" >
</div>
</form>
<br>
<br>
<button onclick="myFunction()">codechef</button><br><br>
<script>
function myFunction(){
<?php
$x=$_POST['chef'];
header("Location: scrap.php?cf=".$x );
?>
}
</script>
</body>
</html>