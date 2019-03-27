<?php
include '../php_check_acc/connect_sever.php';
session_start();
require_once '../class/database.php';
include 'adminvip.php';
    $db = new Database();
    if (!isset($_SESSION['adminname'])){
        header("Location: login.php");
        
    }
    $pagename="Thông tin tài khoản";
include 'templates/header.php';
?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Thông tin Admin</h1>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Cập nhật thông tin</h6>
                            </div>
                            <div class="card-body">
                                <?php
                                $sqli = "select * from admin where ADMIN_USERNAME='" . $_SESSION['adminname'] . "'";
                                $result = mysqli_fetch_array(mysqli_query($conn, $sqli));
                                ?>
                                <form class="form-horizontal" action="../php_check_acc/update_admin.php"  method="post" onsubmit="return check_update_admin()">
                                    <div class="form-group">
                                        <label class="control-label " for="product">Tên admin: <span id="name-admin-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="text" name="nametxt" class="form-control" id="name-admin" placeholder="" value="<?php echo $result["ADMIN_NAME"] ?>">
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <label class="control-label " for="product">Số điện thoại: <span id="phone-admin-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="text" name="phonetxt" class="form-control" id="phone-admin" placeholder="" value="<?php echo $result["ADMIN_PHONE"] ?>"
                                                   pattern="^[0-9]{10}" value=""
                                                   title="sdt bắt buộc phải là 10 số">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label " for="product">Địa chỉ: <span id="address-admin-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="text" name="addresstxt" class="form-control" id="address-admin" placeholder="" value="<?php echo $result["ADMIN_ADDRESS"] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label " for="product">Email: <span id="email-admin-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="email" name="emailtxt" class="form-control" id="email-admin" placeholder=""
                                                   pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})" disabled="" value="<?php echo $result["ADMIN_EMAIL"] ?>"
                                                   title="email phải đúng định dạng xxxx@xxxx.xxx">
                                        </div>
                                    </div>      
                                    <div class="form-group">
                                        <label class="control-label " for="product">Chức vụ: <span id="address-admin-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="text" name="roletxt" class="form-control" id="address-admin" placeholder="" disabled=""
                                                   value="<?php if($result["ADMIN_ROLE"]==0){echo "Admin" ;}
                                                   if($result["ADMIN_ROLE"]==1){echo "Quản lí khách hàng" ;}
                                                   if($result["ADMIN_ROLE"]==2){echo "Quản lí đơn hàng" ;}
                                                   if($result["ADMIN_ROLE"]==3){echo "Quản lí sản phẩm" ;}
                                                   if($result["ADMIN_ROLE"]==4){echo "Quản lí bình luận" ;}
                                                   if($result["ADMIN_ROLE"]==5){echo "Quản lí phản hồi" ;}?>">
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <button type="submit" name="update_detail_admin" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-plus-circle"></i>
                                            </span>
                                            <span class="text">Cập nhật</span>
                                        </button>
                                    </div>
                                    <script language="javascript" src="js_tien/check_acc_admin.js"></script>
                                </form>
                            </div>
                        </div>


                    </div>
                    <!-- /.container-fluid -->
                    <?php include 'templates/footer.php'; ?>
