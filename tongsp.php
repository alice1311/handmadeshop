

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
    $kq_loai = mysqli_query($conn, $sql_loai) or die ("Không thể xuất thông tin loại sản phẩm ".mysqli_error($conn));       
    while($row_loai=mysqli_fetch_array($kq_loai))
    {  
        echo "<div class='tde'><h2>" . $row_loai["tenloai"] . "</h2></div>";
        $tenloai = $row_loai["tenloai"]; 
    }
    $sql_page = "SELECT count(*)as quantity FROM sanpham WHERE maloai = '" . $id_loai . "'";
    $kq_page = mysqli_query($conn, $sql_page) or die ("Không thể xuất thông tin".mysqli_error($conn));
    while($row_p=mysqli_fetch_array($kq_page))
    {  
        $quantity = $row_p["quantity"];
    } 
    $page_size = 8;
    $page = 1;
    if($quantity % $page_size == 0){
        $page = $quantity / $page_size;
    }else{
        $page = (int)($quantity/$page_size) +1;
    }

    if((!isset($_POST['page'])) || ($_POST['page'] == '1' )){
            $recordstart = 0;
            $pagecurrent = 1;
    }else{
        $recordstart = ($_POST['page']-1) * $page_size;
        $pagecurrent = $_POST['page'];
    }
    $sql="SELECT * FROM sanpham WHERE maloai = '" . $id_loai . "' limit {$recordstart}, {$page_size}";
    $kq = mysqli_query($conn, $sql) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($conn)); 
    echo "<div class ='khungtong'>";
    while($row=mysqli_fetch_array($kq))
    {   
        $tensp = $row["tensp"];
        if (strlen($tensp) > 25) {
            $words = explode(' ', $tensp);
            if (count($words) >= 5) {
                $tensp = implode(' ', array_slice($words, 0, 5)) . '...';
            } else {
                $tensp = substr($tensp, 0, 25) . '...';
            }
        }  
        if($row["makm"] != null){
            $sql_km="SELECT * FROM khuyenmai WHERE makm = '" .$row["makm"]. "'";
            $kq_km = mysqli_query($conn, $sql_km) or die ("Không thể xuất thông tin khuyến mãi ".mysqli_error($conn));
            while($row_km=mysqli_fetch_array($kq_km)){
               $gia_km = $row["giaban"]- $row_km["phantramkm"] * $row["giaban"];
               $gia_km = number_format($gia_km, 0, ',', '.') . 'đ';
               $gia_goc = number_format($row["giaban"], 0, ',', '.') . 'đ';
               $ptram = $row_km["phantramkm"] *100;
            }
            echo "<div class='khungsp'>
                <div class='sp'>
                     <img src=" . $row["hinhanh"] . ">";
                     if( $ptram != null){
                         echo"<span>- " .$ptram. "%</span>";
                     }
            echo"</div>
                <div class='mota'>
                     <div class='khungchu'>
                        <h2>" . $tenloai . "</h2>
                        <span>" . $tensp . "</span>
                    </div>";
                        echo "<div class='gia'>
                                <label style='text-decoration: line-through; color:red'>" .$gia_goc. "</label>
                                <label style='color: #11998e; font-weight: bold;'>" . $gia_km . "</label>
                             </div>";
        }else{
            echo "<div class='khungsp'>
                <div class='sp'>
                     <img src=" . $row["hinhanh"] . ">";
            echo"</div>
                <div class='mota'>
                     <div class='khungchu'>
                        <h2>" . $tenloai . "</h2>
                        <span>" . $tensp . "</span>
                    </div>";
                $gia_goc = number_format($row["giaban"], 0, ',', '.') . 'đ';
                echo "<div class='gia'>
                        <label style='color: #11998e; font-weight: bold;'>" . $gia_goc . "</label>
                    </div>";
            }
                    echo"<form action='chitietsp.php' id='myFom" . $row["masp"]. "' method='post'>
                    <div class='giohang'>
                        <input type='hidden' name='masp' value='" . $row["masp"] . "'>
                        <i class='fa-solid fa-cart-shopping'></i>
                        <a onclick='submitForm(\"myFom" . $row["masp"] . "\")'>Thêm vào giỏ hàng</a>
                    </div>
                    </form>
                </div>
            </div>";
        }
    echo "</div>";
    echo "<div class = 'khungpagination'>";
    if($page > 8){
        for($i = 1; $i <= 3; $i++){
        
            if($pagecurrent == $i){
                echo"<div class='pagination'>";
                echo "<a>$i</a>";
                echo" </div>";
            }else{
                echo "<form action='tongsp.php' id='myFor" . $id_loai . "' method='post'>";
                echo "  <input type='hidden' name='loaiid' value='" . $id_loai . "'>
                        <input type='hidden' name='page' value='".$i."'>
                        <div class='pagination'>
                        <a onclick='submitForm(\"myFor" . $id_loai . "\")'>$i</a>
                        </div>
                  </form>";
                  
            }
        }
         echo "  <div class='pagination'>
                    <a onclick='submitForm(\"myFor" . $id_loai . "\")'>..</a>
                </div>";
        for($i=$page-2; $i <= $page; $i++){
        
            if($pagecurrent == $i){
                echo"<div class='pagination'>";
                echo "<a>$i</a>";
                echo" </div>";
            }else{
                echo "<form action='tongsp.php' id='myFor" . $id_loai . "' method='post'>";
                echo "  <input type='hidden' name='loaiid' value='" . $id_loai . "'>
                        <input type='hidden' name='page' value='".$i."'>
                        <div class='pagination'>
                        <a onclick='submitForm(\"myFor" . $id_loai . "\")'>$i</a>
                        </div>
                  </form>";
                  
            }
        }
    }else{
        for($i = 1; $i <= $page; $i++){
        
            if($pagecurrent == $i){
                echo"<div class='pagination'>";
                echo "<a>$i</a>";
                echo" </div>";
            }else{
                echo "<form action='tongsp.php' id='myFor" . $id_loai . "' method='post'>";
                echo "  <input type='hidden' name='loaiid' value='" . $id_loai . "'>
                        <input type='hidden' name='page' value='".$i."'>
                        <div class='pagination'>
                        <a onclick='submitForm(\"myFor" . $id_loai . "\")'>$i</a>
                        </div>
                  </form>";
                  
            }
        }
    }
    
   
    echo" </div>";

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
            if($row2["makm"] != null){
                $sql_km="SELECT * FROM khuyenmai WHERE makm = '" .$row2["makm"]. "'";
                $kq_km = mysqli_query($conn, $sql_km) or die ("Không thể xuất thông tin khuyến mãi ".mysqli_error($conn));
                while($row_km=mysqli_fetch_array($kq_km)){
                   $gia_km = $row2["giaban"]- $row_km["phantramkm"] * $row2["giaban"];
                   $gia_km = number_format($gia_km, 0, ',', '.') . 'đ';
                   $gia_goc = number_format($row2["giaban"], 0, ',', '.') . 'đ';
                   $ptram = $row_km["phantramkm"] *100;
                }
                echo "<div class='khungsp'>
                    <div class='sp'>
                         <img src=" . $row2["hinhanh"] . ">";
                         if( $ptram != null){
                             echo"<span>- " .$ptram. "%</span>";
                         }
                echo"</div>
                    <div class='mota'>
                         <div class='khungchu'>
                            <h2>" . $tenloai . "</h2>
                            <span>" . $tensp . "</span>
                        </div>";
                            echo "<div class='gia'>
                                    <label style='text-decoration: line-through; color:red'>" .$gia_goc. "</label>
                                    <label style='color: #11998e; font-weight: bold;'>" . $gia_km . "</label>
                                 </div>";
            }else{
                echo "<div class='khungsp'>
                    <div class='sp'>
                         <img src=" . $row2["hinhanh"] . ">";
                echo"</div>
                    <div class='mota'>
                         <div class='khungchu'>
                            <h2>" . $tenloai . "</h2>
                            <span>" . $tensp . "</span>
                        </div>";
                    $gia_goc = number_format($row2["giaban"], 0, ',', '.') . 'đ';
                    echo "<div class='gia'>
                            <label style='color: #11998e; font-weight: bold;'>" . $gia_goc . "</label>
                        </div>";
                       
                }
                echo"<form action='chitietsp.php' id='myFom" . $row2["masp"]. "' method='post'>
                    <div class='giohang'>
                        <input type='hidden' name='masp' value='" . $row2["masp"] . "'>
                        <i class='fa-solid fa-cart-shopping'></i>
                        <a onclick='submitForm(\"myFom" . $row2["masp"] . "\")'>Thêm vào giỏ hàng</a>
                    </div>
                    </form>
                </div>
            </div>";
                    
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