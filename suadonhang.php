<?php
include("before.php");
?>

<head>
    <link rel="stylesheet" href="admin.css" />
</head>

<style>
.tabledh {
    margin-top: 30px;
    gap: 25px;
    height: 280px;
    background-color: #F3F3F3;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 15px;
    justify-content: center;
}
.suama1, .suama2, .suama3{
    display: flex;
    gap: 60px;
}
.boxsua, .boxsua1, .boxsua2{
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.boxsua > input, .boxsua1>input , .boxsua2>input{
    height: 30px;
    width: 230px;
    border-radius: none;
    border: 1px solid black;
}
.boxsua > span , .boxsua1 > span , .boxsua2>span{
    font-weight: 600;
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
            <a href="quanlytaikhoan.php" class="tab_tt">
                <i class="fa-solid fa-users-gear"></i>
                <span>Quản lý tài khoản</span>
            </a>
            <a href="quanlyloaisp.php" class="tab_tt">
                <i class="fa-solid fa-sitemap"></i>
                <span>Quản lý loại sản phẩm</span>
            </a>
            <a href="quanlysp.php" class="tab_tt">
                <i class="fa-solid fa-list"></i>

                <span>Quản lý sản phẩm</span>
            </a>

            <a href="quanlydonhang.php" class="tab_tt">
                <i class="fa-solid fa-bag-shopping"></i>
                <span>Quản lý đơn hàng</span>
            </a>

            <a href="quanlyctietdon.php" class="tab_tt">
                <i class="fa-solid fa-newspaper"></i>
                <span>Quản lý chi tiết đơn hàng</span>
            </a>

            <a href="quanlykhuyenmai.php" class="tab_tt">
                <i class="fa-solid fa-ticket"></i>
                <span>Quản lý khuyến mãi</span>
            </a>

            <a href="quanlynv.php" class="tab_tt">
                <i class="fa-solid fa-users"></i>
                <span>Quản lý nhân viên</span>
            </a>

            <a href="quanlykhach.php" class="tab_tt">
                <i class="fa-solid fa-user"></i>
                <span>Quản lý khách hàng</span>
            </a>

            <a href="quanlydanhgia.php" class="tab_tt">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
                <span>Quản lý đánh giá</span>
            </a>

            <a href="quanlythanhtoan.php" class="tab_tt">
                <i class="fa-solid fa-cash-register"></i>
                <span>Quản lý thanh toán</span>
            </a>
        </div>
    </div>

    <div class="frright">
        <div class="texttd">
            <label>Sửa thông tin đơn hàng</label>
        </div>
        

        <div class="tabledh">
            <div class="suama1">
                <div class="boxsua">
                    <span>Mã đơn hàng</span>
                    <input type="text" readonly />
                </div>

                <div class="boxsua">
                    <span>Mã khách hàng</span>
                    <input type="text" readonly />
                </div>

                <div class="boxsua">
                    <span>Mã nhân viên</span>
                    <input type="text"  readonly />
                </div>


            </div>

            <div class="suama2">
                <div class="boxsua1">
                    <span>Mã thanh toán</span>
                    <input type="text" readonly />
                </div>

                <div class="boxsua1">
                    <span>Ngày tạo</span>
                    <input type="text"/>
                </div>

                <div class="boxsua1">
                    <span>Tổng tiền</span>
                    <input type="text"/>
                </div>
            </div>

            <div class="suama3">
                <div class="boxsua2">
                    <span>Trạng thái</span>
                    <input type="text" name="madh"/>
                </div>

                <div class="boxsua2">
                    <span>Địa chỉ</span>
                    <input type="text" name="madh"/>
                </div>
            </div>

        </div>

        <div class="btn"><button>Lưu thay đổi</button></div>



    </div>

</div>

<style>
    .thongtinacc > :nth-child(4){
    color:#19989e;
    }
</style>

<?php
include("after.php");
?>