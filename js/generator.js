document.getElementById("pwdGen").onclick = function randomPassword() {

    let values = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+";
    let password = "";

    for (var i = 0; i <= 12; i++) {
        password = password + values.charAt(Math.floor(Math.random() * Math.floor(values.length - 1)));
    }
    document.getElementById("generatedPwd").value = password;

    return false;
}

document.getElementById("pwdCopy").onclick = function copyPassword() {
    document.getElementById("generatedPwd").select();
    document.execCommand("Copy");
    alert("Skopiowano hasło");

    return false;
}

