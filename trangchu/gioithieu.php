<?php
include("before.php")
?>

<style>

html {
    font-size: 65%;
    overflow-x: hidden;
    position: relative;
}


.khunggthieu {
    margin-top: 30px;
    min-height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 20px;
}


.bott-khung h3 {
    font-size: 25px;
    color: #11998e;
}

.bott-abbr {
    height: 30px;
    padding: 5px 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;


}

.abbr {
    display: flex;
    flex-direction: column;

}

hr {
    border: 1px solid #ddd;
    width: 300px;
}

h3{
    font-size: 25px;
    font-weight: 500;
}
h4 {
    font-size: 27px;
    font-weight: 700;
    color: #11998e;
}

.abbrimg {

    display: flex;
    align-items: center;
    justify-content: center;
}

img {

    display: block;
    width: 600px;
    height: 500px;
}

.intro {
    flex-direction: column;
    gap: 20px;
    display: flex;
    padding-left: 30px;
    padding-right: 30px;

}

.intro p {

    font-size: 18px;
    font-weight: 400;
    text-align: justify;
    line-height: 30px;
    
}
.intro p > a {
    color: #11998e;
    font-weight: 600;
    font-style: italic;
}

.intro span {
    color: #11998e;
    font-weight: 600;
}
.intro h5{
    font-size: 27px;
    font-weight: 700;
    color: #11998e;
}
</style>

<div class="khunggthieu">
    <div class="abbr">
        <div class="bott-abbr">
            <hr>
            <h3>Sơ lược về <h4>"Handmade Flower"</h4>
            </h3>
            <hr>
        </div>
        <div class="abbrimg">
            <img src="img/cover.png" />
        </div>
        <div class="intro">
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thương hiệu <span>"Handmade Flower"</span> đại diện cho những sản
                phẩm len được tạo ra hoàn toàn bằng tay bởi những bạn sinh viên đã có kinh nghiệm, sử dụng hoàn toàn len
                tự nhiên. Khi mua hàng, mọi người có thể yên tâm về chất lượng của sản phẩm. Điều này giúp cho sản phẩm
                trở nên đặc biệt và giá trị hơn trong mắt khách hàng.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chúng tôi luôn đặt khách hàng làm trọng tâm, mỗi sản phẩm từ
                Handmade Flower không đơn giản chỉ là hàng hóa, mà còn là biểu tượng của sự tận tâm và sự tỉ mỉ, mang
                lại giá trị cảm xúc và sự hài lòng cho người mua. Cam kết 100% sản phẩm len tại <span>"Handmade
                    Flower"</span> là hàng thủ công chất lượng cao, chúng tôi tự hào là điểm đến tin cậy cho những ai
                yêu thích và trân trọng nghệ thuật len.
            </p>

            <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Với phương châm:<a> "Vì sự hài lòng của khách hàng" </a>chúng tôi đã và đang nỗ lực đồng tâm đồng lòng cùng gây dựng và phát triển thương hiệu từng ngày, nhằm không ngừng nâng cao chất lượng sản phẩm và dịch vụ để mang tới mọi người những trải nghiệm sản phẩm tuyệt vời và ấn tượng với sản phẩm từ len!
            </p>
        </div>
    </div>
</div>

<?php
include("after.php")
?>