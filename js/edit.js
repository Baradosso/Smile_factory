var firstname = document.getElementById("firstname");
var secondname = document.getElementById("secondname");
var email = document.getElementById("email");
var phone = document.getElementById("phone");

var lpwd = document.getElementById("pwdlabel");
var lnpwd = document.getElementById("newpwdlabel");
var lrnpwd = document.getElementById("repnewpwdlabel");


var pwd = document.getElementById("pwd");
var newpwd = document.getElementById("newPwd");
var repnewpwd = document.getElementById("repNewPwd");

var btn = document.getElementById("sbmt_btn");

var edtname = document.getElementById("editName");
var edtsecondname = document.getElementById("editSecondName");
var edtemail = document.getElementById("editEmail");
var edtphone = document.getElementById("editPhone");
var edtpwd = document.getElementById("editPwd");

var fn_val = firstname.value;
var sn_val = secondname.value;
var em_val = email.value;
var ph_val = phone.value;

document.getElementById("editName").onclick = function editName() {

    if (firstname.disabled) {
        firstname.disabled = false;

        btn.disabled = false;
    }
    else {
        firstname.value = fn_val;

        firstname.disabled = true;
    }
    
    return false;
}

document.getElementById("editSecondName").onclick = function editSecondName() {

    if (secondname.disabled) {

        secondname.disabled = false;

        btn.disabled = false;
    }
    else {
        secondname.value = sn_val;
        secondname.disabled = true;
    }

    return false;
}

document.getElementById("editEmail").onclick = function editEmail() {

    if (email.disabled) {
        email.disabled = false;
    }
    else {
        email.value = em_val;
        email.disabled = true;
    }

    return false;
}

document.getElementById("editPhone").onclick = function editPhone() {

    if (phone.disabled) {
        phone.disabled = false;
    }
    else {
        phone.value = ph_val;
        phone.disabled = true;
    }

    return false;
}

document.getElementById("editPwd").onclick = function editPwd() {

    if (pwd.disabled) {
        pwd.disabled = false;

        lpwd.innerHTML = 'Obecne hasło:';

        lnpwd.style.display = "initial";
        newpwd.style.display = "initial";

        lrnpwd.style.display = "initial";
        repnewpwd.style.display = "initial";

    }
    else {
        pwd.value = "";

        pwd.disabled = true;

        lpwd.innerHTML = 'Hasło:';
 
        lnpwd.style.display = "none";
        newpwd.style.display = "none";

        lrnpwd.style.display = "none";
        repnewpwd.style.display = "none";
    }

    return false;
}