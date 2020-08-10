<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Visualizar</title>
    </head>

    <body>
            <label for ="">CNPJ</label></br>
            <input type="text" name="cnpj" value="{{$contrato->cnpj}}"></br>
            <label for ="">Razao social</label></br>
            <input type="text" name="razaosocial" value="{{$contrato->razaosocial}}"></br>
            <label for ="">Nome</label></br>
            <input type="text" name="nome" value="{{$contrato->nome}}"></br>
            <label for ="">Email</label></br>
            <input type="text" name="email" value="{{$contrato->email}}"></br>
            <label for ="">Logomarca</label></br>
            <input type="text" name="logomarca" value="{{$contrato->logomarca}}"></br>
            <label for ="">Status</label></br>
            <input type="text" name="status" value="{{$contrato->status}}"></br>

            <!--<button action >Salvar</button>-->
            <button id="voltar">voltar</button>

        <script>
            
            var voltar = document.getElementById("voltar");

            voltar.onclick = function(){
                window.location.href = "/contrato/";

            }
        
        
        </script>
        
    </body>

</html>