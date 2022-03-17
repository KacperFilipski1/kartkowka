<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Zadanie 1
    <form action='' method='POST'>
        <input name="imie" required><br>
        <input name="nazwisko" required><br>
        <input name="liczba" required><br>

    <?php
        $x = str_split($_POST['imie']);
        for($k = 0; $k <= strlen($_POST['imie'])-1; $k++){
            if($k != $_POST['liczba']-1){
                echo $x[$k];
            }
        }

        echo ' ';

        $y = str_split($_POST['nazwisko']);
        for($k = 0; $k <= strlen($_POST['nazwisko'])-1; $k++){
            if($k != $_POST['liczba']-1){
                echo $y[$k];
            }
        }

    ?>

        <br><br>Zadanie 2<br>
        <input name="silnia" required><br>
        <input name="fibonacci" required><br>
        <button type="submit" required>Potwierdź</button>
    </form>

    <?php
        $silnia = 1;
        for($j = 1; $j <= $_POST['silnia']; $j++){
            $silnia = $silnia * $j;
        }
        echo 'Silnia: '.$silnia.'<br>';


        $l[1] = 0;
        $l[2] = 1;
        $l1 = 0;
        $l2 = 1;

        $i = 3;
        $n = 100;
        while($i < $n){
            $l3 = $l2 + $l1;
            $l1 = $l2;
            $l2 = $l3;
            $l[$i] = $l3;
            $i++;
        }

        echo 'Fibonacci: '.$l[$_POST['fibonacci']+1];
    ?>
</body>
</html>