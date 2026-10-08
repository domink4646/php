<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            background: #f1f5f9;
            color: #1e293b;
            font-family: Arial, sans-serif;
        }

        h1 {
            max-width: 800px;
            margin: 0 auto 20px;
            padding: 20px;
            border-left: 5px solid #2563eb;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.08);
            color: #0f172a;
            font-size: 1.4rem;
            text-align: center;
        }

        ol {
            width: fit-content;
            min-width: 180px;
            margin: 0 auto 40px;
            padding: 18px 35px;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.08);
        }

        li {
            padding: 5px 10px;
            color: #334155;
            font-weight: 600;
        }

        table {
            border-collapse: collapse;
            width: min(90%, 600px);
            margin: 0 auto;
            overflow: hidden;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.08);
        }

        td,
        th {
            padding: 12px 16px;
            text-align: center;
        }

        th {
            background: #2563eb;
            color: #ffffff;
            font-weight: 600;
        }

        td {
            border-bottom: 1px solid #e2e8f0;
        }

        tr:last-child td {
            border-bottom: 0;
        }
    </style>
    <title>Doga</title>
</head>

<body>
    <?php
    echo " <h1>Első 10 héttel osztható szám, rendezett listában (ol) </h1>";

    $counter = 0;

    echo "<ol>";
    for ($i = 1; $counter < 10; $i++) {
        if ($i % 7 == 0) {
            echo "<li>$i</li>";
            $counter++;
        }
    }
    echo "</ol>";

    echo " <h1>Első 5 szám és faktoriálisuk, rendezett táblázatban (table) </h1>";

    function factorial($n)
    {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    echo "<table>";
    echo "<tr><th>Szám</th><th>Faktoriális</th></tr>";

    $counter = 0;
    for ($i = 0; $counter <= 5; $i++) {
        $fact = factorial($i);
        echo "<tr><td>$i</td><td>$fact</td></tr>";
        $counter++;
    }

    echo "</table>";


    ?>
</body>

</html>