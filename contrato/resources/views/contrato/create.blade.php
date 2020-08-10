<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Contrato</title>
    </head>

    <!--criar e excluir estão na mesma view aewwwww-->
    <!--listar esta em uma view diferente falta fazer em atestados-->
    <!--tb já esta limpando-->
    <body>
        <form action="{{route('registrar_contrato')}}" method="POST">            
                    
                    @csrf
                    <label for ="">CNPJ</label></br>

                    <input type="text" name="cnpj" id = "cnpj"></br>

                    <label for ="">Razao social</label></br>

                    <input type="text" name ="razaosocial" id = "razaosocial"></br>

                    <label for ="">Nome</label></br>

                    <input type="text" name ="nome" id = "nome"></br>

                    <label for ="">Email</label></br>

                    <input type="text" name ="email" id = "email"></br>

                    <label for ="">Logomarca</label></br>

                    <input type="text" name ="logomarca" id = "logomarca"></br>

                    <label for ="">Status</label></br>

                    <input type="text" name ="status" id = "status"></br>


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

            var texto = document.getElementById("cnpj");

            var excluir = document.getElementById("excluir");

            var listar = document.getElementById("listar");

            var limpar = document.getElementById("limpar");
            

            listar.onclick = function(){
                //para testar botao
                //alert("Eu sou um alert!");

                //aqui encaminha para visualização dos dados

                window.location.href = "/contrato/"+texto.value;
                 
                //excluir.querySelector("[name='nome']").value = "testando";

                }

                //falta testar essa função 
            excluir.onclick = function(){

                window.location.href = "/contrato/excluir/"+texto.value; 

            }

            limpar.onclick = function(){
                //volta pra pagina principal
               window.location.href = "/contrato/";

            }
        </script>
               

    </body>

</html>