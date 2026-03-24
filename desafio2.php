<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
</head>
<body>
    <form method="POST">
        Número: <input type="number" name="n">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if(isset($_POST["n"])){
        $n=$_POST["n"];
        $i=1;
        $soma=0;
        $quant=0;

        while($i<=$n){
            $soma=$soma+$i;
            $quant++;
            $i++;
        }
        if($quant>0){
            $media=$soma/$quant;
            echo $media;
        }
    }
    ?>
</body>
</html>