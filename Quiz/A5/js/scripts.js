//Ocultar blocos
$('#bloco01').hide();
$('#bloco02').hide();
$('#bloco03').hide();
$('#blocoSelect').change(function (e) {
    if (e.target.value == 'b1') {
        $('#bloco01').show();
        $('#bloco02').hide();
        $('#bloco03').hide();

    }
    else if (e.target.value == 'b2') {
        $('#bloco01').hide();
        $('#bloco03').hide();
        $('#bloco02').show();
    }
    else {
        $('#bloco01').hide();
        $('#bloco02').hide();
        $('#bloco03').show();
    }
});
