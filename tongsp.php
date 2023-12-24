

<head>
<link rel ="stylesheet" href="css/tongsp.css"/>
<script>
    function submitForm(formId) {
        document.getElementById(formId).submit();
    }
</script>
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
    {   $tensp = $row["tensp"];
        if (strlen($tensp) > 25) {
            $words = explode(' ', $tensp);
            if (count($words) >= 5) {
                $tensp = implode(' ', array_slice($words, 0, 5)) . '...';
            } else {
                $tensp = substr($tensp, 0, 25) . '...';
            }
        }  
        echo "<div class='khungsp'>
                <div class='sp'>
                     <img src=" . $row["hinhanh"] . " width='270px' height='280px'>
                </div>
                <div class='mota'>
                     <div class='khungchu'>
                        <h2>" . $tenloai . "</h2>
                        <span>" . $tensp . "</span>
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
    $sql="SELECT s.maloai, l.tenloai, COUNT(s.masp) as total_products
            FROM sanpham s
            JOIN loaisanpham l ON s.maloai = l.maloai
            GROUP BY s.maloai, l.tenloai
            HAVING COUNT(s.masp) > 0;";
    $kq=mysqli_query($conn, $sql) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($conn));    
    while($row=mysqli_fetch_array($kq))
    {
        echo "<div class='tde'><h2>" . $row["tenloai"] . "</h2></div>";
        $tenloai = $row["tenloai"]; 
        $maloai = $row["maloai"]; 
        $sql2 = "SELECT p.masp, p.tensp, p.makm, p.hinhanh, p.giaban, SUM(i.soluong) as total_sold FROM `sanpham` p JOIN chitietdonhang i ON p.masp = i.masp WHERE maloai= '" . $maloai . "' GROUP BY p.masp ORDER BY total_sold DESC LIMIT 4;";
        $kq2=mysqli_query($conn, $sql2) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($conn));    
        echo "<div class ='khungtong'>";
        while($row2=mysqli_fetch_array($kq2))
        {   $tensp = $row2["tensp"];
            if (strlen($tensp) > 25) {
                $words = explode(' ', $tensp);
                if (count($words) >= 5) {
                    $tensp = implode(' ', array_slice($words, 0, 5)) . '...';
                } else {
                    $tensp = substr($tensp, 0, 25) . '...';
                }
            }  
            echo "<div class='khungsp'>";
            echo"<div class='sp'>
                    <img src=" . $row2["hinhanh"] . " width='270px' height='280px'>
                </div>
                <div class='mota'>
                    <div class='khungchu'>
                        <h2>" . $tenloai . "</h2>
                        <span>" . $tensp . "</span>
                    </div>
                    <div class='gia'>
                        <label style='color: #11998e; font-weight: bold;'>" . $row2["giaban"] . "</label>
                    </div>
                    <div class='giohang'>
                        <i class='fa-solid fa-cart-shopping'></i>
                        <a>Thêm vào giỏ hàng</a>
                    </div>
                </div>";
            echo "</div>";
        }
        echo "</div>";
        echo "<div class='xemtatca'>";
        echo "<form action='tongsp.php' id='myForm" . $row["maloai"] . "' method='post'>";
            echo "<input type='hidden' name='loaiid' value='" . $row["maloai"] . "'>
                    <a onclick='submitForm(\"myForm" . $row["maloai"] . "\")'>Xem tất cả</a>
              </form>
     </div>";
    }
    
}

?>



<?php
include("after.php")
?>