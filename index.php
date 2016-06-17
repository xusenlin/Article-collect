<?php
    require_once 'head.php';

?>

<div class="container">
    <div class="list-group">
        <?php
            $spl = 'select * from main order by time desc';
        $data = mysqli_query($con,$spl);

            if($data&&$data->num_rows){
                while($row=mysqli_fetch_assoc($data)){
//                    print_r($row);
                    $artcle_time = date('Y-m-d',$row[time]);
                    echo '<a href="'
                        .'article_content.php?id='.$row[id]
                        .'" class="list-group-item ">'
                        .'<h4 class="list-group-item-heading">'
                        .$row[title].'</h4>'
                        .'<p class="list-group-item-text">'
                        .$row[about].'</p> <span class="badge icon">作者：'
                        .$row[author].'</span><span class="badge icon">时间：'
                        .$artcle_time.'</span></a>';
                }
            }else{
                echo '<div class="jumbotron"><h1>Hello, world!</h1><p>欢迎使用我的文章管理系统，点击下面的按钮开始吧！</p><p><a class="btn btn-primary btn-lg" href="article_add.php" role="button">发布第一篇文章</a></p></div>'
                    .'<div class="alert alert-danger" role="alert">目前还没有文章列表，赶快去后台增加吧！</div>';
            }

        ?>

<!--        <a href="#" class="list-group-item ">-->
<!--            <h4 class="list-group-item-heading">List group item heading</h4>-->
<!--            <p class="list-group-item-text">zhesssssssssssssssss</p>-->
<!--        </a>-->
<!--        <a href="#" class="list-group-item ">-->
<!--            <h4 class="list-group-item-heading">List group item heading</h4>-->
<!--            <p class="list-group-item-text">zhesssssssssssssssss</p>-->
<!--        </a>-->
<!--        <a href="#" class="list-group-item ">-->
<!--            <h4 class="list-group-item-heading">List group item heading</h4>-->
<!--            <p class="list-group-item-text">zhesssssssssssssssss</p>-->
<!--        </a>-->
<!--        <a href="#" class="list-group-item">-->
<!--            <h4 class="list-group-item-heading">List group item heading</h4>-->
<!--            <p class="list-group-item-text">zhesssssssssssss<br>ssss</p>-->
<!--        </a>-->
    </div>
</div>

<?php
include 'foot.php';
?>