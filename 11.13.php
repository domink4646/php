<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11.13</title>
</head>
<body>
    <?php
    $szo1 = "radar";
    $szo2 = "abba";
    $szo3 = "hello";
    $mondat = "Indul a görög aludni";
    $mondat2 = "A man, a plan, a";

    function palindrom_Mondat($mondat) {
        $mondat = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $mondat));
        return $mondat === strrev($mondat);
    }

    function palindrom($szo){

        $szo = strtolower($szo);
        
        if($szo == strrev($szo)){
            return true;
        } else {
            return false;
        }
    }

    function maganhangzok($szo){
        $szo = strtolower($szo);
        $maganhangzok = ['a', 'e', 'i', 'o', 'u', 'á', 'é', 'í', 'ó', 'ö', 'ő', 'ú', 'ü', 'ű'];
        $count = 0;
        
        for($i = 0; $i < strlen($szo); $i++){
            if(in_array($szo[$i], $maganhangzok)){
                $count++;
            }
        }
        
        return $count;
    }

    echo "A(z) '$szo1' szó palindróm: " . (palindrom($szo1) ? "Igen" : "Nem") . "<br>";
    echo "A(z) '$szo2' szó palindróm: " . (palindrom($szo2) ? "Igen" : "Nem") . "<br>";
    echo "A(z) '$szo3' szó palindróm: " . (palindrom($szo3) ? "Igen" : "Nem") . "<br>";
    echo "A(z) '$mondat' mondat palindróm: " . (palindrom_Mondat($mondat) ? "Igen" : "Nem") . "<br>";
    echo "A(z) '$mondat2' mondat palindróm: " . (palindrom_Mondat($mondat2) ? "Igen" : "Nem") . "<br>";
    echo "A(z) '$szo1' szó magánhangzók száma: " . maganhangzok($szo1) . "<br>";
    echo "A(z) '$szo2' szó magánhangzók száma: " . maganhangzok($szo2) . "<br>";
    echo "A(z) '$szo3' szó magánhangzók száma: " . maganhangzok($szo3) . "<br>";
    echo "A(z) '$mondat' mondat magánhangzók száma: " . maganhangzok($mondat) . "<br>";
    echo "A(z) '$mondat2' mondat magánhangzók száma: " . maganhangzok($mondat2) . "<br>";
    ?>
</body>
</html>