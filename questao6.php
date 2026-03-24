<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6</title>
</head>
<body>
    <form method="POST">
        Número: <input type="number" name="n">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if(isset($_POST["n"])){
        $n=$_POST["n"];

        if($n<50){
            echo "Menor que 50.";
        }
        if($n==50){
            echo "Igual a 50.";
        }
        if($n>50){
            echo "Maior que 50.";
        }
    }
    ?>
</body>
</html>