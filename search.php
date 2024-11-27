<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<nav>
        <label class="logo">Learn Coding</label>
        <input type="checkbox" id="toggle_button">
        <label for="toggle_button" class="toggle_button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </label>

        <ul>
            <li><a href="index.html">Home</a></li>
            <li class="expandable_li">
                <input type="checkbox" id="products_checkbox">
                <label for="products_checkbox">Front-End</label>
                <ul class="dropdown">
                    <li><a href="./html/html.html">HTML</a></li>
                    <li><a href="./css/css.html">CSS</a></li>
                    <li><a href="./js/js.html">Javasrcipt</a></li>
                </ul>
            </li>
            <li><a href="php.html">PHP</a></li>
            <li><a href="./python/python.html">Python</a></li>
        </ul>
    </nav>


    <form action="search.php" method="get">

        <label for="search"></label><br>
        <input type="text" name="search" id="search">

    </form>

</body>
</html>

<?php

$search = $_GET["search"];

// getting the json file that contains all searching tags
$jsonFile = 'daten.json';
$jsonData = file_get_contents($jsonFile);


// gives an error if it does not work
if ($jsonData === false) {
    die("Fehler beim Laden der Datei.");
}

// changing the data type to an array (assosiative)
$data = json_decode($jsonData, true);


// another error handling code
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Fehler beim Decodieren der JSON-Daten.");
}

// changes the array
$data['neuesFeld'] = 'Neuer Wert';

// Schritt 4: Die geänderten Daten in JSON kodieren
$newJsonData = json_encode($data, JSON_PRETTY_PRINT);

if ($newJsonData === false) {
    die("Fehler beim Kodieren der JSON-Daten.");
}

// Schritt 5: Die geänderten JSON-Daten zurück in die Datei schreiben
if (file_put_contents($jsonFile, $newJsonData) === false) {
    die("Fehler beim Speichern der Datei.");
}

echo "Daten wurden erfolgreich geändert!";
?>
