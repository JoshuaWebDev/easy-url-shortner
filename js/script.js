"use strict"

function createURL() {
    var txtUrl = document.getElementById("txtUrl").value;
    var pResult = document.getElementById("pResult");

    pResult.innerHTML = "";

    if (txtUrl.length <= 3) {
        pResult.innerHTML = "<span style='color: red'>Invalid URL</span>";
        return false;
    }

    return true;
}

function remove(id) {
    if (id === 0 || id === "") return;

    if (confirm("Deseja realemtne remover essa URL?"))
        console.log(id);
}

function login() {
    var txtUserKey = document.getElementById("txtUserKey").value;
    var pResult = document.getElementById("pResult");

    pResult.innerHTML = "";

    if (txtUserKey.length <= 3) {
        pResult.innerHTML = "<span style='color: red'>Invalid User Key</span>";
        return false;
    } else {
        return true;
    }
}