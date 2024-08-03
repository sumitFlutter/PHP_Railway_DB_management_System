<?php
include("conn.php");
$name=$_POST['name'];
$toDes=$_POST['to_des'];
$fromDes=$_POST['from_des'];
$time=$_POST['time'];
$id=$_POST['id'];
$update="UPDATE `time` SET `name`='$name',`to_des`='$toDes',`from_des`='$fromDes',`time`='$time' WHERE `id` = '$id'" ;
if($id !=null && $time!=null && $toDes !=null && $fromDes !=null && $name !=null){
$a=mysqli_query($conn,$update); 
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