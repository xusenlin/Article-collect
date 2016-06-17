<?php
include 'head.php';
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

                            echo '<div '
                                .'class="list-group-item "><div class="row"><div class="col-md-5">'
                                .'<h3 class=" list-group-item-heading">'
                                .$row[title].'</h3>'
                                .'</div>'
                                .'<div class="col-md-3">'
                                .'<span class="badge mt8">作者：'
                                .$row[author].'</span><span class="badge mt8">时间：'
                                .$artcle_time.'</span></div>'


                                .'<div class="col-md-4">'



                                .'<div class="btn-group" role="group" aria-label="...">
                                  <a href="article_content.php?id='
                                .$row[id].' " class="btn btn-success">查看</a>
                                  <a href="article_change.php?id='
                                .$row[id].'" class="btn btn-warning">修改</a>
                                  <button data-id="'
                                .$row[id].'" class="btn btn-danger deletebtn">删除</button>
                                  </div>'


                                .'</div></div>'
                                .'</div>';
                        }
                    }else{
                        echo '<div class="jumbotron"><h1>Hello, world!</h1><p>暂时还没有文章供你管理，数据库空空如也。</p><p><a class="btn btn-primary btn-lg" href="article_add.php" role="button">发布第一篇文章</a></p></div>'
                            .'<div class="alert alert-danger" role="alert">目前还没有文章列表，赶快去后台增加吧！</div>';
                    }

                    ?>
                </div>


    </div>



    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close closemodal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">删除文章</h4>
                </div>

                <div class="modal-body">
                    输入管理密码删除此文章！
                </div>
                <form method="post" action="article_delete_db.php">
                    <input type="hidden" id="articleid" name="id" value="">
                    <div class="input-group ">
                        <span class="input-group-addon" id="basic-addon1">管理密码：</span>
                        <input type="password" name="password" class="form-control" >
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default closemodal" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-danger">确定</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




<script src="js/myjs.js"></script>
<script>
    window.onload=function(){
        headbtn(1);

        var detBtn=document.querySelectorAll('.deletebtn');
        var myModal=document.querySelector('#myModal');
        var close=document.querySelectorAll('.closemodal');
        var articleId=document.querySelector('#articleid');

        for(var i =0;i<detBtn.length;i++){
            detBtn[i].onclick=function(){
                articleId.value=this.getAttribute('data-id');
                myModal.style.opacity=1;
                myModal.style.display='block';
                myModal.style.top='100px';
                myModal.style.overflow='initial';
            }
        }

        for(var b =0;b<close.length;b++){
            close[b].onclick=function(){

                myModal.style.opacity=0;
                myModal.style.display='none';

            }
        }









    }
</script>
<?php
include 'foot.php';
?>