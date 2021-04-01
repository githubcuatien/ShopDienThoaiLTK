<?php
$sql = "select * from products where product_id=$_GET[id]";
$chitiet = mysqli_query($conn, $sql);
$row_chitiet = mysqli_fetch_array($chitiet);

?>


<?php
echo
'<form action="cart_update.php" method="post" enctype="multipart/form-data">';
echo '<div class="content_right" style="width:100%; padding-top:10px;clear:left">';

$current_url = base64_encode($url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$id = $_GET['id'];
echo '<p style="margin-bottom:10px;margin-top: 10px;font-size:20px; border-bottom: 1px aqua solid;">' . $row_chitiet['product_title'] . '</p>';
echo '<div style="float: left;width: 42%">';
    echo '<img style="width: 240px;height:270px;padding: 20px;" src="admincp/modules/sanpham/uploads/' . $row_chitiet['product_image'] . '" />';
echo '</div>';
echo '<div style="float: left">';
    echo '<input  type="hidden" name="product_id" value="' . $id . '"/>';
    echo '<input type="hidden" name="type" value="add"/>';
    echo '<input type="hidden" name="return_url" value="' . $current_url . '"/>';
    echo '<p style="color: red; font-size: 25px;"><i class="fa fa-money" aria-hidden="true"></i> Giá: ' . $row_chitiet['product_price'] . 'đ</p><br>';
    echo ' <p style=" border-bottom:1px aqua solid;font-size: 19px;padding: 10px;width: 400px;margin-bottom: 10px; color: #000co">Mô tả: ' . $row_chitiet['product_desc'] . '</p><br>';
    echo ' <p >Số lượng <input style="padding: 5px;border: 1px aqua solid" type="text" name="qty" value="1" size="3" /></p><br>';
    echo '<input class="button1" type="submit" name="add" value="Đặt Hàng" style="clear:left"" /><br>';
echo '</div>';


echo '</div>';
echo '</form>';
echo '<a href="index.php" style="float:right;padding: 10px">Quay lại</a></p>';
?>
<?php
if (isset($_SESSION['product'])) {
    $count = count($_SESSION['product']);
    echo $count;
}
?>
<!--Bình luận-->

<?php

if (isset($_POST['binhluan'])) {
    $id = $_GET['id'];
    $name = $_POST['ten'];
    $comment = $_POST['noidung'];
    $name_length = strlen($name);
    $comment_length = strlen($comment);
    if ($name_length > 0 && $comment_length > 0) {

        $sql = "insert into comment (id_sanpham,name,comment) values('$id','$name','$comment')  ";
        mysqli_query($conn, $sql);
    } else {
        echo 'Làm ơn điền đầy đủ thông tin';
    }

}

?>

<form class="cmt" action="" method="post" enctype="multipart/form-data" > 

    <table width="100%" style="border-top: 1px aqua      solid;" style="margin-bottom:40px;">
        <tr>
            <td colspan="2" style="font-size:16px; font-weight:bold">Bình luận sản phẩm</div></td>

        </tr>
        <tr>
            <td style="font-size: 17px" width="68">Tên</td>
            <td width="122"><label for="ten"></label>
                <input type="text" name="ten" id="ten" size="30" placeholder="Tên bạn..."/></td>
        </tr>
        <tr>
            <td style="font-size: 17px">Nội dung</td>
            <td><label for="noidung"></label>
                <textarea style="width: 100%;border: 1px solid #ccc;" name="noidung" id="noidung" cols="45" rows="5" placeholder="Nội dung bình luận..."></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input class="button1" type="submit" name="binhluan" id="binhluan" value="Bình luận"/></td>

        </tr>
    </table>

</form>
<?php
$fine_comment = "select name,comment,id_sanpham,product_id,date from comment,products where id_sanpham=$_GET[id] and products.product_id=comment.id_sanpham order by id desc";
$ketqua_comment = mysqli_query($conn, $fine_comment);
while ($dong_comment = mysqli_fetch_array($ketqua_comment)) {
    $comment_name = $dong_comment['name'];
    $comment = $dong_comment['comment'];
    echo '<p  style="border-bottom:1px solid #ccc; margin: 10px">';
    echo "<p style='font-weight:bold;margin-top: 10px;margin-bottom: 10px'><i class='fa fa-user'></i>   $comment_name</p>  $comment<p><br>";
    echo '<p style="opacity:0.5">' . $dong_comment["date"] . '</p>';
    echo '</p ><br>';
}
?>
