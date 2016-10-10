
<div class="cl">&nbsp;</div>
<ul>
    <?php
    //require "lic/trangchu.php";
    $sanpham=new sanpham();
    $sanpham_row=$sanpham->list_sanpham();
    foreach($sanpham_row as $item):
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


<div class="cl">&nbsp;</div>