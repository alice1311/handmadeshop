

<head>
<link rel ="stylesheet" href="css/tongsp.css"/>
</head>
<?php
include("before.php");
include("config.php");
if (isset($_POST['loaiid'])) {
    $id_loai =  $_POST['loaiid'];
    $sql_loai = "SELECT * FROM loaisanpham WHERE maloai = '" . $id_loai . "'";
    $sql="SELECT * FROM sanpham WHERE maloai = '" . $id_loai . "'";
    $kq = mysqli_query($conn, $sql) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($conn)); 
    $kq_loai = mysqli_query($conn, $sql_loai) or die ("Không thể xuất thông tin loại sản phẩm ".mysqli_error($conn));       
    while($row_loai=mysqli_fetch_array($kq_loai))
    {  
        echo "<div class='tde'><h2>" . $row_loai["tenloai"] . "</h2></div>";
        $tenloai = $row_loai["tenloai"]; 
    }
    echo "<div class ='khungtong'>";
    while($row=mysqli_fetch_array($kq))
    {echo "<div class='khungsp'>
                <div class='sp'>
                     <img src=" . $row["hinhanh"] . " width='270px' height='280px'>
                </div>
                <div class='mota'>
                     <div class='khungchu'>
                        <h2>" . $tenloai . "</h2>
                        <span>" . $row["tensp"] . "</span>
                    </div>
                    <div class='gia'>
                        <label style='color: #11998e; font-weight: bold;'>" . $row["giaban"] . "</label>
                    </div>
                    <div class='giohang'>
                        <i class='fa-solid fa-cart-shopping'></i>
                        <a>Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>";
        }
    echo "</div>";

} else {
    $sql="SELECT * FROM sanpham;";
    $kq=mysqli_query($conn, $sql) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($conn));    
}

?>


<div class="xemtatca">
    <a href="bohoa.php">Xem tất cả</a>
</div>

<?php
include("after.php")
?>