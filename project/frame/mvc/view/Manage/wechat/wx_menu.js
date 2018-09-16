//目录
var token;
$(document).ready(function(){
});


function showMenu(){
    token =$('#token').html();
    GetMenu();
    $('#menu').fadeIn();
    
}
function GetMenu(){
    $.ajax({
        type: 'POST',
        timeout:5000,
        url:"https://api.weixin.qq.com/cgi-bin/menu/get?access_token="+token,
        data:{
        },
        success: function (result) {
            alert('pp');
            var json = JSON.parse(result);
                 alert(json.errmsg);
        },
        error:function(res_err,e1,e3,e4){
            console.log(res_err);
                 alert(res.errmsg);

        }
    })// ajax end
}

