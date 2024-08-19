<?php
include("conn.php");
$user=$_POST['user'];
$toDes=$_POST['to_d'];
$fromDes=$_POST['from_d'];
$price=$_POST['price'];
$insert="INSERT INTO `ticket`(`user`, `to_d`, `from_d`,`price`) VALUES ('$user','$toDes','$fromDes','$price')";
if($user !=null && $toDes !=null && $fromDes !=null && $price !=null){
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
