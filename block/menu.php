<?php
    //require "lic/trangchu.php";
    $loaisp=new loaisp();
    $loaisp_row=$loaisp->list_loaisp();
    foreach($loaisp_row as $item):
        ?>
        <div class="box categories">
            <h2><?php echo $item["loaisp"]; ?> <span></span></h2>
        <?php
        $loaispID=$item["loaispID"];
        $nhomsp=new nhomsp();
        $nhomsp_row=$nhomsp->list_nhomsp($loaispID);
        foreach($nhomsp_row as $item1):
                ?>
                <div class="box-content">
                    <ul>
                        <li>
                            <a href="index.php?p=chitietsp&nhomspID=<?php echo $item1["nhomspID"] ?>&Tieude_khongdau=<?php echo $item1["tennhomsp-shop"] ?>"><?php echo $item1["tennhomsp"] ?></a>
                        </li>
                    </ul>

                </div>
                <?php
            endforeach;
        ?>
        </div>
        <?php
  endforeach;
?>