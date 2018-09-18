<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
if (!function_exists('getUserName'))
{
    function getUserName($id){
        return \think\Db::table('zh_user')->where('id',$id)->value('name');
    }
}
if (!function_exists('getArtContent'))
{
    function getArtContent($content){
        return mb_substr(preg_replace('/&nbsp;/is', '',strip_tags(htmlspecialchars_decode($content))),0,80).'...阅读全文';
    }
}
if (!function_exists('getCateName'))
{
    function getCateName($id)
    {
        return \think\Db::table('zh_article_category')->where('id',$id)->value('name');
    }
}

function responseJSON($status,$msg,$res)
{
    header("Content-type:application/json");
    header("HTTP/1.1 $status $msg");
//    echo "hello";
    echo json_encode($res,JSON_UNESCAPED_UNICODE );
//    return json_decode($str);
}