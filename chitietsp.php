<?php
include("before.php");
include("config.php");
?>

<head>
<link rel ="stylesheet" href="css/chitietsp.css"/>


<script>
let slideIndex = 1;
showSlides(slideIndex);
function increaseValue() {
  var value = parseInt(document.getElementById('quantity').value, 10);
  value = isNaN(value) ? 1 : value; // Nếu không phải là số, giá trị mặc định là 1
  value++;
  document.getElementById('quantity').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('quantity').value, 10);
  value = isNaN(value) ? 1 : value; // Nếu không phải là số, giá trị mặc định là 1
  value < 2 ? value = 1 : value--;
  document.getElementById('quantity').value = value;
}

// Đảm bảo chỉ có số không âm được nhập vào input
document.getElementById('quantity').addEventListener('keydown', function(e) {
  // Cho phép các phím số từ 0-9, phím Backspace và phím Delete
  if (!((e.keyCode > 47 && e.keyCode < 58) || (e.keyCode > 95 && e.keyCode < 106) || e.keyCode === 8 || e.keyCode === 46)) {
    e.preventDefault();
  }
});
function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;

}
</script>
</head>
<?php 
    if (isset($_POST['masp'])) {
        $id_sp =  $_POST['masp'];
        $sql_sp = "SELECT * FROM sanpham WHERE masp = '" . $id_sp . "'";
        $kq_sp = mysqli_query($conn, $sql_sp) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($conn));       
        
        while($row_sp=mysqli_fetch_array($kq_sp))
        {  echo "<div class='khungsp'>
                <div class='container'>";
            $sql_anh = "SELECT * FROM anh_sanpham WHERE masp = '" . $id_sp . "'";
            $kq_anh = mysqli_query($conn, $sql_anh) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($conn));
            while($row_anh =mysqli_fetch_array($kq_anh)){
                echo "<div class='mySlides'>
                        <img src='" . $row_anh["url_anh"] . "'>
                     </div>";
                
            }
            echo "<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
                    <a class='next' onclick='plusSlides(1)'>&#10095;</a>";
            echo"<div class='row'>";
            $count = 1;
            $kq_anh2 = mysqli_query($conn, $sql_anh) or die ("Không thể xuất thông tin sản phẩm ".mysqli_error($conn));
            while($row_anh2 =mysqli_fetch_array($kq_anh2)){
                echo "<div class='column'>
                         <img class='demo cursor' src='" . $row_anh2["url_anh"] . "' style='width:100%' onclick='currentSlide(".$count.")'>
                    </div>";
                $count = $count +1;
            }    
            echo" </div>";
            echo " </div>";
            echo "<div class='container-sp'>";
            echo"<div class='infosp'>
                    <label>".$row_sp["tensp"]."</label>
                </div>";
            echo"<div class='khungprice'>";
            echo"<div class='price'>";
            if($row_sp["makm"]!=null){
                $sql_km="SELECT * FROM khuyenmai WHERE makm = '" .$row["makm"]. "'";
                $kq_km = mysqli_query($conn, $sql_km) or die ("Không thể xuất thông tin khuyến mãi ".mysqli_error($conn));
                while($row_km=mysqli_fetch_array($kq_km)){
                    $gia_km = $row_sp["giaban"]- $row_km["phantramkm"] * $row_sp["giaban"];
                    $gia_km = number_format($gia_km, 0, ',', '.') . 'đ';
                    $gia_goc = number_format($row_sp["giaban"], 0, ',', '.') . 'đ';
                    $ptram = $row_km["phantramkm"] *100;
                    echo"<span>".$gia_goc."</span>
                            <a>".$gia_km."</a>";
                }
            }else{
                $gia_goc = number_format($row_sp["giaban"], 0, ',', '.') . 'đ';
                echo"<a>Giá : ".$gia_goc."</a>";
            }
            echo" </div>";
            echo" </div>";
            echo "<div class='mota'>";
            echo "<span>MÔ TẢ SẢN PHẨM</span>";
            $thongtin = $row_sp["chitietsp"];
            $chitiets = explode('.', $thongtin);
            // In ra nhiều thẻ <p>
            foreach ($chitiets as $chitiet) {
                echo "<p>$chitiet</p>";
            }
            echo"<div class='ctmua'>
                <label class='soluong'>
                    <span>Số lượng</span>
                    <button onclick='decreaseValue()'>-</button>
                        <input type='text' id='quantity' value='1' oninput='validity.valid||(value='');>
                    <button onclick='increaseValue()'>+</button>
                </label>
                </div>";
            echo" </div>";
            
            echo"<div class='dathang'>
                     <a href='donhang.php'>Thêm vào giỏ hàng</a>
                     <a href='donhang.php'>Mua ngay</a>
                </div>";   
                
            echo" </div>";
            echo" </div>";
        }
        
    }
?>
        
<div class="khungcmt">
    <label class="textcmt">ĐÁNH GIÁ SẢN PHẨM</label>
    <div class="frdanhgia">
        <div class="tddg">
            <label>Độ hài lòng</label>
            <i class="fa-regular fa-face-grin-stars"></i>
        </div>
        <div class="danhgia">
            <div class="mucdo">
                <button>Tất cả</button>
                <button>Kém</button>
                <button>Không hài lòng</button>
                <button>Bình thường</button>
                <button>Hài lòng</button>
                <button>Tuyệt vời</button>
            </div>
        </div>
    </div>
    <div class="frcmt">
        <div class="dgia1">
            <div class="anhsp">
                <img src="./img/a6.jpg"/>
            </div>
            <div class="danhgiasp">
                <label>dinhdinh123</label>
                <span>Hài lòng</span>
                <label>bó hoa tu dkfjdklfjlkd</label>
                <label>Số lưọng: 1</label>
                <label>Chưa xài chưa biết ntn x giao hàng nhanh. Hàng chính hãng, bao bì thích mắt, mùi lại thơm, chất kem dễ dàng thắm nhanh cảm thấy k bết rít. 
Mình rất ưng và sẽ ủng hộ tipê sạ</label>
            </div>
        </div>

        <div class="dgia1">
            <div class="anhsp">
                <img src="./img/a9.jpg"/>
            </div>
            <div class="danhgiasp">
                <label>thaothao</label>
                <span>Không hài lòng</span>
                <label>bó hoa tu dkfjdklfjlkd</label>
                <label>Số lưọng: 1</label>
                <label>Chưa xài chưa biết ntn x giao hàng nhanh. Hàng chính hãng, bao bì thích mắt, mùi lại thơm, chất kem dễ dàng thắm nhanh cảm thấy k bết rít. 
Mình rất ưng và sẽ ủng hộ tipê sạ</label>
            </div>
        </div>
    </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function() {
    currentSlide(1);
});
</script>




<?php
include("after.php")
?>