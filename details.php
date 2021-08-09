 
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
<br>
<br>
<button onclick="myFunction()">codechef</button><br><br>
<script>
function myFunction(){
<?php
$html = file_get_contents('https://www.codechef.com/users/geethamaale'); //get the html returned from the following url

$pokemon_doc = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

	$pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//*[@id="cumulative"]/div[1]/div[1]/div/a/text()[1]');

	if($pokemon_row->length >0){
		foreach($pokemon_row as $row){
			$x=$row->nodeValue . "<br/>";
			$y=substr($x,0,4);

			$x=(int)$y;
			header("Location: details.php?cf=".$x );
		}
	}


}

?>

}
</script>
</body>
</html>

