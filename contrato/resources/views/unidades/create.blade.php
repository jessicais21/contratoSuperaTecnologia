<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>

    <body>
        <form action="{{'registrar_unidade'}}" method="POST">            
                    
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
  
        
        <script>
            
        </script>
               

    </body>

</html>