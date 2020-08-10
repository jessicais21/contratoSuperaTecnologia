<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Visualizar</title>
    </head>

    <body>
            <form action="{{route ('alterar_unidade'),nome}}" method="POST">
            <label for ="">Nome</label></br>
            <input type="text" name="nome" value="{{$unidade2->nome}}"></br>
            <label for ="">Email</label></br>
            <input type="text" name="email" value="{{$unidade2->email}}"></br>
            <label for ="">Municipio</label></br>
            <input type="text" name="municipio" value="{{$unidade2->municipio}}"></br>
            <label for ="">Tipo</label></br>
            <input type="text" name="tipo" value="{{$unidade2->tipo}}"></br>
            <label for ="">status</label></br>
            <input type="text" name="status" value="{{$unidade2->status}}"></br>
            <button>Salvar</button>
            </form>

            <!--<button action >Salvar</button>-->
            <button id="voltar">voltar</button>

        <script>
            
            var voltar = document.getElementById("voltar");

            voltar.onclick = function(){
                window.location.href = "/unidades2/";

            }
        
        
        </script>
        
    </body>

</html>