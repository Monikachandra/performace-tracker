<?php
if(isset($_POST['Register'])){
$email=$_POST['vemail'];
$pass=$_POST['password'];
if($email=="admin@vardhaman.org" && $pass=="admin1234"){
header("Location: admin.php ");
}
$conn= new mysqli('localhost','root','','register');
$stmt= $conn->prepare("select * from student where vemail=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt_result=$stmt->get_result();
if(($stmt_result->num_rows) >0){
$data=$stmt_result->fetch_assoc();
if($data['password']==$pass){
header("Location: details.php ");
}
else{

header("Location: login.php");

}
}
}
?>