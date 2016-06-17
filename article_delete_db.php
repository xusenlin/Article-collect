<?php
require_once 'dblin.php';

$id = $_POST['id'];
$password = $_POST['password'];
$sql = "delete from main where id=$id";
if($password==$adminPassword){
    if(mysqli_query($con,$sql)){
        echo "<script>alert('文章删除成功！');window.location.href='index.php'</script>";
    }else{
        echo "<script>alert('文章删除失败！');window.location.href='index.php'</script>";
    }
}else{
    echo "<script>alert('管理密码错误');window.location.href='admin.php'</script>";
}


if(!(mysqli_close($con))){
    mysql_error();
}
?>


