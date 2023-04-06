
#### <!DOCTYPE html>
 #### <html lang="pt-br">
 #### <head>
#### <meta charset="UTF-8">
#### <meta http-equiv="X-UA-Compatible" content="IE=edge">
#### <meta name="viewport" content="width=device-width, initial-scale=1.0">
#### <title>contato</title>
#### </head>
 #### <body>
#### <?php 
#### $arquivo = 'arquivoos.xls';

####  $lista = [[
####  "aluno1" => "bart"

####     ],
        
####        [ "aluno2" => "meg"],

#### ];
     

####   $arquivoAberto = fopen($arquivo, 'w'); 

####       foreach($lista as $row_lista){
#### fputcsv($arquivoAberto, $row_lista, ";");
####   }

#### fclose($arquivoAberto);

  
 

    
    ?>
</body>
</html>