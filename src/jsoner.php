<?php
/**
 * @Description json请求处理
 * @Sonkwl Xiong
 * @Date 2022/03/25 14:03:42
 */
namespace Sonkwl\UsePHP;

class jsoner{
    /**
     * JSON请求
     */
    static public function Request(){
        $command = isset($GLOBALS['HTTP_RAW_POST_DATA'])?$GLOBALS['HTTP_RAW_POST_DATA']:file_get_contents("php://input");
        $command=str_replace("'","''",trim($command,'"'));
        $command=(array)json_decode($command,true);
        return $command;
    }
    /**
     * JSON响应
     */
    static public function Response($res){
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        exit;
    }
}
?>
