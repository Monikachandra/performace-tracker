<pre><?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $vemail = $_POST['vemail'];
$password = $_POST['password'];
require_once('dbConnect.php');
$sql= "SELECT * FROM user WHERE vemail = '$vemail' AND password = '$password' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
header("Location: details.php ");

}else{
echo 'failure';
}
}
?>