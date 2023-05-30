"use strict"

function createURL() {
    var txtUrl = document.getElementById("txtUrl").value;
    var pResult = document.getElementById("pResult");

    if (txtUrl.length <= 3) {
        pResult.innerHTML = "<span style='color: red'>Invalid URL</span>";
        return false;
    }
    return false;
}

function remove(id) {
    if (id === 0 || id === "") return;

    if (confirm("Deseja realemtne remover essa URL?"))
        console.log(id);
}