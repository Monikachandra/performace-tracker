<?php
$db=mysqli_connect('localhost','root','','register');
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

    $sql="INSERT INTO student(vemail,password,password1,name,rno,num,branch,year) VALUES ('$vemail,'$pass','$password1','$name','$rno','$num','$branch','$year')";
    mysqli_query($db,$sql);
}
?>