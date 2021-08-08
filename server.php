<?php
if(isset($_POST['register'])){
    $vemail=$_POST['vemail'];

    $password=$_POST['password'];
    $password1=$_POST['password1'];
    $name=$_POST['name'];
    $rno=$_POST['rno'];
    $num=$_POST['num'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    if($password!=$password1)
    echo "check the password which you have re-entered";
    $pass=md5($password);
$conn= new mysqli('localhost','root','','register');
$st=$conn->prepare("insert into student(vemail,password,password1,name,rno,num,branch,year) values(?,?,?,?,?,?,?,?)");
$st->bind_param("sssssssi",$vemail,$password,$password1,$name,$rno,$num,$branch,$year);
$st->execute();
$st->close();
$conn->close();
}
?>