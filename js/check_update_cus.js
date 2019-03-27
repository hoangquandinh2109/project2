function check_update_info() {
    var dob = document.getElementById("dob-cus").value;
    var name = document.getElementById("name-cus").value;
    var phone = document.getElementById("phone-cus").value;
    var address = document.getElementById("address-cus").value;
    document.getElementById("erro-name").innerHTML = "";
    document.getElementById("erro-phone").innerHTML = "";
    document.getElementById("erro-dob").innerHTML = "";
    document.getElementById("erro-address").innerHTML = "";
    if (name.length < 1) {
        document.getElementById("erro-name").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập tên';
        return false;
    }

    if (dob.length < 1) {
        document.getElementById("erro-dob").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập ngày sinh';
        return false;
    }
    if (phone.length < 1) {
        document.getElementById("erro-phone").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập sdt';
        return false;
    }
    if (address.length < 1) {
        document.getElementById("erro-address").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập địa chỉ';
        return false;
    }
    return true;
}
function check_pass_update() {
    var oldpass = document.getElementById("oldpass").value;
    var newpass = document.getElementById("newpass").value;
    var renewpass = document.getElementById("renewpass").value;
    document.getElementById("up-oldpass-erro").innerHTML = "";
    document.getElementById("up-pass-erro").innerHTML = "";
    document.getElementById("up-repass-erro").innerHTML = "";
    if(oldpass.length<1){
        document.getElementById("up-oldpass-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập mật khẩu cũ';
        return false;
    }
    if(newpass.length<1){
        document.getElementById("up-pass-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập mật khẩu cũ';
        return false;
    }
    if(renewpass.length<1){
        document.getElementById("up-repass-erro").innerHTML = '<b style="font-size:16px;">X</b> vui lòng nhập mật khẩu cũ';
        return false;
    }
    if(newpass!=renewpass){
        document.getElementById("up-repass-erro").innerHTML = 'Mật khẩu chưa chính xác';
        return false;
    }
return true;
}
function check_pass(){
    var pass = document.getElementById("newpass").value;
    document.getElementById("up-pass-erro").innerHTML = "";
    document.getElementById("up-pass-erro-medium").innerHTML = "";
    document.getElementById("up-pass-erro-high").innerHTML = "";
    if (pass.length > 5 && pass.length <= 10) {
        document.getElementById("up-pass-erro").innerHTML = 'Độ bảo mật thấp';
    }
    if (pass.length > 10 && pass.length <= 17) {
        document.getElementById("up-pass-erro-medium").innerHTML = 'Độ bảo mật trung bình';
    }
    if (pass.length > 17) {
        document.getElementById("up-pass-erro-high").innerHTML = 'Độ bảo mật cao';
    }
}
function check_repass(){
    var repass= document.getElementById("newpass").value;
     var pass = document.getElementById("renewpass").value;
     document.getElementById("up-repass-erro").innerHTML = "";
     if (repass.length < 1) {
        document.getElementById("up-repass-erro").innerHTML = '';      
    } else {
     if(repass!=pass){
        document.getElementById("up-repass-erro").innerHTML = 'Mật khẩu chưa chính xác';
     }}
}