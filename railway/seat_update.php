<?php
include("conn.php");
$name=$_POST['name'];
$isA=$_POST['isA'];
$id=$_POST['id'];
$update="UPDATE `seat` SET `name`='$name',`isA`='$isA' WHERE `id` = '$id'";
if($id !=null && $isA !=null && $name !=null)
{
$a=mysqli_query($conn,$update); 
if($a)
{
    $arr = array('status' => "Sucess", 'status_code' =>200);
    print(json_encode($arr));
}
else{
    $arr = array('status' => "All ready exist", 'status_code' =>400);
    print(json_encode($arr));
}
}
else{
    $arr = array('status' => "All ready exist", 'status_code' =>400);
    print(json_encode($arr));
}
?>
