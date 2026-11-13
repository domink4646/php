<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10.09</title>
</head>

<body>
    <?php

    $t = [];
    $t2 = array();

    //Egyszerű, vagy asszociatív (kulcs - érték párokat tartalmaz) tömb

    for ($i = 0; $i < 7; $i++) {
        array_push($t, rand(1, 35));
    }

    echo "<pre>";
    var_dump($t); // Csak tesztelési célre használható

    //Tömb bejárása
    //"count" vagy "sizeof" tömb méretének lekérdezése
    echo "<p> Megjelenítés for looppal: ";
    for ($i = 0; $i < count($t,); $i++) {
        echo $t[$i] . "; ";
    }
    echo "</p>";

    echo "<p> Megjelenítés foreach-el: ";
    foreach ($t as $key) {
        echo $key . "; ";
    }
    echo "</p>";

    echo "<pre>";
    var_dump(array_keys($t));

    foreach ($t as $key => $value) {
        echo "<p> {$key}:" . $t[$key] . "</p>";
    }

    //Többdimenziós tömb

    array_push($t2, [1,2,3]);
    array_push($t2, ["szőlő","alma"]);

    foreach ($t2 as $row) {
        foreach ($row as $cell) {
            echo "<p" . $t2[$row][$cell] . "</p";
        }
    }



    ?>
</body>

</html>