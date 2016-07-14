<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2016/6/30
 * Time: 11:22
 */

//if(file_exists("data/conf/db.php")){
//    $db=include "data/conf/db.php";
//}else{
//    $db=array();
//}
//'URL_MODEL' => 2,
//
$localhost=array(
    'URL_MODEL' => 2,//REWRITE模式
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'cba',
    'DB_USER' => 'root',
    'DB_PWD' => '',
    'DB_PORT' => '3306',
    'DB_PREFIX' => 'cba_',
    //密钥
    "AUTHCODE" => '7oH6SikjTnml14yWO1',
    //cookies
    "COOKIE_PREFIX" => '67bxWh_',
);
//
return $localhost;

//return $db;