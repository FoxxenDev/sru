<?php


namespace App;


class FlashMessage
{
    /**
     * @param string $type success|error|warning|info|question
     * @param string $message
     */
    public static function setFlash(string $type, string $message): void
    {
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
        $_SESSION["flash"] = [
            "type" => $type,
            "message" => $message
        ];
    }

    /**
     * @return array|bool
     */
    public static function getFlash()
    {
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
        if(isset($_SESSION["flash"]) && !empty($_SESSION["flash"])){
            return $_SESSION["flash"];
        }else{
            return false;
        }
    }

    public static function removeFlash(): void
    {
        if(isset($_SESSION["flash"])){
            unset($_SESSION["flash"]);
        }
    }
}