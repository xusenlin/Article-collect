


<?php
    if(!(mysqli_close($con))){
        mysql_error();
    }
    $t2 = microtime(true);
?>
<div class="container-fluid">
    <div class="text-center">
        <?php
        echo $footCopyright.'<br>'.'页面耗时'.round($t2-$t1,3).'秒';
        ?>
    </div>
</div>
<script>
    (function(){
        var btn =document.querySelector('.navbar-header .navbar-toggle');
        var ifon =document.querySelector('#bs-example-navbar-collapse-1');
        btn.onclick=function(){
            if(ifon.className=='collapse navbar-collapse'){
                ifon.className='navbar-collapse';
            }else{
                ifon.className='collapse navbar-collapse';
            }
        }

        var search =document.querySelector('#search');
        search.onclick=function(){
            alert("还没开发！");
        }



    })();
</script>
</body>
</html>