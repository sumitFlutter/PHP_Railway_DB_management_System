<?php
include("conn.php");
$user=$_POST['user'];
$feed=$_POST['feed'];
$insert="INSERT INTO `feedback`(`user`, `feed`) VALUES ('$user','$feed')";
if($user !=null && $feed !=null){
$a=mysqli_query($conn,$insert); 
if($a)
{
    $arr = array('status' => "Sucess", 'status_code' =>200);
    print(json_encode($arr));
}
else{
    $arr = array('status' => "All ready exist", 'status_code' =>400);
    print(json_encode($arr));
}}
else{
    $arr = array('status' => "All ready exist", 'status_code' =>400);
    print(json_encode($arr));
}
?>