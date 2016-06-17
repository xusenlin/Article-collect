<?php
require_once 'dblin.php';
if(empty($_POST['title'])||empty($_POST['about'])||empty($_POST['centent'])){
    echo'<h1>除了作者所有选项都必须有内容</h1>';
    return;
}
$id=$_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$about = $_POST['about'];
$centent = $_POST['centent'];
$password = $_POST['password'];
if(!($password==$adminPassword)){
    echo'<h1>管理密码出错！</h1>';
    exit;
}
$time = time();

$sql = "update main set title='$title',author='$author',about='$about',content='$centent',time=$time where id=$id";

if(mysqli_query($con,$sql)){
    echo "<script>alert('文章修改成功！');window.location.href='article_content.php?id=".$id."'</script>";
}else{

    echo "<script>alert('文章修改失败！');window.location.href='index.php'</script>";
}

if(!(mysqli_close($con))){
    mysql_error();
}
?>
