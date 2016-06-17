<?php
include 'head.php';
?>

<div class="container">
    <form method="post" action="article_add_db.php">
        <div class="form-group">
            <label for="exampleInputEmail1">文章标题</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">文章作者</label>
            <input type="text" class="form-control" name="author">
        </div>
        <textarea class="form-control" rows="3" placeholder="文章简介" name="about"></textarea>
        </br>
        </br>
        <textarea class="form-control " rows="8" placeholder="文章内容" name="centent"></textarea>
        </br>
        <div class="alert alert-warning" role="alert">提示：禁止发表不和谐的内容！</div>
             </br></br>
        <button type="submit" class="btn btn-success">发布文章</button>
    </form>

</div>
</br>
</br>

<script src="js/myjs.js"></script>
<script>
    window.onload=function(){
        headbtn(2);
    }
</script>
<?php
include 'foot.php';
?>