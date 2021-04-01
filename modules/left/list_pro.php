<?php
$sgl1 = "select * from loai";
$run_loai = mysqli_query($conn, $sgl1);
?>
<p class="loai"><i class="fa fa-list-ul" aria-hidden="true"></i> Loại</p>
<ul class="left1">
    <?php
    while ($dong = mysqli_fetch_array($run_loai)) {
        ?>
        <li class="dong"><a href="index.php?xem=loai&id=<?php echo $dong['loai_id'] ?>"><?php echo $dong['tenloai'] ?></a></li>
        <?php
    }
    ?>
</ul>
<?php
$sgl2 = "select * from hieu";
$run_hieu = mysqli_query($conn, $sgl2);
?>
<p class="loai"><i class="fa fa-list-alt" aria-hidden="true"></i> Nhãn Hiệu</p>
<ul class="left1">
    <?php
    while ($dong = mysqli_fetch_array($run_hieu)) {
        ?>
        <li class="dong"><a href="index.php?xem=hieu&id=<?php echo $dong['hieu_id'] ?>"><?php echo $dong['tenhieu'] ?></a></li>

        <?php
    }
    ?>
</ul>
          
          
           
           
      