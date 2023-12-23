<?php
include("before.php")
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;800&display=swap');



.container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: fit-content;
    margin: 50px auto;
    gap: 100px;
    padding: 20px;
}

.container_text {
    align-items: center
}

/* css hình ảnh */
.container_img {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 700px;
    height: 700px;
    overflow: hidden;
}

.container_img img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.khungdk {
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 330px;
    height: 520px;
    align-items: center;
    justify-content: center;
    border: 1px solid #11998e;
    border-radius: 5px;
}

.ochua {
    display: flex;
    flex-direction: column;
    gap: 5px;
    margin: 0 20px;
}

.ochua>span {
    font-size: 15px;
    font-family: Montserrat;
    font-weight: 600;

}

.ochua>input {
    height: 30px;
    width: 250px;
    border-radius: 2px;
    border: 1px solid #11998e;
}

.dn {
    background-color: #11998e;
    color: white;
    width: 120px;
    height: 35px;
    font-size: 15px;
    font-weight: 660;
    text-align: center;
    padding: 7px 5px;
    border-radius: 3px;
    margin: 0 80px;
}

.dk>h1 {
    color: #11998e;
    font-weight: bolder;
    font-size: 23px;
    text-align: center;
    margin-bottom: 10px;
}

.dn:hover {
    border: 2px solid #11998e;
    background-color: white;
    color: #11998e;
}
</style>

<div class="container">
    <div class="container_img">
        <img src="img/cover.png" alt="" />
    </div>
    <div class="right">
        <div class="dk">
            <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
        </div>

        <div class="khungdk">
            <div class="ochua">
                <span>Họ và tên:</span>
                <input type="text" />

            </div>

            <div class="ochua">
                <span>Số điện thoại:</span>
                <input type="text" />

            </div>
            <div class="ochua">
                <span>Địa chỉ:</span>
                <input type="text" />
            </div>
            <div class="ochua">

                <span>Email:</span>
                <input type="text" />
            </div>
            <div class="ochua">
                <span>Tên đăng nhập:</span>
                <input type="text" />
            </div>
            <div class="ochua">
                <span>Mật khẩu:</span>
                <input type="password" />
            </div>

            <div class="dn"><span>Đăng ký</span></div>
        </div>
    </div>
</div>


<?php
include("after.php")
?>