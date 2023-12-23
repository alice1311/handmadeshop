<?php
include("before.php")
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;800&display=swap');

.khungsp {
    display: flex;
    min-height: 100vh;
    width: 100%;
    margin-top: 30px;
}

img {
    display: block;
    height: 494px;

}

.container-sp {
margin-left: 30px;
    width: 40%;
    height: 90vh;
    display: flex;
    flex-direction: column;
    line-height: 30px;
}

.container {
    flex-wrap: nowrap;
    width: 50%;
    height: 90vh;
    position: relative;
    display: flex;
    flex-direction: column;
    padding-left: 162px;
}

/* ẩn ảnh theo mặc định */
.mySlides {
    display: none;
    width: 550px;
    height: 500px;
    border: 3px solid #11998e;
}

/*pointer khi hovering thumbnail images */
.cursor {
    cursor: pointer;
}


.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 40%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.prev:hover,
.next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

/* dòng đánh số trang ảnh */
.numbertext {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    font-weight: 600;
}

/* dòng phân ảnh*/
.caption-container {

    background-color: white;

    height: 16.5px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

.column {
    float: left;
    width: 137.5px;
    height: 168px;
}

/* hiệu ứng trong suốt cho thumbnail */
.demo {
    opacity: 0.3;
    height: 168px;
    border: 3px solid #11998e;
}

.active,
.demo:hover {
    opacity: 1;
}

.row {
    height: 168px;
    width: 552px;
    gap: 2px;
    display: flex;

}

.infosp {
    gap: 10px;
    background-color: white;
    display: flex;
    flex-direction: column;
    height: 70px;
    justify-content: center;
    padding-left: 30px;
}

.infosp>label {
    font-size: 20px;
    font-weight: 800;
    color: #11998e;

}

.cmtstar {
    display: flex;
    font-size: 18px;
    color: #E7B10A;
    gap: 5px;

}

.khungprice {
    height: 70px;
    background-color: whitesmoke;
    margin-left: 30px;
    margin-right: 30px;
    display: flex;
}

.price>span {
    padding-left: 20px;
    text-decoration: line-through;
    color: red;
    font-weight: 600;
    font-size: 18px;
}

.price>a {
    color: #11998e;
    font-size: 25px;
    font-weight: 600;
}

.price {
    gap: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.ctmua {
    display: flex;
    flex-direction: column;
    gap: 10px;
    height: 70px;
    background-color: white;
    padding-left: 30px;
}

.soluong {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-top: 10px;
}

.soluong>span {
    font-size: 15px;
    font-weight: 500;
}

.soluong>input {
    height: 25px;
    width: 50px;
}

.tonkho {
    font-size: 15px;
    font-weight: 500;
}

.mota {
    margin-top: 20px;
    font-size: 15px;
    line-height: 35px;
    display: flex;
    flex-direction: column;
    height: 300px;
    padding-left: 30px;
}

.mota>span {
    font-weight: 500;
    font-size: 18px;
}

.dathang {
    display: flex;
    justify-content: center;
    margin-top: 50px;

}

.dathang>a {
    display: flex;
    background: var(--Main, linear-gradient(83deg, #11998e -1.62%, #38ef7d 104.38%));
    height: 40px;
    width: 180px;
    border: none;
    font-size: 20px;
    color: white;
    font-weight: 600;
    justify-content: center;
    align-items: center;

}

.dathang>a:hover {
    background: white;
    color: #11998e;
    border: 3px solid #38ef7d;
}

.khungcmt {
    height: 100%;
    background-color: antiquewhite;
}

.khungcmt>h3 {
    font-size: 20px;
    font-weight: 600;
}
</style>
<script>
let slideIndex = 1;
showSlides(slideIndex);

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

<div class="khungsp">

    <!-- khung chứa -->
    <div class="container">

        <!--ảnh hiển thị-->
        <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="./img/a1.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="./img/a2.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="./img/a3.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="./img/a4.jpg" style="width:100%">
        </div>


        <!--nút trái phải -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- dòng phân chữ -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- ảnh chuyển thumbnail -->
        <div class="row">
            <div class="column">
                <img class="demo cursor" src="./img/a1.jpg" style="width:100%" onclick="currentSlide(1)">
            </div>
            <div class="column">
                <img class="demo cursor" src="./img/a2.jpg" style=" width:100%" onclick="currentSlide(2)">
            </div>
            <div class="column">
                <img class="demo cursor" src="./img/a3.jpg" style="width:100%" onclick="currentSlide(3)">
            </div>
            <div class="column">
                <img class="demo cursor" src="./img/a4.jpg" style="width:100%" onclick="currentSlide(4)">
            </div>

        </div>
    </div>

    <div class="container-sp">
        <div class="infosp">
            <label>Bó hoa ly ly 5 bông phối màu trắng tím siêu xinh</label>
        </div>

        <div class="khungprice">
            <div class="price">
                <span>230.000</span>
                <a>180.000</a>
            </div>
        </div>

        <div class="ctmua">
            <label class="soluong">
                <span>Số lượng:</span>
                <input type="number" />
            </label>
            <label class="tonkho">Tồn kho:</label>
        </div>

        <div class="mota">
            <span>MÔ TẢ SẢN PHẨM</span>
            <p>- Hoa len móc thủ công</p>
            <p>- Thành phẩm có sẵn, đặt là giao ngay ạ</p>
            <p>- Sử dụng len milk bò</p>
            <p>- Đảm bảo chất lượng sản phẩm</p>
            <p>- Xử lý nhanh chóng các vấn đề về hoa khi hàng bị lỗi, giao thiếu hàng hoặc nhầm mẫu </p>
            <p>Do màn hình và điều kiện ánh sáng khác nhau, màu sắc thực tế của hoa có thể chênh lệch khoảng từ 2-4%
            </p>
        </div>

        <div class="dathang">
            <a href="donhang.php">Đặt hàng</a>
        </div>
    </div>
</div>
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

<style>
    .danhgiasp>span{
        text-align: center;
        width: 130px;
        font-size: 14px;
        background-color: white;
        border: 1px solid #11998e;
        border-radius: 3px;
    }
    .anhsp{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
    }
    .anhsp>img{
        display: flex;
        width: 130px;
        height: 150px;
    }
    .danhgiasp{
        font-size: 14px;
        gap: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        line-height: 20px;
        padding: 10px;
    }
    .tddg{
       margin-left: 35px;
        display: flex;
        flex-direction: column;
        font-size: 30px;
        width: 300px;
        justify-content: center;
        align-items: center;
        font-weight: 600 ;
        gap: 10px;
    }
    .tddg > i{
        color: #E7B10A;
    }
    .tddg > label{
        color: #E7B10A;
    }
    .dgia1{
        gap: 20px;
        height: auto;
        background-color: #f2f2f2;
        width: 90%;
        display: flex;
       
        
    }
.frcmt {
    margin-top: 30px;
    background-color: white;
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 20px;
}
.khungcmt{
    border-top: 10px solid #11998e;
}
.textcmt {
    margin-top: 20px;
    padding: 10px 0px 10px 70px;
    display: flex;
    align-items: flex-start;
    width: 100%;
    /* background-color: #38ef7d; */
    font-size: 20px;
    font-weight: 700;
}

.khungcmt {
    display: flex;
    flex-direction: column;
    background-color: white;
    align-items: center;
}

.frdanhgia {
    display: flex;
    align-items: center;
    height: 100px;
    justify-content: center;
    width: 90%;
    border: 1px solid #11998e;

}

.danhgia {
    display: flex;
    align-items: center;
    height: 70px;
    width: 95%;
    gap: 30px;
    justify-content: center;
}

.mucdo {
    display: flex;
    align-items: center;
    gap: 30px;
}

.mucdo>button {
    background-color: white;
    border: 1px solid #ddd;
    font-size: 15px;
    width: 130px;
    height: 30px;

}

.mucdo>button:hover {
    background-color: #f2f2f2;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    currentSlide(1);
});
</script>




<?php
include("after.php")
?>