<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2016/6/30
 * Time: 11:22
 */

if(file_exists("data/conf/db.php")){
    $db=include "data/conf/db.php";
}else{
    $db=array();
}

return $db;