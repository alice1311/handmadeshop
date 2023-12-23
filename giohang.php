<?php
include("before.php")
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;800&display=swap');


.khunggh {
    gap: 30px;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    width: 100%;
    align-items: center;
    margin-top: 30px;

}

table {
    border-collapse: collapse;
    width: 80%;

}

td {
    height: 150px;
}

th {
    font-size: 20px;
    font-weight: bold;
    color: #11998e;
}

h1 {
    color: #11998e;
}

th,
td {
    width: 300px;
    font-size: 15px;
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.buttongh {
    width: 80%;
    display: flex;
    gap: 20px;
    background-color: white;
    height: 30px;
    justify-content: right;
}

.thanhtoan>a {
    display: flex;
    background: var(--Main, linear-gradient(83deg, #11998e -1.62%, #38ef7d 104.38%));
    width: 150px;
    height: 40px;
    font-weight: 800;
    font-size: 18px;
    color: white;
    border: none;
    border-radius: 3px;
    justify-content: center;
    align-items: center;
}

.thanhtoan > a:hover{
    color: #11998e;
    background: white;
    border: 3px solid #38ef7d;
}

.thanhtoan>span {
    font-size: 16px;
    margin-right: 100px;
    color: red;
    font-weight: 600;
}

.thanhtoan {
    width: 80%;
    display: flex;
    flex-direction: column;
    gap: 20px;
    background-color: white;
    height: 80px;
    justify-content: center;
    align-items: flex-end;
}

.buttongh>button {
    background-color: #11998e;
    border-radius: 3px;
    width: 100px;
    border: none;
    color: white;
    font-weight: 800;
}
.buttongh>button:hover{
    color: #11998e;
    background: white;
    border: 3px solid #38ef7d;
}
img {
    width: 130px;
    height: 120px;
}
</style>
<div class="khunggh">
    <h1>GIỎ HÀNG CỦA BẠN</h1>
    <div class="buttongh">
        <button>Xóa tất cả</button>
        <button>Chọn tất cả</button>
    </div>
    <table>
        <tr>
            <th> <input type="checkbox" /></th>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá tiền</th>
            <th>Tổng tiền</th>
            <th>Thao tác</th>
        </tr>
        <tr>
            <td><input type="checkbox" /></td>
            <td><img src="./img/a10.jpg" /></td>
            <td>Bó bông màu xanh lá hẹ he he</td>
            <td>2</td>
            <td>300.000</td>
            <td>600.000</td>
            <td><i class="fa-solid fa-trash-can"></i></td>
        </tr>
        <tr>
            <td><input type="checkbox" /></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><i class="fa-solid fa-trash-can"></i></td>
        </tr>
    </table>
    <div class="thanhtoan">
        <span>Tổng thanh toán: </span>
        <a href="donhang.php">Đặt hàng</a>
    </div>
</div>



<?php
include("after.php")
?>