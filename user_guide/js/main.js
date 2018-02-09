$( function() {

    var base_url = "http://localhost/redacaoagora/";
//    var base_url = "https://www.redacaoagora.com.br/";

    $( ".entrarEncaminha" ).click(function() {

      document.location = base_url+"site/login";

    });

    $( ".cadastraEncaminha" ).click(function() {

      document.location = base_url+"site/cadastro";

   });

   $( ".cadastroUser" ).click(function() { //cadastro de usuarios
     var nome = $("#nome").val();
     var sobrenome = $("#sobrenome").val();
     var email = $("#email").val();
     var confirmaemail = $("#confirmaemail").val();
     var senha = $("#senha").val();
     var sexo = $("input[type=radio][name=group1]:checked").val();
     var indicou = $(".divTitle").attr("data-indicou");



     if(email != confirmaemail){ Materialize.toast('E-mail não confere!', 4000, 'rounded');}
     if(email == confirmaemail && sexo > 0 && senha != '' && nome != '' && sobrenome != '')
     {

       $.post(base_url+'site'+'/'+'cadastro'+'/'+'1', {'nome':nome, 'sobrenome':sobrenome, 'email':email, 'senha':senha, 'sexo':sexo,'indicou':indicou}, function(retorno){
                      var retorno = JSON.parse(retorno);

                      if(retorno == 0)
                      {
                          Materialize.toast('Cadastrado com sucesso! Faça login para começar', 3000,'',function(){document.location = base_url+"site/login";});
                      }
                      if(retorno > 0)
                      {
                        Materialize.toast('Esse e-mail já está cadastrado, por favor use outro.', 4000);
                      }

       });

     }

  });//final cadastro de usuarios


  $( ".loginUser" ).click(function() { //login do usuario

    $("#carregaLogin").css('visibility', 'visible');
    var user = $("#email").val();
    var senha = $("#senha").val();

    $.post(base_url+'site'+'/'+'login'+'/'+'1', {'user':user, 'senha':senha}, function(retorno){
                   var retorno = JSON.parse(retorno);

                   if(retorno == 1)
                   {
                       document.location = base_url+"site/temas";
                   }
                   if(retorno == 2)
                   {
                     Materialize.toast('E-mail ou usuário inválidos!', 4000);
                      $("#carregaLogin").css('visibility', 'hidden');
                   }

    });

  }); //fim login do usuario

  $('#senha').keydown(function(e){
            if (e.which == 13){

              var user = $("#email").val();
              var senha = $("#senha").val();

              $.post(base_url+'site'+'/'+'login'+'/'+'1', {'user':user, 'senha':senha}, function(retorno){
                             var retorno = JSON.parse(retorno);

                             if(retorno == 1)
                             {
                                 document.location = base_url+"site/temas";
                             }
                             if(retorno == 2)
                             {
                               Materialize.toast('E-mail ou usuário inválidos!', 4000);
                             }

              });

            }
          });//fim login usuario digitando enter






});
