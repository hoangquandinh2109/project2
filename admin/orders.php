<?php 
require_once '../class/database.php';
$db = new Database();
$orders = $db->getAll('orders');
session_start();
if (!isset($_SESSION['adminname'])) {
    header("Location: login.php");
}
$pagename="Danh sách đơn hàng";
include 'templates/header.php';
 ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Danh sách đơn hàng</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the .</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Tên khách hàng</th>
                      <th>Tổng Tiền</th>
                      <th>Trạng thái</th>
                      <th>Thành viên</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Tên khách hàng</th>
                      <th>Tổng Tiền</th>
                      <th>Trạng thái</th>
                      <th>Thành viên</th>
                      <th>Thao tác</th>
                    </tr>
                  </tfoot>
                  <tbody>
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
                    function ismember($id){
                      if ($id == 0) {
                        return "không";
                      } else {
                        return "có";
                      }
                    }
                    if (isset($orders)){ foreach ($orders as $order) {?>
                    <tr>
                      <td><a href="order-detail.php?id=<?=$order->orders_id?>"><?=$order->orders_id?></a></td>
                      <td><?=$order->orders_name?></td>
                      <td><?=$order->orders_price?></td>
                      <td><?=status($order->orders_status)?></td>
                      <td><?=ismember($order->customer_id)?></td>
                      <td>
                        <a href="deleteorder.php?id=<?=$order->orders_id?>" class="btn btn-danger btn-circle btn-sm">
                          <i class="fas fa-trash"></i>
                        </a>
                        <a href="editorder.php?id=<?=$order->orders_id?>&stt=<?=$order->orders_status?>" class="btn btn-info btn-circle btn-sm">
                          <i class="fas fa-pen"></i>
                        </a>
                      </td>
                    </tr>
                  <?php }} ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include 'templates/footer.php';
 ?>
