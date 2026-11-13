<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11.06</title>
</head>

<body>
    <?php

    use Dom\Implementation;

    $szoveg = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt soluta odit itaque labore omnis ipsum dolorum natus doloribus facilis perferendis deleniti rerum distinctio corporis ipsa a molestias tempora, delectus cum!';

    $szovegHossz = strlen($szoveg);

    echo "<p> Karakterek száma a szövegben: </p>" . $szovegHossz;

    $szavakSzama = 0;

    for ($i = 0; $i < $szovegHossz; $i++) {
        if ($szoveg[$i] == ' ') {
            $szavakSzama++;
        }
    }
    $szavakSzama++;

    echo "<p> Szavak száma:  </p>" . $szavakSzama;

    $t = explode(' ', $szoveg);
    echo "<p> Szavak:  </p>" . implode(",", $t);

    $leghosszabb_Szo = "";
    $leghosszabb_Szavak = [];
    $szo_Hossz = 0;

    for ($i = 0; $i < sizeof($t); $i++) {
        if (strlen($t[$i]) > $szo_Hossz) {
            $szo_Hossz = strlen($t[$i]);
            $leghosszabb_Szo = $t[$i];
        }
    }

    foreach ($t as $i) {
        if (strlen($i) == strlen($leghosszabb_Szo)) {
            array_push($leghosszabb_Szavak, $i);
        }
    }

    echo "<p>Leghosszabb szó:  </p>" . $leghosszabb_Szo;
    echo "<p>Leghosszabb szavak:  </p>" . implode(", ", $leghosszabb_Szavak);

    $szoveg2 = 'A dolgozót is megbüntetik, ha bejelenti a feketemunkát, pedig a fehérítés az állam érdeke. Egy konkrét példán mutatjuk be, hogy a munkavállaló ellen is eljárás indul, ha felfedi, hogy nem megfelelően foglalkoztatták. Pedig így nehezebben deríthetők fel a visszaélések.';

    $szovegHossz2 = mb_strlen($szoveg2);

    echo "<p> Karakterek száma a szövegben: </p>" . $szovegHossz2;

    $szavakSzama2 = 0;

    for ($i = 0; $i < $szovegHossz2; $i++) {
        if ($szoveg2[$i] == ' ') {
            $szavakSzama2++;
        }
    }
    $szavakSzama2++;

    echo "<p> Szavak száma:  </p>" . $szavakSzama2;

    $t2 = explode(' ', $szoveg2);
    echo "<p> Szavak:  </p>" . implode(", ", $t2);

    $leghosszabb_Szo2 = "";
    $leghosszabb_Szavak2 = [];
    $szo_Hossz2 = 0;

    for ($i = 0; $i < sizeof($t2); $i++) {
        if (mb_strlen($t2[$i]) > $szo_Hossz2) {
            $szo_Hossz2 = mb_strlen($t2[$i]);
            $leghosszabb_Szo2 = $t2[$i];
        }
    }

    foreach ($t2 as $i) {
        if (mb_strlen($i) == mb_strlen($leghosszabb_Szo2)) {
            array_push($leghosszabb_Szavak2, $i);
        }
    }

    echo "<p>Leghosszabb szó:  </p>" . $leghosszabb_Szo2;
    echo "<p>Leghosszabb szavak:  </p>" . implode(", ", $leghosszabb_Szavak2);

    $pl = "teniszütő";



    ?>
</body>

</html>