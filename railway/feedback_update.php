<?php
include("conn.php");
$user=$_POST['user'];
$feed=$_POST['feed'];
$id=$_POST['id'];
$update="UPDATE `feedback` SET `user`='$user',`feed`='$feed' WHERE `id` = '$id'";
if($id !=null && $user !=null && $feed !=null)
{
    $a=mysqli_query($conn,$update); 
    if($a)
    {
        $arr = array('status' => 'Sucess', 'status_code' =>200);
        print(json_encode($arr));
    }
    else
    {
        $arr = array('status' => 'All ready exist', 'status_code' =>400);
        print(json_encode($arr));
    }
}
else
{
    $arr = array('status' => 'All ready exist', 'status_code' =>400);
    print(json_encode($arr));
}

?>