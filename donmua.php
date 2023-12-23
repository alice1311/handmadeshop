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

.texttd>span {
    font-size: 15px;
}

.tths {
    display: flex;
    height: auto;
    flex-direction: column;
    gap: 20px;
    align-items: center;
    margin-top: 50px;
}

.texths {
    display: flex;
    font-size: 15px;
    gap: 10px;

}

table,
td,
th {
    border: 1px solid #D0D4CA;
}

table {
    border-collapse: collapse;
    width: 100%;
    text-align: center;
    background-color: #F3F3F3;
}

th{
    height: 50px;
    font-size: 15px;
}
td {
    height: auto;
    font-size: 15px;
}

td>a {
    text-decoration: underline;
}

.btn {
    display: flex;
    justify-content: center;
    margin-top: 30px;

}
.image{
    display: flex;
    justify-content: center;
    height: auto;
}
img{
    display: block;
    width: 90px;
    height: 100px;
}
/* 
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
} */
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
            <a href="doimatkhau.php" class="tab_tt">
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
            <label>Đơn hàng của tôi</label>
            <span>Theo dõi tình trạng đơn hàng tại đây</span>
        </div>

        <div class="tths">
            <table>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Ngày mua</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th></th>
                </tr>
                <tr>
                    <td>bó hoa tulip 5 bông</td>
                    <td class="image"><img src="./img/a5.jpg"/></td>
                    <td>2</td>
                    <td>23/12/2023</td>
                    <td>500.000</td>
                    <td>Đang giao hàng</td>
                    <td><a href="danhgia.php">Đánh giá</a></td>
                </tr>
            </table>
        </div>
        <!-- <div class="btn"><button>Lưu hồ sơ</button></div> -->



    </div>

</div>
<style>
.thongtinacc > :nth-child(3){
    color:#19989e;
}
</style>

<?php
include("after.php")
?>