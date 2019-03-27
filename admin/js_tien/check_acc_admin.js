function check_add_admin() {
    var acc = document.getElementById("acc-admin").value;
    var email = document.getElementById("email-admin").value;
    var pass = document.getElementById("pass-admin").value;
    var name = document.getElementById("name-admin").value;
    var phone = document.getElementById("phone-admin").value;
    var address = document.getElementById("address-admin").value;
    document.getElementById("acc-admin-erro").innerHTML = "";
    document.getElementById("pass-admin-erro").innerHTML = "";
    document.getElementById("name-admin-erro").innerHTML = "";
    document.getElementById("phone-admin-erro").innerHTML = "";
    document.getElementById("address-admin-erro").innerHTML = "";
    document.getElementById("email-admin-erro").innerHTML = "";
    if (acc.length < 1) {
        document.getElementById("acc-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng điền tên đăng nhập';
        return false;
    }
    if (pass.length < 1) {
        document.getElementById("pass-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập mật khẩu';
        return false;
    }
    if (name.length < 1) {
        document.getElementById("name-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập tên';
        return false;
    }
    if (phone.length < 1) {
        document.getElementById("phone-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập sdt';
        return false;
    }
    if (address.length < 1) {
        document.getElementById("address-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập địa chỉ';
        return false;
    }
    if (email.length < 1) {
        document.getElementById("email-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập email ex:example@gmail.com';
        return false;
    }
    return true;
}

function check_login() {
    var acclog = document.getElementById("log-acc").value;
    var passlog = document.getElementById("log-pass").value;
    document.getElementById("log-acc-erro").innerHTML = "";
    document.getElementById("log-pass-erro").innerHTML = "";

    if (acclog.length < 1) {
        document.getElementById("log-acc-erro").innerHTML = '<b style="font-size:16px;">X</b>vui lòng nhập tài khoản';
        return false;
    }
    if (passlog.length < 1) {
        document.getElementById("log-pass-erro").innerHTML = '<b style="font-size:16px;">X</b>vui lòng nhập mật khẩu';
        return false;
    }
    return true;
}
function check_pass() {
    var pass = document.getElementById("pass-admin").value;
    document.getElementById("pass-admin-erro").innerHTML = "";
    document.getElementById("pass-admin-erro-medium").innerHTML = "";
    document.getElementById("pass-admin-erro-high").innerHTML = "";
    if (pass.length > 5 && pass.length <= 10) {
        document.getElementById("pass-admin-erro").innerHTML = 'Độ bảo mật thấp';
    }
    if (pass.length > 10 && pass.length <= 16) {
        document.getElementById("pass-admin-erro-medium").innerHTML = 'Độ bảo mật trung bình';
    }
    if (pass.length > 16) {
        document.getElementById("pass-admin-erro-high").innerHTML = 'Độ bảo mật cao';
    }
}
function check_repass() {
    var repass = document.getElementById("repass-sign").value;
    var pass = document.getElementById("pass-sign").value;
    document.getElementById("erro-repass").innerHTML = "";
    if (repass.length < 1) {
        document.getElementById("erro-repass").innerHTML = '';
    } else {
        if (repass != pass) {
            document.getElementById("erro-repass").innerHTML = 'Mật khẩu chưa chính xác';
        }
    }
}
function check_login() {
    var account = document.getElementById('acc-admin').value;
    var pass = document.getElementById('pass-admin').value;
    document.getElementById("acc-admin-erro").innerHTML = "";
    document.getElementById("pass-admin-erro").innerHTML = "";
    if (account.length < 1) {
        document.getElementById("acc-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập tài khoản';
        return false;
    }
    if (pass.length < 1) {
        document.getElementById("pass-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập mật khẩu';
        return false;
    }
}
function check_update_admin() {
    var name = document.getElementById('name-admin').value;
    var phone = document.getElementById('phone-admin').value;
    var address = document.getElementById('address-admin').value;
    document.getElementById("name-admin-erro").innerHTML = "";
    document.getElementById("phone-admin-erro").innerHTML = "";
    document.getElementById("address-admin-erro").innerHTML = "";
    if (name.length < 1) {
        document.getElementById("name-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập tên';
        return false;
    }
    if (phone.length < 1) {
        document.getElementById("phone-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập số điện thoại';
        return false;
    }
    if (address.length < 1) {
        document.getElementById("address-admin-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập địa chỉ';
        return false;
    }
}


function check_update_repass() {
    var repass = document.getElementById("renewpass-admin").value;
    var pass = document.getElementById("newpass-admin").value;
    document.getElementById("renewpass-erro").innerHTML = "";
    if (repass.length < 1) {
        document.getElementById("renewpass-erro").innerHTML = '';
    } else {
        if (repass != pass) {
            document.getElementById("renewpass-erro").innerHTML = 'Mật khẩu chưa chính xác';
        }
    }
}
function check_update_newpass() {
    var pass = document.getElementById("newpass-admin").value;
    document.getElementById("newpass-erro").innerHTML = "";
    document.getElementById("newpass-erro-medium").innerHTML = "";
    document.getElementById("newpass-erro-high").innerHTML = "";
    if (pass.length > 5 && pass.length <= 10) { 
        document.getElementById("newpass-erro").innerHTML = 'Độ bảo mật thấp';
    }
    if (pass.length > 10 && pass.length <= 16) {
        document.getElementById("newpass-erro-medium").innerHTML = 'Độ bảo mật trung bình';
    }
    if (pass.length > 16) {
        document.getElementById("newpass-erro-high").innerHTML = 'Độ bảo mật cao';
    }
}
function check_update_pass() {
    var oldpass = document.getElementById("oldpass-admin").value;
    var newpass = document.getElementById("newpass-admin").value;
    var renewpass = document.getElementById("renewpass-admin").value;
    var repass = document.getElementById("renewpass-admin").value;
    var pass = document.getElementById("newpass-admin").value;
    document.getElementById("oldpass-erro").innerHTML = "";
    document.getElementById("newpass-erro").innerHTML = "";
    document.getElementById("renewpass-erro").innerHTML = "";
    if (oldpass.length < 1) {
        document.getElementById("oldpass-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập mật khẩu cũ';
        return false;
    }
    if (newpass.length < 1) {
        document.getElementById("newpass-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập mật khẩu mới';
        return false;
    }
    if (renewpass.length < 1) {
        document.getElementById("renewpass-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập lại mật khẩu mới';
        return false;
    } else {
        if (repass != pass) {
            document.getElementById("renewpass-erro").innerHTML = 'Mật khẩu chưa chính xác';
            return false;
        }
    }
    return true;
}