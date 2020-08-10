<!DOCTYPE html>
<html>
    <!--ARQUIVO DA UNIDADE-->
    <head>
        <meta charset="UTF-8">
        <title>Unidade</title>
    </head>

    <body>
        <form action="{{route('registrar_unidade')}}" method="POST">            
                    
                    @csrf
                    <label for ="">nome</label></br>

                    <input type="text" name="nome" id = "nome"></br>

                    <label for ="">e-mail</label></br>

                    <input type="text" name ="email" id = "email"></br>

                    <label for ="">municipio</label></br>

                    <input type="text" name ="municipio" id = "municipio"></br>

                    <label for ="">tipo</label></br>

                    <input type="text" name ="tipo" id = "tipo"></br>

                    <label for ="">status</label></br>

                    <input type="text" name ="status" id = "status"></br>

            <button value="adicionar" nome = "adicionar">adicionar</button>

        </form>
        <br>
        <button id="listar" >listar</button>

        <!--atualizar não funciona-->
        <button id="atualizar">atualizar</button>

        <button id="excluir">excluir</button>

        <button id="limpar">limpar</button>


        <script>
            var limpar = document.getElementById("limpar");

            var excluir = document.getElementById("excluir");

            var listar = document.getElementById("listar");

            var atualizar = document.getElementById("atualizar");

            var texto = document.getElementById("nome");

            limpar.onclick = function(){
                window.location.href = "/unidades2/";
            }

            excluir.onclick = function(){
                //falta pegar o id do input
                window.location.href = "/unidades2/excluir/"+texto.value; 
            }

            listar.onclick = function(){
                window.location.href = "/unidades2/"+texto.value;

            }

            //a parte do atualizar não esta funcionando
            //solução: a pessoa excluio pelo nome e faz o recadastro
            atualizar.onclick = function(){
                window.location.href = "/unidades2/edit/"+texto.value; 

            }

        </script>
               

    </body>

</html>