<?php 
/**
 * Utilizando a classe criada acima, criar um form 
 * que solicite ao usuário um arquivo e que ao 
 * submeter seja visualizado o conteúdo
 */

include("../QUESTAO 3/lerTexto.php");
$leitor = new leitorTexto();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>  
    <title>Leitor de Arquivos</title>
</head>
<body>
    <h1>Upload de arquivos</h1>
    <form>
        <div class="form-group">
            <label for="exampleFormControlFile1">Faça upload de um arquivo e veja o resultado abaixo!</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <h3>Resultado</h3>
    <div class="input-group">        
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
</body>
</html>