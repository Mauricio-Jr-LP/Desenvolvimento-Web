//Login gerenciador
$(document).ready(function () {

    $("#formLogin").submit(function (e) {
        e.preventDefault();
        if ($("#login").val() === '' || $("#senha").val() === '') {
            alert('N FOI ENVIADO COM SUCESSO');
        }

        else {
            alert('ENVIADO COM SUCESSO');
            var dados = new FormData(this);
            e.preventDefault();
            $.ajax({
                url: "post/postLogin.php",
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

//Cadastrar gerenciador
$(document).ready(function () {

    $(".formCadastro").submit(function (e) {
        e.preventDefault();
        if ($("#login").val() === '' || $("#senha").val() === '') {
            alert('N FOI ENVIADO COM SUCESSO');
        }

        else {
            alert('ENVIADO COM SUCESSO');
            var dados = new FormData(this);
            e.preventDefault();
            $.ajax({
                url: "post/postCriarGerenciador.php",
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

//Editar gerenciador
$(document).ready(function () {

    $(".formEdit").submit(function (e) {
        e.preventDefault();
        if ($("#login").val() === '' || $("#senhaNova").val() === '') {
            alert('N FOI ENVIADO COM SUCESSO');
        }

        else {
            alert('ENVIADO COM SUCESSO');
            var dados = new FormData(this);
            e.preventDefault();
            $.ajax({
                url: "post/postEditaGerenciador.php",
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

//Cadastrar evento
$(document).ready(function () {

    $(".eventoForm").submit(function (e) {
        e.preventDefault();
        if ($("#nome").val() === '' || $("#semestre").val() === '') {
            alert('N FOI ENVIADO COM SUCESSO');
        }

        else {
            alert('ENVIADO COM SUCESSO');
            var dados = new FormData(this);
            e.preventDefault();
            $.ajax({
                url: "post/postEvento.php",
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

//Cadastrar equipe
$(document).ready(function () {

    $(".equipeForm").submit(function (e) {
        e.preventDefault();
        if ($("#login").val() === '' || $("#evento").val() === '0') {
            alert('N FOI ENVIADO COM SUCESSO');
        }

        else {
            alert('ENVIADO COM SUCESSO');
            var dados = new FormData(this);
            e.preventDefault();
            $.ajax({
                url: "post/postEquipe.php",
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

//Login equipe
$(document).ready(function () {

    $("#formLogin").submit(function (e) {
        e.preventDefault();
        if ($("#login").val() === '' || $("#senha").val() === '') {
            alert('N FOI ENVIADO COM SUCESSO');
        }

        else {
            alert('ENVIADO COM SUCESSO');
            var dados = new FormData(this);
            e.preventDefault();
            $.ajax({
                url: "post/postEquipeLogin.php",
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


//Adiciona Questao a evento
$(document).ready(function () {

    $(".addQuestForm").submit(function (e) {
        e.preventDefault();
        if ($("#evento").val() === '' || $("#questao").val() === '') {
            alert('N FOI ENVIADO COM SUCESSO');
        }

        else {
            alert('ENVIADO COM SUCESSO');
            var dados = new FormData(this);
            e.preventDefault();
            $.ajax({
                url: "post/postAddQuestoes.php",
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

//
$(document).ready(function () {

    $(".").submit(function (e) {
        e.preventDefault();
        if ($("#").val() === '' || $("#").val() === '') {
            alert('N FOI ENVIADO COM SUCESSO');
        }

        else {
            alert('ENVIADO COM SUCESSO');
            var dados = new FormData(this);
            e.preventDefault();
            $.ajax({
                url: "post/.php",
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
