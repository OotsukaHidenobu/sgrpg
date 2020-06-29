<?php
class Define{
    public static $dsn  = 'mysql:dbname=sgrpg;host=127.0.0.1';
    public static $user = 'senpai';
    public static $pw   = 'indocurry';

    public static function sendResponse($status, $value=[]){
        header('Content-type: application/json');
        echo json_encode([
          'status' => $status,
          'result' => $value
        ]);}
}