
var WECHATKEY


$(document).ready(function(){
WECHATKEY = $('#wk').html();
});
function GetMenu(){
    $.ajax({
        type:'Get',
        url:"https://api.weixin.qq.com/cgi-bin/menu/get?access_token="+WECHATKEY,
        success: function (result) {
            var json = JSON.parse(result);
            if (json.status == true) { //success 
                alert('j');
                api.destroy();  
                $("#pic").empty();  //清空div
            } else {  //failed
                alert(json.msg);
            }
        },
        error: function (result) {
            alert('获取自定义菜单失败');
        }
      })// ajax end



}
function show_menu_form(){

}
function CreateMenu(){
   $("#menucreate").val(json);
    $.ajax({
        type:'POST',
        url:"https://api.weixin.qq.com/cgi-bin/menu/create?access_token="+WECHATKEY,
        data:{
         data:json,
        },
        success: function (result) {
            var json = JSON.parse(result);
            if (json.status == true) { //success 
                alert('j');
                api.destroy();  
                $("#pic").empty();  //清空div
            } else {  //failed
                alert(json.msg);
            }
        },
        error: function (result) {
            alert('创建菜单失败');
        }
      })// ajax end



}


