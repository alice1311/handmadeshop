<?php
include("before.php")
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;800&display=swap');

.backgr {
    margin-top: 100px;
    display: flex;
    background-color: white;
    width: 100%;
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

.frleft {
    width: 20%;
    height: 800px;
    background-color: white;
}

.frright {
    width: 70%;
    height: 800px;

}

.nameacc {
    gap: 10px;
    width: auto;
    height: 80px;
    background-color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    border-bottom: 1px solid #D0D4CA;
}

.textacc {
    display: flex;
    font-weight: 600;
}

.textsua {
    display: flex;
    gap: 5px;
    font-size: 14px;
}

.thongtinacc {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-top: 50px;
    font-size: 15px;
    padding-left: 60px;
}

.tab_tt {
    gap: 15px;
    display: flex;
    align-items: center;
    color: black;
    font-weight: 600;
}

.texttd {
    background-color: white;
    display: flex;
    flex-direction: column;
    height: 80px;
    justify-content: center;
    gap: 8px;
    border-bottom: 1px solid #D0D4CA;
}

.texttd>label {
    font-size: 17px;
    font-weight: 600;
}

.texttd>span{
    font-size: 15px;
}

.tths{
    margin-top: 50px;
    background-color: white;
    display: flex;
    flex-direction: column;
    gap: 40px;
    height: 230px;
    align-items: center;
    justify-content: center;
    font-size: 15px;
}
.texths {
    display: flex;
    font-size: 18px;
    gap: 10px;

}

.ochua {

    display: flex;
    align-items: center;
    gap: 20px;
    margin: 0 20px;
}

.ochua>label {
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

.btn {
    display: flex;
    justify-content: center;


}


.btn > button{
    background-color: #11998e;
    width: 100px;
    height: 30px;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 13px;
    font-weight: 800;
}
.btn > button:hover{
    background-color: white;
    color: #11998e;
    border: 2px solid #38ef7d;
}
</style>
<div class="backgr">

    <div class="frleft">
        <div class="nameacc">
            <div class="textacc">
                <span>Phạm Quyển Đình</span>
            </div>

            <div class="textsua">
                <i class="fa-solid fa-user-pen"></i>
                <a href="suahoso.php">Sửa hồ sơ</a>
            </div>
        </div>

        <div class="thongtinacc">
            <a href="hoso.php" class="tab_tt">
                <i class="fa-solid fa-user-pen"></i>
                <span>Hồ sơ của tôi</span>
            </a>
            <a href="" class="tab_tt">
                <i class="fa-solid fa-key"></i>
                <span>Đổi mật khẩu</span>
            </a>

            <a href="donmua.php" class="tab_tt">
                <i class="fa-solid fa-file"></i>
                <span>Đơn mua</span>
            </a>
        </div>
    </div>

    <div class="frright">
        <div class="texttd">
            <label>Đổi mật khẩu</label>
            <span>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</span>
        </div>

        <div class="tths">
                <div class="frhs">
                <div class="ochua">
                <label>Nhập mật khẩu mới:</label>
                <input type="password" />
            </div>
            <div class="ochua">
                <label>Xác nhận mật khẩu: </label>
                <input type="password" />
                
            </div>
             <div class="btn"><button>Xác nhận</button></div>
        </div>

        </div>



    </div>

</div>


<style>
    .frhs{
 align-items: center;
    background-color: #f2f2f2;
    display: flex;
    flex-direction: column;
    gap: 40px;
    height: 230px;
    width: 700px;
    justify-content: center;
    font-size: 15px;
}
.thongtinacc > :nth-child(2){
    color:#19989e;
}
</style>
<?php
include("after.php")
?>