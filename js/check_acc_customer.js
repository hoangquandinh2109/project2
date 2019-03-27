function check_signup() {
    var acc = document.getElementById("acc-sign").value;
    var email = document.getElementById("email-sign").value;
    var pass = document.getElementById("pass-sign").value;
    var repass = document.getElementById("repass-sign").value;
    var name = document.getElementById("name-sign").value;
    document.getElementById("erro-acc").innerHTML = "";
    document.getElementById("erro-email").innerHTML = "";
    document.getElementById("erro-pass").innerHTML = "";
    document.getElementById("erro-repass").innerHTML = "";
    document.getElementById("erro-name").innerHTML = "";

    if (acc.length < 1) {
        document.getElementById("erro-acc").innerHTML = '<b style="font-size:16px;">X</b> vui lòng điền tên đăng nhập';
        return false;
    }
    if (email.length < 1) {
        document.getElementById("erro-email").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập email ex:example@gmail.com';
        return false;
    }
    if (pass.length < 1) {
        document.getElementById("erro-pass").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập mật khẩu';
        return false;
    }
    if (repass.length < 1) {
        document.getElementById("erro-repass").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập lại mật khẩu';
        return false;
    } else {
        if (repass != pass) {
            document.getElementById("erro-repass").innerHTML = '<b style="font-size:16px;">X</b> mật khẩu phải giống nhau';
            return false;
        }
    }
    if (name.length < 1) {
        document.getElementById("erro-name").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập tên';
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
    var pass = document.getElementById("pass-sign").value;
    document.getElementById("erro-pass").innerHTML = "";
    document.getElementById("erro-pass-medium").innerHTML = "";
    document.getElementById("erro-pass-high").innerHTML = "";
    if (pass.length > 5 && pass.length <= 10) {
        document.getElementById("erro-pass").innerHTML = 'Độ bảo mật thấp';
    }
    if (pass.length > 10 && pass.length <= 17) {
        document.getElementById("erro-pass-medium").innerHTML = 'Độ bảo mật trung bình';
    }
    if (pass.length > 17) {
        document.getElementById("erro-pass-high").innerHTML = 'Độ bảo mật cao';

    }
}
function check_repass(){
    var repass= document.getElementById("repass-sign").value;
     var pass = document.getElementById("pass-sign").value;
     document.getElementById("erro-repass").innerHTML = "";
     if (repass.length < 1) {
        document.getElementById("erro-repass").innerHTML = '';      
    } else {
     if(repass!=pass){
        document.getElementById("erro-repass").innerHTML = 'Mật khẩu chưa chính xác';
     }}
}