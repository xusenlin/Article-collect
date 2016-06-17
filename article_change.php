<?php
    include 'head.php';
    $id=$_GET['id'];
    $sql="select * from main where id=$id";
    $data=mysqli_query($con,$sql);
    if($data&&$data->num_rows){
        $row=mysqli_fetch_assoc($data);

    }else{
        echo '<h1>id为'.$id.'文章不存在</h1>';
        exit;
    }
?>

<div class="container">
    <div class="alert alert-warning" role="alert">提示：你正在修改文章！</div>
    <form method="post" action="article_change_db.php">
        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">文章标题</label>
            <input type="text" class="form-control" name="title" value="<?php echo $row[title]; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">文章作者</label>
            <input type="text" class="form-control" name="author" value="<?php echo $row[author]; ?>">
        </div>
        <textarea class="form-control" rows="3"  name="about" ><?php echo $row[about]; ?></textarea>
        </br>
        </br>
        <textarea class="form-control " rows="8" placeholder="文章内容" name="centent"><?php echo $row[content]; ?></textarea>
        </br>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">管理密码：</span>
          <input type="password" name="password" class="form-control" >
        </div>
        </br>
        </br>
        <button type="submit" class="btn btn-warning">确定修改</button>
    </form>
</div>
</br>
</br>

<script src="js/myjs.js"></script>
<script>
    window.onload=function(){
        headbtn(100);
    }
</script>
<?php
include 'foot.php';
?>