/**
 * Created by JORDAN on 2016/6/16.
 */

function headbtn(indexnb){
    var headTab = document.querySelectorAll("#head li");
    for(var i=0;i<headTab.length;i++)  {
        headTab[i].className='';
    }
    if(indexnb>=headTab.length){
        console.log("如果参数大于导航栏列表则不会激活导航栏");
    }else{
        headTab[indexnb].className='active';
    }

}
