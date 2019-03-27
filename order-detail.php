   <?php 
   session_start();
    require_once 'class/database.php';
    $db = new Database();
    function nameCosmetic($id){
    $db = new Database();
      $abc = $db->findOne('cosmetic','cosmetic_id',$id);
      return $abc->cosmetic_title;
    }

    function priceCosmetic($id){
    $db = new Database();
      $abc = $db->findOne('cosmetic','cosmetic_id',$id);
      return $abc->cosmetic_price;
    }
    if (isset($_GET['id'])) {
      $orderdetails = $db->getAllWhere('order_detail','orders_id',$_GET['id']);
      $order = $db->findOne('orders','orders_id',$_GET['id']);
   }

   $pagename="Chi tiết đơn hàng";
   include 'templates/header.php'; 

   ?>
   <div class="body-page">
    <div class="container">
        <span id="login-location-line"><span>Trang chủ</span> <i class="fas fa-chevron-right"></i><span>Tài khoản</span> <i class="fas fa-chevron-right"></i><span>Đơn hàng của tôi</span> <i class="fas fa-chevron-right"></i> <span id="page-location">Chi tiết</span></span>
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
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                    </tr>
                  <?php $id = 1; foreach ($orderdetails as $detail) {?>
                    <tr>
                      <td><?=$id++?></td>
                      <td><?=nameCosmetic($detail->cosmetic_id)?></td>
                      <td><?=priceCosmetic($detail->cosmetic_id)?></td>
                      <td><?=$detail->order_detail_quantity?></td>
                    </tr>
                  <?php } ?>
                 </table>
                </div>
            </div>
        </div>
   
<?php include 'templates/footer.php'; ?>