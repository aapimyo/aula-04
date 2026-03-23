<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <form method="POST">
        Número: <input type="number" name="n">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if(isset($_POST{"n"})){
        $n=$_POST["n"];
        $i=1;
        $soma=0;

        while($i<=$n){
            $soma = $soma + $i;
            $i++;
        }
        echo $soma;
    }
    ?>
</body>
</html>