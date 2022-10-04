<?php
include 'dbconnect.php';
$counter="";
$records=array();
$sql="SELECT * FROM categories";
$result=mysqli_query($con,$sql);
if($result){
    while($rows=$result->fetch_object()){
        $records[]=$rows;
        

    }
}

?>