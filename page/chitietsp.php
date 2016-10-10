<style>
    #phantrang {text-align: center;clear: both;
    }
    #phantrang a {
        clear: both;
        background-color:#000;
        color: #FF0;
        padding: 5px;
    }
    #phantrang a:hover{
        background-color: #0000A0;

    }


</style>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/8/2016
 * Time: 2:33 PM
 */
if(isset($_GET['nhomspID']))
{
    $nhomspID=(int)$_GET["nhomspID"];
}
/*---------------------Code phan trang-------------------------------*/
$sotin1trang=6;
if(isset($_GET["trang"]))
{
    $trang=$_GET["trang"];
    settype($trang,"int");
}
else
{
    $trang=1;
}
$from=($trang-1)*$sotin1trang;
$sp=new listsp();
$sp_row=$sp->listsp_theonhom_phantrang($nhomspID,$from,$sotin1trang);
/*---------------------Code phan trang-------------------------------*/
?>
<div class="cl">&nbsp;</div>
<ul>
    <?php
    //require "lic/trangchu.php";
    //$nhomsanpham=new listsp();
    //$nhomsanpham_row=$nhomsanpham->listsp_theonhom_phantrang($nhomspID,$from,$sp_row);
    foreach($sp_row as $item):
        ?>
        <li>
            <a href="index.php?p=sanpham&id=<?php echo $item["sanphamid"] ?>"><img src="photos/<?php echo $item["hinh"] ?>" width="228" height="300" alt="" /></a>
            <div class="product-info">
                <h3>LOREM IPSUM</h3>
                <div class="product-desc">
                    <h4>WOMEN’S</h4>
                    <p>Lorem ipsum dolor sit<br />amet</p>
                    <strong class="price">$58.99</strong>
                </div>
            </div>
        </li>
        <?php
    endforeach;
    ?>
</ul>
<div id="phantrang">
    <?php
    /*---------------------Code phan trang-------------------------------*/
    $chitiet_sp=new chitietsp();
    $count_sp_nhom=$chitiet_sp->count_sp_theonhom($nhomspID);
    $tongsotrang=ceil($count_sp_nhom/$sotin1trang);//ham lam tron
    //echo $count_tin;
    //echo $tongsotrang;

    for($i=1;$i<=$tongsotrang;$i++)
    {
        ?>
        <a <?php if($i==$trang) echo " style='background-color:red' "; ?> href="index.php?p=chitietsp&nhomspID=<?php echo $nhomspID ;?>&trang=<?php echo $i; ?>"><?php echo $i ?></a>
        <?php
    }

    /*---------------------Code phan trang-------------------------------*/
    ?>
</div>
<div class="cl">&nbsp;</div>