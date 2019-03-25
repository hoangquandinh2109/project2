<?php
    include '../php_check_acc/connect_sever.php';
    session_start();
    if (!isset($_SESSION['adminname'])) {
    header("Location: login.php");
}
include 'templates/header.php';
?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Cập nhật mật khẩu</h1>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Cập nhật mật khẩu</h6>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="../php_check_acc/update_admin.php" method="post" onsubmit="return check_update_pass()">                                  
                                    <div class="form-group">
                                        <label class="control-label " for="product">Mật khẩu cũ: <span id="oldpass-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="password" name="oldpasstxt" class="form-control" id="oldpass-admin" >
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label " for="product">Mật khẩu mới: <span id="newpass-erro" style="color: red"></span>
                                            <span id="newpass-erro-medium" style="color:#ffcc00;"></span>
                                            <span id="newpass-erro-high" style="color:#00cc33;"></span></label>
                                        <div class="">
                                            <input type="password" name="newpasstxt" class="form-control" id="newpass-admin" 
                                                   pattern="^[A-Za-z0-9]{6,100}" title="Mật khẩu phải từ 6 kí tự trở lên" onkeyup="check_update_newpass()">
                                        </div>
                                    </div>   
                                    <div class="form-group">
                                        <label class="control-label " for="product">Nhập lại mật khẩu mới: <span id="renewpass-erro" style="color: red"></span></label>
                                        <div class="">
                                            <input type="password" name="renewpasstxt" class="form-control" id="renewpass-admin"  onkeyup="check_update_repass()">
                                        </div>
                                    </div>   
                                    <div class="form-group"> 
                                        <button type="submit" name="submit_update_pass_admin" class="btn btn-primary btn-icon-split">
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
<?php 
include 'templates/footer.php'; ?>