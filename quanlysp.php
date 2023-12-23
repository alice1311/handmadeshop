<?php
include("before.php")
?>

<head>
    <link rel="stylesheet" a href="css/quanly.css" />
</head>
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
            <label>Thông tin sản phẩm</label>
        </div>
        <div class="btnxoa">
            <button>Xóa tất cả</button>
        </div>

        <div class="tths">
            <table>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>Giá bán</th>
                    <th>Tồn kho</th>
                    
                </tr>
                <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                    <td><a href="suasp.php">Thay đổi</a></td>
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
