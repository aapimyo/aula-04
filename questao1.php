<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
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
    while($i <=$n){
        echo $i. "<br>";
        $i++;
    }
}
?>
</body>
</html>