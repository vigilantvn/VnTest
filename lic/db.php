<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2016
 * Time: 10:01 PM
 */
try
{
    $dsn = "mysql:host=localhost;dbname=shop";
    $username= "root";
    $password="";
    $db = new PDO($dsn, $username, $password);
    $db->exec("set names utf8");
}
catch (PDOException $ex)
{
    file_put_contents("Logfile/errordb.txt","-".date("Y-m-d h:i:sa").":". $ex ->getMessage() . "\r\n", FILE_APPEND);
    exit();
}