<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Atestado</title>
    </head>

    <!--criar e excluir estão na mesma view aewwwww-->
    <!--listar esta em uma view diferente falta fazer em atestados-->
    <!--tb já esta limpando-->
    <body>
        <form action="{{ route ('registrar_atestado')}}" method="POST">            
                    
                    @csrf
                    <label for ="">Paciente</label></br>

                    <input type="text" name="paciente" id = "paciente"></br>

                    <label for ="">Acompanhante</label></br>

                    <input type="text" name ="acompanhante" id = "acompanhante"></br>

                    <label for ="">Obito</label></br>

                    <input type="text" name ="obito" id = "obito"></br>


            <button value="adicionar" nome = "adicionar">adicionar</button>

        </form>
        <br>
  
        <button id="listar" >listar</button>

        <!--era um teste de butao-->
        <!--<button id="teste">teste</button>-->

        <button id="excluir">excluir</button>

        <button id="limpar">limpar</button>

        
        <script>
            //var nomeInput = document.getElementById("nome");

            var texto = document.getElementById("paciente");

            var excluir = document.getElementById("excluir");

            var listar = document.getElementById("listar");

            var limpar = document.getElementById("limpar");
            
            //botao pra testar pra escrever no input, em vez de ir pra outra rota
           // var teste = document.getElementById("teste");

            listar.onclick = function(){
                //aqui encaminha para visualização dos dados
                //document.querySelector("[name='nome']").value = "testando";

                window.location.href = "/atestado/"+texto.value;
                 
                //excluir.querySelector("[name='nome']").value = "testando";

                }

            //falta arrumar aqui
            excluir.onclick = function(){
               // alert("Eu sou um\nAlert!");

                window.location.href = "/atestado/excluir/"+texto.value; 
               // window.location.href = "/atestado/";

            }

            limpar.onclick = function(){
                //volta pra pagina principal
               window.location.href = "/atestado/";

            }
        </script>
               

    </body>

</html>