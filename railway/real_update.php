<?php
include("conn.php");
$book=$_POST['book'];
$isA=$_POST['isA'];
$id=$_POST['id'];
$update="UPDATE `real2` SET `book`='$book',`isA`='$isA' WHERE `id` = '$id'";
if($id !=null && $book !=null && $isA !=null)
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
