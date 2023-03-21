<?php
/**
 * @Description 
 * @Sonkwl Xiong
 * @Date 2023/03/21 08:58:07
 * @GET 
 * 
 * @POST 
 * 
 * @Response 
 *  
 */
namespace Sonkwl\UsePHP;

use \Sonkwl\UsePHP\jsoner;

class autoroute{
    public static function Run(){
        $page="index"; //頁面
        $method=strtolower($_SERVER["REQUEST_METHOD"]); //請求方法
        # 頁面切換
        if(isset($_GET["p"])){
            $page=$_GET["p"];
        }
        # 處理文件
        $dofile=$method.'/'.$page.'.php';
        if(!is_file($dofile)){
            jsoner::Response(array("res"=>"NG","message"=>"[".$method."]".$page."處理不存在"));
        }
        include_once $dofile;
    }
    //开启跨域
	public static function CanCross(){
		header('Access-Control-Allow-Origin:*');
		header("Access-Control-Allow-Credentials:true");
	}
}
?>
