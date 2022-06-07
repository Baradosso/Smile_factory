function loadDb() {
    var xhttp;
    var order_by = document.getElementById("order_by").value;
    var str = document.getElementById("look_for").value;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("filesList").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../../Functions/includes/getFilesBySearch.inc.php?search=" + str + "&order_by=" + order_by, true);
    xhttp.send();
}

function deleteUser(file) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    var text = "Na pewno chesz usunąć ten plik: " + file + "?";

    if (confirm(text)) {
        xhttp.open("POST", "../../Functions/includes/filesDelete.inc.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("fileName=" + file);
    }
    loadDb();
}

function manageFiles(file) {
    var xhttp;
    xhttp = new XMLHttpRequest();

    document.getElementById("managePageSection").style.display = "initial";
    document.getElementById("managePage").style.display = "initial";

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("manageFiles").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../../Functions/includes/filesManage.inc.php?file=" + file, true);
    xhttp.send();
}

function closeManageWindow() {
    document.getElementById("managePageSection").style.display = "none";
    document.getElementById("managePage").style.display = "none";
}