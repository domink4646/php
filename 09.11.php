<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // szamok keruljenek 1-tol 10-ig egymas ala egy bekezdesbe!
        echo '<p>';
        for($i = 1;$i<11;$i++){
            // echo"$i<br>";
            if($i%2==0){
                echo$i . " - Páros<br>";
            }
            else echo$i . " - Páratlan<br>";
            

        }
        echo '<hr>';
        // eloltesztelo
        // while(feltetel){ciklusmag}
        // irjuk ki 1-tol minden masodik egesz szamot 10-ig
        $v = 1;
        while($v <= 10){
            echo $v . "<br>";
            $v+=2;
        }
        echo '<hr>';
        // ez hatultesztelo ciklussal visszafele
        // do {ciklusmag} while(feltetel);
        $v2 = 10;
        do{echo $v2 . "<br>"; $v2-=2;} while($v2 > 0);

        // veletlenszamkent eloallitott szamrol dontsuk el melyik honap az? 
        echo '<hr>';
        $ho = random_int(1,12);
        switch ($ho) {
            case 1:
                echo 'Jan';
                break;
            case 2:
                echo 'Feb';
                break;
            case 3:
                echo 'Marc';
                break;
            case 4:
                echo 'Apr';
                break;
            case 5:
                echo 'Maj';
                break;
            case 6:
                echo 'Jun';
                break;
            case 7:
                echo 'Jul';
                break;
            case 8:
                echo 'Aug';
                break;
            case 9:
                echo 'Sept';
                break;
            case 10:
                echo 'Nov';
                break;
            case 11:
                echo 'Okt';
                break;
            case 12:
                echo 'Dec';
                break;            
        }
        echo '<br>' . $ho;

        echo '<hr>';
        // 10x10-es tabla 1-100-ig
        for($i = 0; $i < 101;$i++){
            if($i%10 == 0 && $i>0){
                echo $i . "<br>";
            }
            else echo $i . " \t";
        }
        echo '</p>';

    ?>
</body>
</html>