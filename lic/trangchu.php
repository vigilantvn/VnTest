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
class nhomsp{
    function  list_nhomsp($loaispID){
        global $db;
        $str=$db->prepare("select * from nhomsp where loaispID=$loaispID");
        $str->execute();

        return $str->fetchAll();
    }
}
class sanpham{
    function  list_sanpham(){
        global $db;
        $str=$db->prepare("select * from sanpham order by sanphamid desc limit 0,9");
        $str->execute();

        return $str->fetchAll();
    }
    function sanpham_detail($sanphamid){
        global $db;
        $str=$db->prepare("select * from sanpham where sanphamid=$sanphamid");
        $str->execute();
        return $str->fetch();
    }
    function sanpham_cungloai($nhomspID){
        global $db;
        $str=$db->prepare("select * from sanpham where nhomspID=$nhomspID order by RAND() limit 0,3");
        $str->execute();
        return $str->fetchAll();
    }
}
class listsp{
    function  listsp_theonhom($nhomspID){
        global $db;
        $str=$db->prepare("select * from sanpham where nhomspID=$nhomspID order by sanphamid desc");
        $str->execute();

        return $str->fetchAll();
    }
    function  listsp_theonhom_phantrang($nhomspID,$from,$sotin1trang){
        global $db;
        $str=$db->prepare("select * from sanpham where nhomspID=$nhomspID order by sanphamid desc limit $from,$sotin1trang");
        $str->execute();
        return $str->fetchAll();
    }
}
class chitietsp{
    function count_sp_theonhom($nhomspID){
        try{
            global $db;
            $str=$db->prepare("select * from sanpham where nhomspID=$nhomspID order by sanphamid desc");
            $str->execute();
            $num=$str->rowCount();

        }
        catch (PDOException $ex)
        {
            file_put_contents("Logfile/errordb.txt","-".date("Y-m-d h:i:sa").":". $ex ->getMessage() . "\r\n", FILE_APPEND);
            exit();
        }
        return $num;
    }
}
