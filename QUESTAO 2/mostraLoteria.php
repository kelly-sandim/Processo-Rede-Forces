<?php
/**
 * Utilizando a função da questão 1 criar um layout html contendo 3 tabelas 
 * com 10 colunas e 5 linhas numeradas com as 50 dezenas e destacando com 
 * a cor azul(#0000FF) os números sorteados. 
 * Para isso, deverão constar 3 apostas não repetidas
 */

include("../QUESTAO 1/loteria.php");
$apostaUm = loteria();
$apostaDois = loteria();
$apostaTres = loteria();
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
    <title>Resultado Mega-Sena</title>
</head>
<body>
    <div class="row col-md-12">
        <div class="column col-md-4">
            <h1>Aposta 1</h1>
            <table>
                <tr>
                    <?php 
                        
                        for($i = 1; $i <= 10; $i++) {
                            if(in_array($i, $apostaUm)){                        
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>            
                </tr>
                <tr>
                    <?php 
                        for($i = 11; $i <= 20; $i++) {
                            if(in_array($i, $apostaUm)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        for($i = 21; $i <= 30; $i++) {
                            if(in_array($i, $apostaUm)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        for($i = 31; $i <= 40; $i++) {
                            if(in_array($i, $apostaUm)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        for($i = 41; $i <= 50; $i++) {
                            if(in_array($i, $apostaUm)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
            </table>
        </div>
        <div class="column col-md-4">
            <h1>Aposta 2</h1>
            <table>
                <tr>
                    <?php 
                        for($i = 1; $i <= 10; $i++) {
                            if(in_array($i, $apostaDois)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>            
                </tr>
                <tr>
                    <?php 
                        for($i = 11; $i <= 20; $i++) {
                            if(in_array($i, $apostaDois)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        for($i = 21; $i <= 30; $i++) {
                            if(in_array($i, $apostaDois)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        for($i = 31; $i <= 40; $i++) {
                            if(in_array($i, $apostaDois)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        for($i = 41; $i <= 50; $i++) {
                            if(in_array($i, $apostaDois)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
            </table>
        </div>
        <div class="column col-md-4">
            <h1>Aposta 3</h1>
            <table>
                <tr>
                    <?php 
                        for($i = 1; $i <= 10; $i++) {
                            if(in_array($i, $apostaTres)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>            
                </tr>
                <tr>
                    <?php 
                        for($i = 11; $i <= 20; $i++) {
                            if(in_array($i, $apostaTres)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        for($i = 21; $i <= 30; $i++) {
                            if(in_array($i, $apostaTres)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        for($i = 31; $i <= 40; $i++) {
                            if(in_array($i, $apostaTres)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        for($i = 41; $i <= 50; $i++) {
                            if(in_array($i, $apostaTres)){
                                echo("<td style='background-color: #0000FF;'>$i</td>");
                            }
                            else
                            {
                                echo("<td>$i</td>");
                            }
                        }
                    ?>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>