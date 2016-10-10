<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2016
 * Time: 10:03 PM
 */
require "lic/db.php";
class loaisp{
    function list_loaisp()
    {
        global $db;
        $str=$db->prepare("select * from loaisp");
        $str->execute();
        return $str->fetchAll();
    }
}