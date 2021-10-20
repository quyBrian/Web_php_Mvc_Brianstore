<?php
class Session{
    public static function init(){ 
        session_start();// khởi tạo session
    }

    public static function set($key, $val){
        $_SESSION[$key]= $val;// kiểm tra dữ liệu
    }

    public static function get($key){// truyền session($key) 
        if(isset($_SESSION[$key]))
        {
            return $_SESSION[$key];
        }
        else
        {
            return false;
        }
    }

    public static function checkSession(){
        self::init();
        if(self::get('login')==false)
        {
            self::destroy();
            header("Location:".BASE_URL."/login");
        }
        else
        {

        }
    }
    public static function checkSessionUser(){
        self::init();
        if(self::get('customer')==false)
        {
            self::destroy();
            header("Location:".BASE_URL."/customer/signin");
        }
        else
        {

        }
    }

    public static function destroy(){
        session_destroy();
    }

    public static function unset($key){
        session_unset($key);
    }
}
?>