<?php
include("conn.php");
$book=$_POST['book'];
$isA=$_POST['isA'];
$insert="INSERT INTO `real2`(`book`, `isA`) VALUES ('$book','$isA')";
if($book !=null && $isA !=null){
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