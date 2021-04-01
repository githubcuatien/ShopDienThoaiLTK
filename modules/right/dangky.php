<?php
if (isset($_POST['register'])) {
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];
    /*move_uploaded_file($c_image_tmp, "modules/right/customer_images/$c_image");*/
    $insert_c = "insert into customers(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address) values('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address')";
    $run_c = mysqli_query($conn, $insert_c);
    if ($run_c) {
        echo '<script>alert("insert thanh cong")</script>';
    }
}
?>

<div class="content_right" style="width:100%;" align="center">
    <h1 align="center">
        <p class="loai">Đăng ký tài khoản</p>
    </h1>
    <form action="index.php?xem=dangky" method="post" enctype="multipart/form-data" >
        <div class="container">
            <table width="600" >
                <tr>
                    <td class="lb">Nhập Tên</td>
                    <td><input type="text" name="c_name" placeholder="Nhập họ tên" required></td>
                </tr>
                <tr>
                    <td class="lb">Nhập Tên Đăng nhập</td>
                    <td><input type="text" name="c_email" placeholder="Nhập tên đăng nhập" required></td>
                </tr>
                <tr>
                    <td class="lb">Nhập SDT</td>
                    <td><input type="text" name="c_contact" placeholder="Nhập SĐT" required></td>
                </tr>
                <tr>
                    <td class="lb">Nhập Password</td>
                    <td><input type="password" name="c_pass" placeholder="Nhập mật khẩu" required></td>
                </tr>
                <tr>
                    <td class="lb">Chọn Quốc Gia</td>
                    <td>
                        <select name="c_country">
                            <option>Quốc Gia</option>
                            <option>Viet Nam</option>
                            <option>US</option>
                            <option>UK</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="lb">Nhập Thành Phố</td>
                    <td><input type="text" name="c_city" placeholder="Nhập thành phố" required></td>
                </tr>
                <tr>
                    <td class="lb">Nhập Địa Chỉ</td>
                    <td><textarea style="width: 100%;" name="c_address" rows="5" cols="20" required></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="registerbtn" name="register" value="Đăng Ký"></td>

                </tr>
            </table>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="index.php?xem=thanhtoan">Sign in</a>.</p>
        </div>
    </form>
    <style>
        .container {
            padding: 16px;
            background-color: white;
        }

        .container input[type=text]{
            width: 100%;
            padding: 10px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: 1px #ddd solid ;
            background: #f1f1f1;
        }
        .container input[type=password] {
            width: 94.5%;
            padding: 10px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: 1px #ddd solid ;
            
        }

        .container input[type=text]:focus,
        .container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
        .lb {
            font-weight: bold;
            width: 30%;
        }
    </style>
</div>