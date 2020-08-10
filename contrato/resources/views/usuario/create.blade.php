<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Usuario</title>
    </head>

    <!--criar e excluir estão na mesma view aewwwww-->
    <!--listar esta em uma view diferente-->
    <!--tb já esta limpando-->
    <body>
        <form action="{{ route ('registrar_usuario')}}" method="POST">            
                    
                    @csrf
                    <label for ="">cpf</label></br>

                    <input type="text" name="cpf" id = "cpf"></br>

                    <label for ="">Nome</label></br>

                    <input type="text"  required name ="nome" id = "nome"></br>
      
            <button value="adicionar" nome = "adicionar">adicionar</button>

        </form>
        <br>
  
        <button id="listar" >listar</button>

        <!--era um teste de butao-->
        <!--<button id="teste">teste</button>-->

        <button id="excluir">excluir</button>

        <button id="limpar">limpar</button>

        
        <script>
            var nomeInput = document.getElementById("nome");

            var texto = document.getElementById("cpf");

            var excluir = document.getElementById("excluir");

            var listar = document.getElementById("listar");

            var limpar = document.getElementById("limpar");
            
            //botao pra testar pra escrever no input, em vez de ir pra outra rota
           // var teste = document.getElementById("teste");

            listar.onclick = function(){
                //aqui encaminha para visualização dos dados
                //document.querySelector("[name='nome']").value = "testando";

                window.location.href = "/usuario/"+texto.value;
                 
                //excluir.querySelector("[name='nome']").value = "testando";

                }

            //teste.onclick = function(){
               //alert("Eu sou um alert!");
               //window.location.href = "/usuario/";
              // document.getElementById('cpf').value='teste'; // Limpa o campo

               //document.getElementById("teste").disabled = true;
               // window.location.href = "/usuario/";

                //}

            excluir.onclick = function(){
                window.location.href = "/usuario/excluir/"+texto.value; 
            //    window.location.href = "/usuario/";

            }

            limpar.onclick = function(){
                document.getElementById('cpf').value=''; // Limpa o campo
                document.getElementById('nome').value=''; // Limpa o campo
                //volta pra pagina principal
                window.location.href = "/usuario/";

            }
        </script>
               

    </body>

</html>