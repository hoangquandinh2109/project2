<?php 
session_start();
require_once 'class/database.php';
$db = new Database();
if (isset($_SESSION['name'])) {
  $username = $_SESSION['name'];
  $cus = $db->findOne('CUSTOMER','CUSTOMER_USERNAME',"'$username'");
  $cus_id = $cus->CUSTOMER_ID;
  $orders = $db->getAllWhere('orders','customer_id', $cus_id);

} else header("Location: .");
$pagename = 'Đơn hàng của tôi';
include 'templates/header.php';
?>
<div class="body-page">
    <div class="container">
        <span id="login-location-line"><span>Trang chủ</span> <i class="fas fa-chevron-right"></i><span>Tài khoản</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Đơn hàng của tôi</span></span>
        <div class="clearfix">
            <div class="side-bar">
                <h1 class="title-line"><span>Tài Khoản</span></h1>
                <div>
                    <p><a href="account.php"><i class="fas fa-user"></i>Thông tin cá nhân</a></p>
                    <p><a href="myorders.php"><i class="far fa-list-alt"></i>Đơn hàng của tôi</a></p>
                    <p><a href="doimatkhau.php"><i class="fas fa-key"></i>Thay đổi mật khẩu</a></p>
                    <p><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></p>
                </div>
            </div>
            <div class="main-login-content">
                <h1 class="title-line"><span>Đơn hàng của tôi</span></h1>
                <div>
                   <style>
                     .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                      border-color: #94bae0;
                     }
                   </style>
                   <table class="table table-hover">
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Tổng cộng</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                  <?php 
                        function status($vav)
                        {
                          switch ($vav) {
                            case 1:
                              return "Chưa giao hàng";
                              break;
                            case 2:
                              return "Đã giao hàng";
                              break;
                            case 3:
                              return "Đã hủy";
                              break;
                          }
                        }
                        if (isset($orders)){ foreach ($orders as $order) {?>
                        <tr>
                          <td><a href="order-detail.php?id=<?=$order->orders_id?>"><?=$order->orders_id?></a></td>
                          <td><?=$order->orders_price?></td>
                          <td><?=status($order->orders_status)?></td>
                          <td>
                            <?=($order->orders_status == 2 || $order->orders_status == 3)?'':'<a style="top: 0;" href="cancelorder.php?id=<?=$order->orders_id?>" class="submit-login-btn btn btn-default button-form">
                              Hủy đơn hàng
                            </a>'?>
                          </td>
                        </tr>
                      <?php }} ?>
                 </table>
                </div>
            </div>
        </div>

        <?php include 'templates/footer.php'; ?>