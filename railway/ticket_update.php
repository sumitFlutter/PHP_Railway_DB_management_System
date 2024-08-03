<?php
include("conn.php");
$user=$_POST['user'];
$toDes=$_POST['to_d'];
$fromDes=$_POST['from_d'];
$price=$_POST['price'];
$id=$_POST['id'];
$update="UPDATE `ticket` SET `user`='$user',`to_d`='$toDes',`from_d`='$fromDes',`price`='$price' WHERE `id` = '$id'";
if($id !=null && $user !=null && $toDes !=null && $fromDes !=null && $price !=null){
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
