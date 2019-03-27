<?php
    include '../php_check_acc/connect_sever.php';
    require_once '../class/database.php';
    include 'adminvip.php';
    $db = new Database();
    session_start();
    if (isset($_SESSION['adminname'])) {
        if ($_SESSION['adminname'] != $abkjlskjdlfkjlluser && $_SESSION['adminpass'] != $ksdjfldksjflsdkjpass) {
            $adminname = $_SESSION['adminname'];
            $abc = $db->getAllWhere('admin','admin_username',"'$adminname'");
            $admin = $abc[0];
            if ($admin->ADMIN_ROLE != 0) {
                header("Location: index.php");
            }
        } 
    }else{
        header("Location: login.php");
        
    }
    $pagename = 'Thêm nhân viên';
    include 'templates/header.php';
?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Thêm admin mới</h1>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Thêm admin mới</h6>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="../php_check_acc/check_admin.php" method="post" onsubmit="return check_add_admin()">
                                    <div class="form-group">
                                        <label class="control-label " for="product">Username: <span id="acc-admin-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="text" name="accounttxt" class="form-control" id="acc-admin" placeholder=""
                                                   pattern="^[A-Za-z0-9]{6,20}"  
                                                   title="tài khoản phải từ 6 kí tự trở lên va` không được chưa khoảng trắng">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label " for="product">Password: <span id="pass-admin-erro" style="color: red"></span>
                                            <span id="pass-admin-erro-medium" style="color:#ffcc00;"></span>
                                            <span id="pass-admin-erro-high" style="color:#00cc33;"></span></label>
                                        <div class="">
                                            <input type="password" name="passtxt" class="form-control" id="pass-admin" placeholder="" onkeydown="check_pass()"
                                                   pattern="^[A-Za-z0-9]{6,100}"  
                                                   title="Mật khẩu phải từ 6 kí tự trở lên">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label " for="product">Tên admin: <span id="name-admin-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="text" name="nametxt" class="form-control" id="name-admin" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label " for="product">Số điện thoại: <span id="phone-admin-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="text" name="phonetxt" class="form-control" id="phone-admin" placeholder=""
                                                   pattern="^[0-9]{10}" value=""
                                                   title="sdt bắt buộc phải là 10 số">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label " for="product">Địa chỉ: <span id="address-admin-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="text" name="addresstxt" class="form-control" id="address-admin" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label " for="product">Email: <span id="email-admin-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="email" name="emailtxt" class="form-control" id="email-admin" placeholder=""
                                                   pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})"
                                                   title="email phải đúng định dạng xxxx@xxxx.xxx">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label " for="product">Chức vụ:</label>
                                        <div class="">
                                            <select class="form-control form-ctrl" name="roletxt">
                                              <?php if ($_SESSION['adminname'] == $abkjlskjdlfkjlluser && $_SESSION['adminpass'] == $ksdjfldksjflsdkjpass) { ?>
                                                <option value="0" label="Admin" selected="selected"></option><?php } ?>
                                                <option value="1" label="Quản lí khách hàng" ></option>              
                                                <option value="2" label="Quản lí đơn hàng" ></option>   
                                                <option value="3" label="Quản lí sản phẩm" ></option>  
                                                <option value="4" label="Quản lí bình luận" ></option>     
                                                <option value="5" label="Quản lí phản hồi" ></option>     
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <button type="submit" name="submit_add_admin" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-plus-circle"></i>
                                            </span>
                                            <span class="text">Thêm</span>
                                        </button>
                                    </div>
                                    <script language="javascript" src="js_tien/check_acc_admin.js"></script>
                                </form>
                            </div>
                        </div>
                      

                    </div>
                    <!-- /.container-fluid -->
<?php include 'templates/footer.php'; ?>