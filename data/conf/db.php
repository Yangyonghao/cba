<?php
/**
 * 配置文件
 */
$yhtd_web=array(
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'yhtd_web',
    'DB_USER' => 'root',
    'DB_PWD' => '',
    'DB_PORT' => '3306',
    'DB_PREFIX' => 'td_',
    //密钥
    "AUTHCODE" => '7oH6SikjTnml14yWO1',
    //cookies
    "COOKIE_PREFIX" => '67bxWh_',
);

$yhtd_dev=array(
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'rds0cd3g6s22098iws29.mysql.rds.aliyuncs.com',
    'DB_NAME' => 'yhtd_dev',
    'DB_USER' => 'ylfcf_dev',
    'DB_PWD' => 'Ylfcf31581600',
    'DB_PORT' => '3306',
    'DB_PREFIX' => 'td_',
    //密钥
    "AUTHCODE" => '7oH6SikjTnml14yWO1',
    //cookies
    "COOKIE_PREFIX" => '67bxWh_',
);

//return $yhtd_dev;
return $yhtd_web;
