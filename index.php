<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 06</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php 
        // Caputrando os dados do formulário retroalimentado
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 0;
     
    ?>
    <main>
        <h1>
            Anatomia de uma Divisão
        </h1>
        <form action="<?= $_SERVER['PHP_SELF']?>"method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
           $quociente =  intdiv($dividendo,$divisor) ;
           $resto =  $dividendo % $divisor ;
   
        echo "<ul> 
        <li> Dividendo = $dividendo </li>
        <li> Divisor = $divisor </li>
        <li> Quociente = $quociente </li>
        <li> Resto = $resto </li>
        </ul>"
       ;
    
        ?>
</body>
</html>