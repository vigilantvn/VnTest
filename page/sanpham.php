<?php
if(isset($_GET['id']))
{
    $spID=(int)$_GET["id"];
    $sanpham=new sanpham();
    $sanpham_row=$sanpham->sanpham_detail($spID);
    $nhomspID=$sanpham_row["nhomspID"];
}
?>
<div id="content">
    <!-- Product detail -->
    <div class="products">
        <div class="cl">&nbsp;</div>
        <div class="product-detail-image">
            <img src="photos/<?php echo $sanpham_row["hinh"] ?>" width="230" height="300" alt="" />
        </div>
        <div class="product-detail" >
            <h1>Chi tiết sản phẩm</h1>
            <br/>
            <h1 class="product-detail-name" ><?php echo $sanpham_row['tensp']; ?></h1>
            <br/>
            <h4>Don Gia</h4>
            <strong class="price"><?php echo number_format($sanpham_row['dongia']); ?> đồng</strong>
            <br/>
            <h4>NGÀY CẬP NHẬT: <?php echo $sanpham_row['ngaycapnhat']; ?></h4>
            <br/>
            <p>
                Mo Ta: <?php echo $sanpham_row['mota']; ?>
            </p>
            <br/>
            <div >
                <a href="index.php?p=shoppingcart&sanphamid=<?php echo $sanpham_row['sanphamid'];  ?>"><img src="photos/cart-link.gif"  title="Đặt sản phẩm này vào giỏ hàng" />Mua Hang</a>

            </div>
        </div>

    </div>

    <div style="clear: both">&nbsp;</div>
    <div class="box">
        <h2>Sản phẩm cùng nhóm <span></span></h2>
    </div>
    <div class="products">
        <div class="cl">&nbsp;</div>
        <ul>
            <?php
            $sanpham_cungloai=$sanpham->sanpham_cungloai($nhomspID);
            foreach ($sanpham_cungloai as $item):
            ?>
                <li> <a href="index.php?p=sanpham&id=<?php echo $item["sanphamid"] ?>"><img src="photos/<?php echo $item['hinh'] ?>" width="230" height="300" alt="" /></a>
                    <div class="product-info">
                        <h3><?php echo $item['tensp']; ?> </h3>
                        <div class="product-desc">

                            <strong class="price"><?php echo number_format($item['dongia']); ?></strong> </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="cl">&nbsp;</div>
    </div>
</div>