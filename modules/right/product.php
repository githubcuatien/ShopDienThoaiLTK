<?php

$sql = "select * from products ORDER BY product_id DESC";
$sanpham = mysqli_query($conn, $sql);
?>
<p class="loai"><i class="fa fa-laptop" aria-hidden="true"></i> Mới nhất</p>
<ul class="hang1">

    <?php
    while ($row = mysqli_fetch_array($sanpham)) {
    ?>
        <li class="hang"><a href="index.php?xem=chitiet&id=<?php echo $row['product_id'] ?>" style="color:#09C;">
                <p class="item-name"><?php echo $row['product_title'] ?></p>
                <?php
                echo '<img  src="admincp/modules/sanpham/uploads/' . $row['product_image'] . '" width="110" height="130"/>';
                ?>
                <p>Giá: <i style="color: red; font-weight: bold; font-size: 15px;"><?php echo $row['product_price'] ?>đ</i></p>
                <p style="color:#900;margin-left:20px;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $row['product_id'] ?>" style="color:#09C;">Chi tiết</p>
            </a>

            </a></li>

    <?php
    }
    ?>
    <div class="clear"></div>

</ul>