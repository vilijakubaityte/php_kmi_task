<?php
$x = $_GET['x'];
$y = $_GET['y'];

$pirmas = ($y**2) / $x;
$atsakymas = round($pirmas, 2);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KMI Skaičiuoklė</title>
    <link rel="stylesheet" href="./lentele.css">
</head>
<body>
<div class="wrapper">

    <div class="header">
        <h1 class="title">KMI skaičiuoklė</h1>
    </div>
    <button class="btn-btn"><a href="pagrindinis.php">sugrįžti į pagrindinį puslapį</a></button>
    <div class="section">
        <div class="calculator">
            <form class="table" action="rezultatai.php" method="get">

                <input name="x" class="input_1" type="text" placeholder="Jūsų ūgis(cm)">
                <input name="y" class="input_1" type="text" placeholder="Jūsų svoris(kg)">
                <div class="kmi">
                    <h3>jūsų kmi:</h3>
                    <span class="span"><?=$atsakymas;?></span>
                </div>
                <button class="btn">skaičiuoti</button>
            </form>
        </div>
        <div class="table_column">
            <h4>KMI=svoris(kg)/ūgis(m)2</h4>
            <table class="table_2">
                <tr>
                    <th>Klasifikacija</th>
                    <th>KMI reikšmė</th>
                    <th>Ligų rizika</th>
                </tr>
                <tr>
                    <td>Per mažas svoris</td>
                    <td>Mažiau nei 18.5</td>
                    <td>Padidėjusi rizika susirgti kitomis, ne antsvoriu susijusiomis ligomis</td>
                </tr>
                <tr>
                    <td>Normalus svoris</td>
                    <td>18.5 - 24.9</td>
                    <td>Nėra</td>
                </tr>
                <tr>
                    <td>Antsvoris</td>
                    <td>25 - 29.9</td>
                    <td>Nedidelė, stengtis, kad nedidėtų</td>
                </tr>
                <tr>
                    <td>I laipsnio nutukimas</td>
                    <td>30 - 34.9</td>
                    <td>Padidėjusi, būtina mažinti svorį</td>
                </tr>
                <tr>
                    <td>II laipsnio nutukimas</td>
                    <td>35 - 39.9</td>
                    <td>Didelė, būtina mažinti svorį</td>
                </tr>
                <tr>
                    <td>III laipsnio nutukimas</td>
                    <td>Daugiau nei 40</td>
                    <td>Labai didelė</td>
                </tr>

            </table>
        </div>
    </div>
</div>
</body>
</html>
