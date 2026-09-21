<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09.18</title>
</head>

<body>
    <?php
    /*0 és 10 között generáljatok egy véleltlenszámot, majd írjátok ki azt! Számoljátok ki a szám faktoriálisát!
    Def.: 0! = 1; 4! = 1 * 2 * 3 * 4                                                                          */


    $szam = random_int(0, 10);
    $factorial = 1;

    for ($i = 1; $i <= $szam; $i++) {
        $factorial *= $i;
    }

    /*  Egy pénzérmét egymás után 5-ször feldobunk. Ezt oldja meg véletlen szám előállításával!
        Ha egymás után legalább 3-szor ugyanazt dobja a játékos, akkor nyereménye 100 000 Ft.
        Ha mind az 5 dobás egyforma, akkor 500 000 Ft-ot nyer.
        A többi esetben nem nyer semmit. */

    $dobasok = [];
    $egymasHarom = false;
    $egymasOt = false;
    $temp_Harom = 0;
    $temp_Ot = 0;

    for ($i = 0; $i < 5; $i++) {
        $dobasok[] = random_int(0, 1); // 0 = fej, 1 = írás
    }

    for ($i = 0; $i < 5; $i++) {
        if ($dobasok[$i]) {
            $temp_Harom++;
            $temp_Ot++;
        } else {
            $temp_Harom = 0;
            $temp_Ot = 0;
        }
        if ($temp_Harom >= 3) {
            $egymasHarom = true;
        }
        if ($temp_Ot >= 5) {
            $egymasOt = true;
        }
    }

    /*  Készítsen programot az alábbi kockadobásos játékra:
        A játékos dob egy kockával véletlenszerűen 1-szer.
        Ha 1-est dob, akkor dobnia kell még egyszer. Ha a második dobás 6-os, akkor nyert egy TV-t, egyébként sajnos nem nyert.
        Ha 2-est dob, akkor 10 000 Ft-ot nyert.
        Ha 3-ast dob, akkor kiesett, nem nyert semmit.
        Ha 4-est dob, akkor dobjon újra, majd a régi+új dobás értékének 1 000 szeresét nyeri.
        Ha 5-öst dob, akkor dobjon újra, majd a régi+új dobás értékének 10 000 szeresét nyeri.
        Ha 6-ost dob, akkor megnyerte a fődíjat, egy kétszemélyes utazást az általa kiválasztott helyre. */

    $dobas = random_int(1, 6);
    $uj_Dobas = 0;
    $dobasSzoveg = "Első dobás: $dobas";

    if ($dobas == 1) {
        $uj_Dobas = random_int(1, 6);
        $dobasSzoveg .= ", második dobás: $uj_Dobas";
        if ($uj_Dobas == 6) {
            $nyeremeny = "TV";
        } else {
            $nyeremeny = "Nincs nyeremény";
        }
    } elseif ($dobas == 2) {
        $nyeremeny = "10 000 Ft";
    } elseif ($dobas == 3) {
        $nyeremeny = "Nincs nyeremény";
    } elseif ($dobas == 4) {
        $uj_Dobas = random_int(1, 6);
        $dobasSzoveg .= ", második dobás: $uj_Dobas";
        $nyeremeny = ($dobas + $uj_Dobas) * 1000 . " Ft";
    } elseif ($dobas == 5) {
        $uj_Dobas = random_int(1, 6);
        $dobasSzoveg .= ", második dobás: $uj_Dobas";
        $nyeremeny = ($dobas + $uj_Dobas) * 10000 . " Ft";
    } elseif ($dobas == 6) {
        $nyeremeny = "Kétszemélyes utazás";
    }

    echo "<h2>Feladatok eredményei</h2>";
    echo "<h3>1. Faktoriális</h3>";
    echo "<p>A véletlenszám: $szam</p>";
    echo "<p>$szam! = $factorial</p>";
    ?>
    <h3>2. Pénzérme</h3>
    <p>Dobások: <?php echo implode(", ", $dobasok); ?></p>
    <p>Nyeremény: <?php echo $egymasOt ? '500 000 Ft' : ($egymasHarom ? '100 000 Ft' : 'Nincs'); ?></p>

    <h3>3. Kockadobás</h3>
    <p><?php echo $dobasSzoveg; ?></p>
    <p>Nyeremény: <?php echo $nyeremeny; ?></p>
</body>

</html>