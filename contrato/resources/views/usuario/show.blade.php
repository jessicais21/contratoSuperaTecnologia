<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Visualizar</title>
    </head>

    <body>
            <label for ="">cpf</label></br>
            <input type="number" name="cpf" value="{{$usuario->cpf}}"></br>
            <label for ="">Nome</label></br>
            <input type="text" name="nome" value="{{$usuario->nome}}"></br>
            <!--<button action >Salvar</button>-->
            <button id="voltar">voltar</button>

        <script>
            
            var voltar = document.getElementById("voltar");

            voltar.onclick = function(){
                window.location.href = "/usuario/";

            }
        
        
        </script>
        
    </body>

</html>