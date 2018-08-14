

function uploadimg(){
  data = $('#img').val();
  $.ajax({
    type: 'Post',
    processData: false,//用于对data参数进行序列化处理 这里必须false
    contentType: false, //必须 
    url: '/public/UploadImage/UploadIMG',
    data: {
        'img' : data,
         },
    success: function (result) {
        var json = JSON.parse(result);
        if (json.status == true) { //success 
             alert(json.msg);
     
        } else {  //failed
           
        }
    }
})// ajax end
 
}