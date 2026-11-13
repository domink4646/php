<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2026.10.16. Tömb gyakorlás</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        .highlight {
            padding: 2px 5px;
            border-radius: 4px;
            background-color: #ffeb3b;
            color: #000;
            font-weight: bold;
        }

        p {
            color: #666;
            font-size: large;
        }

        ol {
            color: #666;
            font-size: large;
        }
    </style>
</head>

<body>
    <?php

    $arr = [];
    $minNum = 1000;
    $maxNum = 0;
    $maxAdjacent = 0;
    $maxIndex_1 = 0;
    $maxIndex_2 = 0;
    $has_Zero = false;
    $sum = 0;
    $throws = [];

    for ($i = 0; $i < 50; $i++) {
        array_push($arr, rand(-50, 50));
    }
    echo "<h1>50 db véletlen szám -50 és 50 között</h1>";

    foreach ($arr as $num) {
        if ($num < $minNum) {
            $minNum = $num;
        }
        if ($num > $maxNum) {
            $maxNum = $num;
        }
        if ($num == 0) {
            $has_Zero = true;
            break;
        }
        $sum += $num;
    }

    $average = $sum / count($arr);

    for ($i = 0; $i < 49; $i++) {
        $difference = $arr[$i + 1] - $arr[$i];

        if ($difference < 0) {
            $difference = $difference * -1;
        }

        if ($difference > $maxAdjacent) {
            $maxAdjacent = $difference;
            $maxIndex_1 = $i;
            $maxIndex_2 = $i + 1;
        }
    }

    echo "<p>";
    for ($i = 0; $i < 50; $i++) {
        if ($i == $maxIndex_1 || $i == $maxIndex_2) {
            echo "<span class='highlight'>" . $arr[$i] . "</span>";
        } else {
            echo $arr[$i];
        }

        if ($i < 49) {
            echo ", ";
        }
    }
    echo "</p>";

    echo "<p>Minimum: " . $minNum . "</p>";
    echo "<p>Maximum: " . $maxNum . "</p>";
    echo "<p>Van-e 0 a tömbben? " . ($has_Zero ? "Igen" : "Nem") . "</p>";
    echo "<p>Átlag: " . $average . "</p>";
    echo "<p>Maximum különbség: " . $maxAdjacent . "</p>";
    echo "<p>Maximum különbség helye: "
        . ($maxIndex_1 + 1) . ". és "
        . ($maxIndex_2 + 1) . ". elem</p>";
    echo "<p>A két elem értéke: "
        . $arr[$maxIndex_1] . " és "
        . $arr[$maxIndex_2] . "</p>";

    echo "<h1>Ötöslottó</h1>";
    echo "<ol>";

    $lotto = [];
    $huzottDb = 0;

    while ($huzottDb < 5) {
        $ujSzam = random_int(1, 90);
        $marSzerepel = false;

        for ($i = 0; $i < $huzottDb; $i++) {
            if ($lotto[$i] == $ujSzam) {
                $marSzerepel = true;
            }
        }

        if (!$marSzerepel) {
            $lotto[$huzottDb] = $ujSzam;
            echo "<li>" . $ujSzam . "</li>";
            $huzottDb++;
        }
    }

    echo "</ol>";

    echo "<h1>Pénzdobás</h1>";

    for ($i = 0; $i < 6; $i++) {
        $throws[$i] = rand(0, 1);
    }

    $egymasHarom = false;

    for ($i = 0; $i < 4; $i++) {
        if ($throws[$i] == 0 && $throws[$i + 1] == 0 && $throws[$i + 2] == 0) {
            $egymasHarom = true;
            break;
        }
        if ($throws[$i] == 1 && $throws[$i + 1] == 1 && $throws[$i + 2] == 1) {
            $egymasHarom = true;
            break;
        }
    }

    if (!$egymasHarom) {
        echo "<p>Nem dobtunk egymás után háromszor ugyanolyan eredményt.</p>";
    } else {
        echo "<p>Dobtunk egymás után háromszor ugyanolyan eredményt.</p>";
    }

    echo implode(", ", $throws);
    ?>
</body>

</html>