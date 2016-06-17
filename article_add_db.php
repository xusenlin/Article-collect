<?php
    require_once 'dblin.php';
    if(empty($_POST['title'])||empty($_POST['about'])||empty($_POST['centent'])){
        echo'<h1>除了作者所有选项都必须有内容</h1>';
        return;
    }
    $title = $_POST['title'];
    $author = $_POST['author'];
    $about = $_POST['about'];
    $centent = $_POST['centent'];
    $time = time();

    $sql = "insert into main(title,author,about,content,time) values('$title','$author','$about','$centent',$time)";

    if(mysqli_query($con,$sql)){
        echo "<script>alert('文章发表成功！');window.location.href='index.php'</script>";
    }else{
        echo "<script>alert('文章发表失败！');window.location.href='index.php'</script>";
    }

    if(!(mysqli_close($con))){
        mysql_error();
    }
?>
