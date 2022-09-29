<?php
$con=mysqli_connect('localhost','miompolly','test1234');
if($con){
    echo "Connected Successfully";
}else{
    echo "Connection failed !!!";

}
mysqli_select_db($con,"photography");
$names=$_POST['form-names'];
$email=$_POST['form-email'];
$phone=$_POST['form-phone'];
$message=$_POST['form-message'];
$query="INSERT INTO contacts(names,email,phone,mesage)
VALUES('$names','$email','$phone','$message')";
mysqli_query($con,$query);
header('LOCATION:index.php#contactus');





?>