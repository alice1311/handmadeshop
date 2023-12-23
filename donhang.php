<?php
include("before.php")
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;800&display=swap');

.khungtong {
    background-color: white;
    min-height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;

}

.khungtt {
    border-radius: 15px 15px 0 0;
    margin-top: 30px;
    margin-bottom: 20px;
    height: fit-content;
    width: 35%;
    background-color: #F5F5F5;
    border: 1px solid #D8D9DA;
}

.tde {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: white;

    border-radius: 15px 15px 0 0;
    width: 100%;
    height: 50px;
}

.tde>span {
    font-size: 18px;
    font-weight: 600;
}

.khungdiachi {
    width: 100%;
    height: 100px;
    margin-top: 10px;
    flex-direction: column;
    display: flex;
    gap: 5px;
    font-size: 15px;
    justify-content: flex-start;
    padding-left: 10px;
    padding-top: 10px;
}

.khungdiachi>label {
    display: flex;
    gap: 10px;
}

.khungdiachi>label>i {
    color: red;
    font-size: 17px;
}

.khungdiachi>label>span {
    font-weight: 500;
    gap: 10px;
    font-size: 15px;
    font-weight: 600;
}

.khungdiachi>p {
    font-size: 14px;
    padding-left: 15px;
    padding-right: 10px;
    line-height: 20px;

}

.khungdiachi>a>i {
    display: flex;
    justify-content: flex-end;
    padding-right: 17px;
    color: red;
}

.khungctsp {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: auto;
    margin-top: 10px;
    background-color: white;
}

.namest {
    display: flex;
    width: 100%;
    height: 30px;
    align-items: center;
    padding-left: 13px;
    gap: 10px;
    font-size: 13px;
}

.namest * {
    color: #11998e;
    font-weight: 800;
    font-size: 17px;
}

.ctsp {
    gap: 10px;
    display: flex;
    flex-direction: column;
    width: 100%;
    height: auto;
    background-color: #F5F5F5;
}

.ct1 {
    display: flex;
}

.ctimg {
    display: flex;
    width: 90px;
    height: 90px;
    justify-content: center;
    align-items: flex-end;
    margin-left: 30px;
}

.ctimg>img {
    width: 70px;
    height: 80px;
}

.ctietsp {
    line-height: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-size: 13px;
}

.ctietsp>label {
    font-size: 14px;
    font-weight: 500;
}

.thanhtoan{
    line-height: 30px;
    display: flex;
    flex-direction: column;
    margin-top: 10px;
    font-size: 13px;
    height: 80px;
    width: 100%;
    justify-content: center;
    border-top: 0.5px solid #11998e;
    border-bottom: 0.5px solid #11998e;
}

.vanchuyen{
    /* margin-top: 10px; */
    display: flex;
    flex-direction: column;
    height: 70px;
    width: 100%;
    justify-content: center;
}
.thanhtoan>label , .vanchuyen>label {
    font-size: 15px;
    font-weight: 600;
    display: flex;
    padding-left: 15px;
    gap: 10px;
    align-items: center;
    justify-content: flex-start;
}

.thanhtoan>label>i , .vanchuyen>label>i{
    color: orangered;
}

.option {
    display: flex;
    gap: 80px;
    justify-content: center;
}

.optionvc{
font-size: 13px;
padding-left: 20px;
    display: flex;
    gap: 80px;
    justify-content: space-between;
    align-items: center;
}
.option>span {
    display: flex;
    gap: 10px;
}

.vanchuyen>label{
    padding-top: 10px;
    padding-bottom: 10px;
}
.tongtien {
    width: 100%;
    height: 40px;
    background-color: white;
    display: flex;
    align-items: center;
    padding-left: 20px;
    font-size: 13px;
}

.tongtien>label {
    width: 60%;
    font-weight: 600;
}

.tong {
    width: 40%;
    height: 30px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding-right: 20px;
    font-weight: 600;
    color: red;
    font-size: 15px;
}

.chitietdon {
    display: flex;
    width: 100%;
    height: auto;
    background-color: pink;
}

.btdhang {
    display: flex;
    height: 30px;
    align-items: center;
    justify-content: center;
    background-color: white;
}

.btdhang a {
    border-radius: 2px;
    margin-bottom: 10px;
    display: flex;
    background-color: #11998e;
    color: white;
    width: 100px;
    font-size: 15px;
    font-weight: 600;
    height: 28px;
    align-items: center;
    justify-content: center;
}

.btdhang a:hover {
    background-color: white;
    color: #11998e;
    border: 3px solid #38ef7d;
}
</style>


<div class="khungtong">

    <div class="khungtt">
        <div class="tde">
            <span>Đơn hàng của bạn</span>
        </div>

        <div class="khungdiachi">
            <label>
                <i class="fa-solid fa-location-dot"></i>
                <span>Địa chỉ nhận hàng</span>
            </label>
            <p>Nguyễn Thị Mỹ Yến 123434390 Khóm 3 Phường 5 Đường D5, Thành phố Trà Vinh</p>
            <a href="suadiachi.php"><i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="khungctsp">
            <div class="namest">
                <i class="fa-solid fa-store"></i>
                <span>Handmade Flower</span>
            </div>
            <div class="ctsp">
                <div class="ct1">
                    <div class="ctimg">
                        <img src="./img/a12.jpg" />
                    </div>
                    <div class="ctietsp">
                        <label>Bó hoa tulip 5 bông mix màu hồng siêu xinh</label>
                        <span>Số lượng: 1</span>
                        <span>Giá: 250.000</span>
                    </div>
                </div>
                <div class="ct1">
                    <div class="ctimg">
                        <img src="./img/a12.jpg" />
                    </div>
                    <div class="ctietsp">
                        <label>Bó hoa tulip 5 bông mix màu hồng siêu xinh</label>
                        <span>Số lượng: 1</span>
                        <span>Giá: 250.000</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="thanhtoan">
            <label>
                <i class="fa-solid fa-money-check-dollar"></i>
                <span>Phương thức thanh toán</span>
            </label>
            <div class="option">
                <span><input type="checkbox" />Thanh toán khi nhận hàng</span>
                <span><input type="checkbox" />Thanh toán qua VNPAY</span>
            </div>
        </div>
        <div class="vanchuyen">
            <label>
            <i class="fa-solid fa-cart-shopping"></i>
                <span>Đơn vị vận chuyển</span>
            </label>
            <div class="optionvc">
               <label>Giao hàng tiết kiệm </label>
            <div class="tong">
                <span>30.000</span>
            </div>
            </div>
        </div>
        <div class="tongtien">
            <label>Tổng số tiền (2 sản phẩm): </label>
            <div class="tong">
                <span>500.000</span>
            </div>
        </div>
        <div class="btdhang">
            <a href="">Đặt hàng</a>
        </div>
    </div>
</div>

<?php
include("after.php")
?>