<?php
$db=mysqli_connect('localhost','root','','details');
if(isset($_POST['register'])){
    $vemail=mysql_real_escape_string($_POST['vemail']);
}