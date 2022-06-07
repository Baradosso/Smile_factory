function loadDb(str) {
    var xhttp;

    if (str == "" || str == null) {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("usersList").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "includes/getUsers.inc.php?", true);
        xhttp.send();
        return;
    }

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("usersList").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "includes/getUsersBySearch.inc.php?search=" + str, true);
    xhttp.send();
}