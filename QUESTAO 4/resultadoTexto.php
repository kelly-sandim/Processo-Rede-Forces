<?php 

include("../QUESTAO 3/lerTexto.php");
$leitor = new leitorTexto();
if(isset($_POST['save'])){
    $uploadDir = "../QUESTAO 3/uploads/";    
    $uploadFile = $uploadDir . basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
        #Tenta ler arquivo recém salvo
        $leitor->setConteudo($uploadFile);
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }

    echo 'Aqui está mais informações de debug:';
    print_r($_FILES);
}

else {
    echo "POST vazio!";
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
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <div class="input-group">        
        <textarea class="form-control" aria-label="With textarea"><?php echo ($leitor->getConteudo()); ?></textarea>
    </div>
</body>
</html>