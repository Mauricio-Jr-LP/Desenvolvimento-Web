function valida() {
    if (form1.Nome.value == "") {
        Mudarestado('labelNome');
        form1.Nome.focus();
        return false;
    }
    if (form1.CPF.value == "") {
        Mudarestado('labelCPF');
        form1.CPF.focus();
        return false;
    }
    if (form1.Sexo.value == "") {
        Mudarestado('labelSexo');
        form1.Sexo.focus();
        return false;
    }
    if (form1.Perfil.value == "") {
        Mudarestado('labelPerfil');
        form1.Perfil.focus();
        return false;
    }
    if (form1.Email.value == "") {
        Mudarestado('labelPerfil');
        form1.Email.focus();
        return false;
    }
    if (form1.Senha.value == "") {
        Mudarestado('labelSenha');
        form1.Senha.focus();
        return false;
    }
}

FormData = new FormData();

document.getElementById("filePerfil").onchange = function (e) {
    if (e.target.files != null && e.target.files.length != 0) {
        FormData.append("foto", e.target.files[0]);
        alert('sajfnja');
    }
}

document.getElementById("enviar").onclick = function () {
    var Nome = document.getElementById("inputNome");
    var CPF = document.getElementById("inputCPF");

    if (Nome.value != "" && CPF.value != "") {
        FormData.append("nome", Nome.value);
        FormData.append("cpf", CPF.value);
        var xmlhttp = new XMLGttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
                alert(xmlhttp.responseText);
        }
        xmlhttp.open("POST", "recebe.php", true);
        xmlhttp.send(FormData);
    }
    else {
        alert("informe todos os campos");
    }
}