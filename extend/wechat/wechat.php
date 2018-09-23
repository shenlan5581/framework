<?php namespace WECHAT {

    //微信公众号接入验证 直接在控制器文件中调用
   function WechatCheck($token){
        $signature  =   $_GET["signature"];
        $timestamp  =   $_GET["timestamp"];
        $nonce      =   $_GET["nonce"];
        $tmpArr = array($timestamp, $nonce,$token);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr);
        $tmpStr = sha1( $tmpStr );
        
        if( $signature = $tmpStr ){
            echo $_GET['echostr'];
        return true;
        }else{
            echo "wechat check";
        return false;
        }
    }

    // 检验 access_token
    // 每次调用会重置key
    function WxGetAccessToken(){
        $url = WECHATURL;
        $key=json_decode(\CLIENT\Client_Get($url),true);
        if(!$key || !isset($key['access_token'])){// 接入失败 
            $errmsg=$key['errmsg'];
            $errcode=$key['errcode'];
            trigger_error("$errmsg  --->$errcode", E_USER_ERROR);
            return false;
            }else{
            \Session::Destoy('Wechat_accesstoken');
            \Session::Set('Wechat_accesstoken',$key['access_token']);
            return $key['access_token'];
            }
    }
    function WxGetUserInfo($code){
     return array(
            "openid"=>"999",  //每个用户对一个公众号唯一
            "nickname"=>'BIG_FISH',
            "sex"=>"1",
            "province"=>"郑州",
            "city"=>"河南",
            "country"=>"中国",
            "headimgurl"=>"http://thirdwx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/46",
     );
    }








// 素材 响应数据结构
/*
[item] => Array
(
    [0] => stdClass Object
        (
            [media_id] => jgu27Jwb11RiZZ6QXsY5IKqvIpi-LtcSC3rbHRWxi48
            [content] => stdClass Object
                (
                    [news_item] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [title] => 测试
                                    [author] => 三原色
                                    [digest] => http://yaoyao.mobi/Wechat
                                    [content] => http://yaoyao.mobi/Wechat
                                    [content_source_url] => 
                                    [thumb_media_id] => UMXj0Uxsy2DHWGWsKasKF-v0NGKsiT_YxLBaaCKaXy4
                                    [show_cover_pic] => 0
                                    [url] => http://mp.weixin.qq.com/s?__biz=MzU1NzcxMzcxNg==&mid=100000113&idx=1&sn=6c64c15c08f43257480cb9e96b61d05d&chksm=7c30d12a4b47583c1c66c49210ccbccb4bd3ca8b6534f8ed39ff860174db81ee462d14c01a04#rd
                                    [thumb_url] => 
                                    [need_open_comment] => 0
                                    [only_fans_can_comment] => 0
                                )
                        )
                    [create_time] => 1537038640
                    [update_time] => 1537038640
                )
            [update_time] => 1537038640
        )
    [1] => stdClass Object
        (
            [media_id] => jgu27Jwb11RiZZ6QXsY5IJnWoh4wz1almMYgFPWjI74
            [content] => stdClass Object
                (
                    [news_item] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [title] => 三原色十周年店庆-优惠活动
                                    [author] => 郑州三原色
                                    [digest] => 三原色装饰十周年店庆-优惠活动
                                    [content] => 三原色装饰十周年店庆9月18日——10月7日火爆来袭！！！你来我就送，全房位360℃家电礼品送不停活动一：
                                    [content_source_url] => 
                                    [thumb_media_id] => jgu27Jwb11RiZZ6QXsY5ICMsswBYqXQ8dmtGrVOCpgI
                                    [show_cover_pic] => 0
                                    [url] => http://mp.weixin.qq.com/s?__biz=MzU1NzcxMzcxNg==&mid=100000107&idx=1&sn=6821a7acdddb20f7ad3b412d0b0f00e0&chksm=7c30d1304b4758263f44c2804c808ff4c5bbac3e86ed6e8e644dca9d71bcacf511ff5379bb25#rd
                                    [thumb_url] => http://mmbiz.qpic.cn/mmbiz_jpg/Sn9Iue1Nibhtib8W3QwdoPiccWpXt1lBRQDNiaVDchDNjRq4zY84yt50ZEyPxU9ku8SfuibUWkWL2HicTyIrMPHcosuQ/0?wx_fmt=jpeg
                                    [need_open_comment] => 0
                                    [only_fans_can_comment] => 0
                                )
                        )
                    [create_time] => 1536833871
                    [update_time] => 1536835786
                )
            [update_time] => 1536835786
        )
)
[total_count] => 9
[item_count] => 2
)
*/
/*  返回  array（
           media_id
           content =array ()
           )
*/

    function WxParseMaterial($arr){
        if(!$arr){
            return false;
        }
        $arr = get_object_vars($arr);
        $ret =array();
        foreach( $arr['item'] as &$item){
           $ar =array();
           $content =array();
          
           $item = get_object_vars($item);
            $ar['media_id'] =  $item['media_id'];
           $ctnt = get_object_vars($item['content']);
           foreach($ctnt['news_item'] as &$newitem){
              $newitem = get_object_vars($newitem);
              $content[] = $newitem; 
           }
           $ar['content']=$content;
           $ret[]=$ar;
        }
       return($ret);
    }


} //namespace