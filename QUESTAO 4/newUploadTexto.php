<?php 
/**
 * Utilizando a classe criada acima, criar um form 
 * que solicite ao usuário um arquivo e que ao 
 * submeter seja visualizado o conteúdo
 */
include("../QUESTAO 3/lerTexto.php");
$leitor = new leitorTexto();
if(isset($_POST['save'])){
    $uploadDir = "../QUESTAO 3/uploads/";
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777);        
    }    
    $uploadFile = $uploadDir . basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
        //Tenta ler arquivo recém salvo
        $leitor->setConteudo($uploadFile);
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }
}


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

    <style>
        body {
            background-color: #424242;    
        }

        div.input-group {
            height: 300px;
        }

        section.upload-arquivo, section.resultado-leitura {
            background-color: #ffffff;
            padding: 20px;            
        }
    </style>
</head>
<body>
    <main class="row p-3">
        <section class="col-4 upload-arquivo">
            <div class="col-12">
                <h1>Upload de arquivos</h1>
                <form enctype="multipart/form-data" action="" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Faça upload de um arquivo e veja o resultado ao lado!</label>
                        <input type="file" name="userfile" class="form-control-file" id="userfile">
                    </div>
                    <input type="submit" class="btn btn-primary" name="save" value="Enviar">
                </form>
            </div>
        </section>
        <section class="col-8 resultado-leitura">
            <div class="col-12">
                <h3>Resultado</h3>
                <div class="input-group">        
                    <textarea class="form-control" aria-label="With textarea"><?php echo ($leitor->getConteudo()); ?></textarea>
                </div>
            </div>
        </section>
    
</body>
</html>