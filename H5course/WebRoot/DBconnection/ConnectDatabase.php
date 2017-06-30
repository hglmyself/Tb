<?php
/**
 * Created by PhpStorm.
 * User: Lover
 * Date: 2016/6/14
 * Time: 20:15
 */
function getDb()
{
    $db_server = 'localhost';
    $db_port = '3306';
    $db_name = 'users';

    $db_user = 'root';
    $db_password = 'hgl19940404';

    $dsn = "mysql:host=$db_server;port=$db_port;dbname=$db_name;charset=utf8";

    try {
        $db = new PDO($dsn, $db_user, $db_password, array(PDO::ATTR_PERSISTENT => true));

    } catch (PDOException $ex) {
        exit("不能连接数据库");
    }

    return $db;
}