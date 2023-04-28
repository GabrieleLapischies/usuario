<!DOCTYPE html>
< html  lang = " pt " >
< cabeça >
    < meta  charset = " UTF-8 " >
    < meta  name = " viewport "  content = " width=device-width, initial-scale=1.0 " >
    < title >Página inicial</ title >
    < link  rel = " folha de estilo "  type = " text/css "   href = " css/style.css " >
</ cabeça >
< corpo >
    <div class="inicial">
        <?php
            If (isset($_post["en"])){
               $usuario = $_post["us"];
               $senha = $_post["se"];
                
               if ($usuario = "ana" and $senha = "12345"):
                  echo "Autenticação realizada com sucesso";
               else
                  echo "Você não tem permissão de visualizar essa página";
            }
        ?>  
    </div> 
</ corpo >
</html> 
