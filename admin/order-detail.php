   <?php 
   session_start();
    require_once '../class/database.php';
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
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Chi tiết đơn hàng</h1>
          <p class="mb-4">Địa chỉ: <strong><?=$order->orders_address?></strong></p>
          <p class="mb-4">Email: <strong><?=$order->orders_email?></strong></p>
          <p class="mb-4">Số điện thoại: <strong><?=$order->orders_phone?></strong> </p>
          <p class="mb-4">Ghi chú khách hàng: <strong><?=$order->orders_description?></strong> </p>
          <p class="mb-4">Phương thức thanh toán: <strong><?=$order->orders_method?></strong></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm trong đơn hàng</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên sản phẩm</th>
                      <th>Giá</th>
                      <th>Số lượng</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Tên sản phẩm</th>
                      <th>Giá</th>
                      <th>Số lượng</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $id = 1; foreach ($orderdetails as $detail) {?>
                    <tr>
                      <td><?=$id++?></td>
                      <td><?=nameCosmetic($detail->cosmetic_id)?></td>
                      <td><?=priceCosmetic($detail->cosmetic_id)?></td>
                      <td><?=$detail->order_detail_quantity?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
<?php include 'templates/footer.php'; ?>