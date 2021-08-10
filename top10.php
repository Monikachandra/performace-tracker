<?php
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
}

?>

