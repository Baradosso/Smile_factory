function loadDb() {
    var xhttp;
    var order_by = document.getElementById("order_by").value;
    var str = document.getElementById("look_for").value;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("usersList").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../../Functions/includes/getUsersBySearch.inc.php?search=" + str + "&order_by=" + order_by, true);
    xhttp.send();
}

function deleteUser(user) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    var text = "Na pewno chesz usunąć tego użytkownika: " + user + "?";

    if (confirm(text)) {
        xhttp.open("POST", "../../Functions/includes/usersDelete.inc.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("useruid=" + user);
    }
    loadDb();
}

function manageUser(user) {
    loadFiles();
    var xhttp;
    xhttp = new XMLHttpRequest();

    document.getElementById("managePageSection").style.display = "initial";
    document.getElementById("managePage").style.display = "initial";

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("manageUsersFiles").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../../Functions/includes/usersManage.inc.php?user=" + user, true);
    xhttp.send();
}

function loadFiles() {
    var xhttp;
    var order_by = document.getElementById("order_by_files").value;
    var str = document.getElementById("look_for_files").value;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("showAllFiles").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../../Functions/includes/usersFiles.inc.php?search=" + str + "&order_by=" + order_by, true);
    xhttp.send();
}

function closeManageWindow() {
    document.getElementById("managePageSection").style.display = "none";
    document.getElementById("managePage").style.display = "none";
}

function setRelation(file) {

    var user = document.getElementById('userUidToFunction').value;
    var xhttp;
    xhttp = new XMLHttpRequest();
    var text = "Na pewno chesz udostępnić użytkownikowi ten plik: " + file + "?";

    if (confirm(text)) {
        xhttp.open("POST", "../../Functions/includes/setRelation.inc.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("fileName=" + file + "&userUid=" + user);
    }
    setTimeout(manageUser(user), 2000);
}

function deleteRelation(file) {
    var user = document.getElementById('userUidToFunction').value;
    var xhttp;
    xhttp = new XMLHttpRequest();
    var text = "Na pewno chesz zabrać dostęp do tego pliku: " + file + "?";

    if (confirm(text)) {
        xhttp.open("POST", "../../Functions/includes/deleteRelation.inc.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("fileName=" + file + "&userUid=" + user);
    }
    setTimeout(manageUser(user), 2000);
}