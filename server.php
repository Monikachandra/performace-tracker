<?php
$db=mysqli_connect('localhost','root','','register');
if(isset($_POST['register'])){
    $vemail=$_POST['vemail'];
    $vemail=$_POST['password'];
    $vemail=$_POST['password1'];
    $vemail=$_POST['name'];
    $vemail=$_POST['rno'];
    $vemail=$_POST['num'];
    $vemail=$_POST['branch'];
    $vemail=$_POST['year'];
    if(password!=password1)
    echo "check the password which you have re-entered"
    $q="INSERT INTO STUDENT(vemail,password,password1,name,rno,num,branch,year)"


}