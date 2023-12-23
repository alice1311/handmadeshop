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
    width: 40%;
    border: 1px solid gainsboro;
    background-color: white;
    height: 300px;
}
.td{
    display: flex;
    background-color: white;
    width: 100%;
    height: 40px;
    font-size: 18px;
    font-weight: 500;
    justify-content: center;
    align-items: center;
}
.lh{
        display: flex;
    flex-direction: column;
}
.lhtext{
    padding-left: 20px;
    display: flex;
    font-size: 15px;
    align-items: center;
    background-color:#f3f3f3;
    width: 100%;
    height: 30px;
}
.nametxt{
    border-bottom: 1px solid #ddd;
}
.nametxt , .nbtxt{
    padding: 10px 0 10px 20px;
    gap: 10px;
    font-size: 12px;
    display: flex;
    flex-direction: column;
    width: 100%;
    height: auto;
    background-color: white;
}

.nbtext > input{
    height:40px;
    width: 100%;
    padding-left: 20px;
}

.btnluu{
    display: flex;
    height: 30px;
    justify-content: center;
    margin-top: 10px;
}
.btnluu >button{
    font-size: 15px;
    width: 120px;
    border-radius: 3px;
    font-weight: 600;
    color: white;
    border: none;
    background-color: #19989e;
}

.btnluu >button:hover{
    background-color: white;
    color: #19989e;
    border: 2px solid #38ef7d;
}

</style>

<div class="fredit">
    <div class="frame">
        <label class="td">Thay đổi địa chỉ giao hàng</label>
        <div class="lh">
            <label class="lhtext">Liên hệ</label>
            <label class="nametxt">
                <span>Phạm Quyển Đình</span>
            </label>
            <label class="nbtxt">
                <span>0998787838</span>
            </label>
        </div>
        <div class="lh">
            <label class="lhtext">Địa chỉ</label>
            <label class="nametxt">
                <span>Khóm mấy phường mấy thành phố nào tỉnh nào</span>
            </label>
            <label class="nbtext">
                <input type="text" placeholder="Nhập địa chỉ mới"/>
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