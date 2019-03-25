<?php 
require_once '../class/database.php';
session_start();
if (!isset($_SESSION['adminname'])) {
    header("Location: login.php");
}
$db = new Database();
if (isset($_POST['editorder'])) {
 $newstt = $_POST['status']; 
 $id = $_POST['id']; 
  $db->executeQuery("UPDATE `orders` SET `orders_status` = '$newstt' WHERE `orders`.`orders_id` = $id;");
  header("Location: orders.php");
}
if (isset($_GET['id'])) {
  $status = $_GET['stt'];
$pagename="Chỉnh sửa đơn hàng";
include 'templates/header.php';
 ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Chỉnh sửa đơn hàng</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the .</p>

          <!-- DataTales Example -->
          <div class="row">
            <div class="col-lg-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa đơn hàng</h6>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="post">
                            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                            <div class="form-group">
                                <lable class="control-label " for="customer">Trạng thái đơn hàng: </lable>
                                    <div>
                                      <select name="status" class="form-control">
                                        <option value="1" <?=($status == 1)?'selected':''?>>Chưa giao hàng</option>
                                        <option value="2" <?=($status == 2)?'selected':''?>>Đã giao hàng</option>
                                        <option value="3" <?=($status == 3)?'selected':''?>>Đã hủy</option>
                                      </select>
                                    </div>
                            </div>
                            
                            
                          
                          <div class="form-group"> 
                              <button class="btn btn-primary btn-icon-split" name="editorder" >
                                        <span class="icon text-white-50">
                                        <i class="fas fa-plus-circle"></i>
                                      </span>
                                      <span class="text">Sửa</span>
                                </button>
                            </div>
                      </form>
              </div>

            </div>
          </div>
        </div>
      </div>
        <!-- /.container-fluid -->

<?php include 'templates/footer.php';
} ?>
