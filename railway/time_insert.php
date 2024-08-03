<?php
include("conn.php");
$name=$_POST['name'];
$toDes=$_POST['to_des'];
$fromDes=$_POST['from_des'];
$time=$_POST['time'];
$insert="INSERT INTO `time`(`name`, `to_des`, `from_des`,`time`) VALUES ('$name','$toDes','$fromDes','$time')";
if($time!=null && $toDes !=null && $fromDes !=null && $name !=null){
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