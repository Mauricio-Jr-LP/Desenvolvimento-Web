$(document).ready(function () {

	$(".form1").submit(function (e) {
		e.preventDefault();
		if ($("#inputNome").val() === '' || $("#inputCpf").val() === '' || $("#selecSx").val() === '' ||
			$("#filePerfil").val() === '' || $("#inputEmail").val() === '' || $("#inputSenha").val() === '' ) {
			alert('N FOI ENVIADO COM SUCESSO');
			valida_form();
		}

		else {
			alert('ENVIADO COM SUCESSO');
			var dados = new FormData(this);
			e.preventDefault();
			$.ajax({
				url: "backend/post.php",
				data: dados,
				type: "post",
				contentType: false,
				processData: false,

			}).done(function (data) {
			 
				if (data == 1) {
					$("#txt-modal").html("Dados Enviados com Sucesso!");
					//$("#exampleModal").modal();
					console.log("ok");
				} else {
					console.log("erro");
				}

			}).fail(function (data) {

				$("#txt-modal").html("Ocorreu um erro ao enviar os dados!");

			});
		}

	});

});

$(document).ready(function () {
	$("#Femenino").click(function () {
		$("#reservista").hide();
	}
	); 
	
	$("#Masculino").click(function () {
		$("#reservista").show();
	});
});
function valida_form() {
	var sx = document.getElementById('selecSx');
	var fl = document.getElementById("filePerfil");

	if (document.getElementById("inputNome").value == "") {
		document.getElementById("inputNome").focus();
		document.getElementById("labelNome").style.display = 'block';
		event.preventDefault();
		return false
	}
	else if (document.getElementById("inputCPF").value == "") {
		document.getElementById("labelNome").style.display = 'none';
		document.getElementById("inputCPF").focus();
		document.getElementById("labelCPF").style.display = 'block';
		event.preventDefault();
		return false
	}
	else if (sx.value == "nInformado") {
		document.getElementById("labelCPF").style.display = 'none';
		document.getElementById("selecSx").focus();
		document.getElementById("labelSexo").style.display = 'block';
		event.preventDefault();
	}
	else if (fl.files.length == 0) {
		document.getElementById("labelSexo").style.display = 'none';
		document.getElementById("filePerfil").focus();
		document.getElementById("labelPerfil").style.display = 'block';
		event.preventDefault();
	}
	else if (document.getElementById("inputEmail").value == "") {
		document.getElementById("labelPerfil").style.display = 'none';
		document.getElementById("inputEmail").focus();
		document.getElementById("labelEmail").style.display = 'block';
		event.preventDefault();
		return false
	}
	else if (document.getElementById("inputSenha").value == "") {
		document.getElementById("labelEmail").style.display = 'none';
		document.getElementById("inputSenha").focus();
		document.getElementById("labelSenha").style.display = 'block';
		event.preventDefault();
		return false
	}
	return false
}

$('#reservista').hide();
$('#selecSx').change(function (e) {

	if (e.target.value == 'Masculino') {
		$('#reservista').show();
	} else if (e.target.value != 'Masculino') {
		$('#reservista').hide();
	}

});