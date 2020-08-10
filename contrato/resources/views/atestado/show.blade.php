<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Visualizar</title>
    </head>

    <body>
            <label for ="">Paciente</label></br>
            <input type="text" name="nome" value="{{$atestado->paciente}}"></br>
            <label for ="">Acompanhante</label></br>
            <input type="text" name="acompanhante" value="{{$atestado->acompanhante}}"></br>
            <label for ="">Obito</label></br>
            <input type="text" name="obito" value="{{$atestado->obito}}"></br>

            <!--<button action >Salvar</button>-->
            <button id="voltar">voltar</button>

        <script>
            
            var voltar = document.getElementById("voltar");

            voltar.onclick = function(){
                window.location.href = "/atestado/";

            }
        
        
        </script>
        
    </body>

</html>