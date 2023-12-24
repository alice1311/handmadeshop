<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/5c4aca786f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/trangchu.css">
    <script>
    function submitForm(formId) {
        document.getElementById(formId).submit();
    }
</script>
</head>
<?php 
    include("config.php");
    $sql="SELECT s.maloai, l.tenloai, COUNT(s.masp) as total_products
    FROM sanpham s
    JOIN loaisanpham l ON s.maloai = l.maloai
    GROUP BY s.maloai, l.tenloai
    HAVING COUNT(s.masp) > 0;";
    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin ".mysqli_error());
?>
<body>
    <div class="top">
        <div class="khungvien">
            <div class="logo">
                <span>Flowers</span>
            </div>
            <div class="danhmuc">
                <a href="trangchu.php">Trang chủ</a>
                <a href="gioithieu.php">Giới thiệu</a>
                <div class="dropdown">
                    <a href="tongsp.php" class="dropbtn">Sản phẩm</a>
                    <div class="dropdown-content">
                    <?php 
                    
                         while($row=mysqli_fetch_array($kq))
                         {  
                            echo "<form action='tongsp.php' id='myForm" . $row["maloai"] . "' method='post'>";
                            echo "<input type='hidden' name='loaiid' value='" . $row["maloai"] . "'>
                                    <a onclick='submitForm(\"myForm" . $row["maloai"] . "\")'>" . $row["tenloai"] . "</a>
                                    </form>";
                        }
                    ?>
        
                    </div>
                </div>
                <a href="dangky.php">Đăng ký</a>
                <a href="dangnhap.php">Đăng nhập</a>
                <input type="text" placeholder="Tìm kiếm sản phẩm ở đây!" />
            </div>
            <div class="icon">
            <a href="giohang.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <a href="hoso.php">
                    <i class="fa-solid fa-user"></i>
</a>
            </div>
        </div>
        