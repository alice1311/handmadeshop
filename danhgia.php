<?php
include("before.php")
?>

<style>
.fredit {
    display: flex;
    min-height: 100vh;
    background-color: white;
    justify-content: center;
    align-items: center;

}

.frame {
    width: 70%;
    border: 1px solid gainsboro;
    background-color: white;
    height: auto;
}

.td {
    display: flex;
    background-color: white;
    width: 100%;
    height: 40px;
    font-size: 18px;
    font-weight: 500;
    justify-content: center;
    align-items: center;
}

.lh {
    display: flex;
    flex-direction: column;
}

.lhtext {
    padding-left: 20px;
    display: flex;
    font-size: 15px;
    align-items: center;
    background-color: #f3f3f3;
    width: 100%;
    height: 30px;
    font-weight: 600;
}

.nametxt {
    border-bottom: 1px solid #ddd;
}

.nametxt,
.nbtxt {
    padding: 10px 0 10px 20px;
    gap: 10px;
    font-size: 12px;
    display: flex;
    flex-direction: column;
    width: 100%;
    height: auto;
    background-color: white;
}

.nbtext>input {
    height: 80px;
    width: 90%;
    padding-left: 20px;
}

.nbtext{
    margin-top: 20px;
    display: flex;
    justify-content: center;
}
.btnluu {
    margin-bottom: 20px;
    display: flex;
    height: 30px;
    justify-content: center;
    margin-top: 20px;
}

.btnluu>button {
    font-size: 15px;
    width: 120px;
    border-radius: 3px;
    font-weight: 600;
    color: white;
    border: none;
    background-color: #19989e;
}

.btnluu>button:hover {
    background-color: white;
    color: #19989e;
    border: 2px solid #38ef7d;
}

.nametxtt {
    padding: 10px 0 10px 20px;
    gap: 10px;
    font-size: 12px;
    display: flex;
    width: 100%;
    height: auto;
    background-color: white;
}

.nametxtt>img {
    display: flex;
    width: 100px;
    height: 120px;
}

.infsp {
    gap: 20px;
    display: flex;
    flex-direction: column;
}

.infsp>label {
    font-size: 15px;
    font-weight: 500;
}
.rate{
    display: flex;
    margin-top: 10px;
    gap: 20px;
    justify-content: center;
    align-items: center;

}
.rate > button{
    width: 120px;
    height: 30px;
    font-size: 13px;
    border: 1px solid burlywood;
    border-radius: 2px;
    color: black;
}

.rate>button:hover{
    background-color: wheat;
}
</style>

<div class="fredit">
    <div class="frame">
        <label class="td">Đánh giá sản phẩm</label>
        <div class="lh">
            <label class="lhtext">Tên tài khoản</label>
            <label class="nametxt">
                <span>dinhdinh@1223</span>
            </label>
        </div>
        <div class="lh">
            <label class="lhtext">Sản phẩm</label>
            <label class="nametxtt">
                <img src="./img/a4.jpg" />
                <div class="infsp">
                    <label>Tên sản phẩm</label>
                    <span>Số lượng: </span>
                </div>
        </div>
        <div class="lh">
            <label class="lhtext">Độ hài lòng</label>
            <div class="rate">
                <button>Kém</button>
                <button>Không hài lòng</button>
                <button>Bình thường</button>
                <button>Hài lòng</button>
                <button>Tuyệt vời</button>
</div>
        </div>
    <div class="lh">
            <label class="nbtext">
                <input type="text" placeholder="Hãy chia sẻ những đánh giá về sản phẩm của chúng mình ở đây nhé!"/>
            </label>
        </div>
    <div class="btnluu">
        <button>Lưu thay đổi</button>
    </div>
</div>
</div>
<?php
include("after.php")
?>