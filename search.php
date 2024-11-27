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


    <form action="search.php">
        
        <select name="language" id="">
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="js">Javascript</option>
            <option value="php">PHP</option>
            <option value="python">Python</option>
        </select>

        <input type="text">

    </form>

</body>
</html>

<?php

$language = $_GET["language"]; 

// getting the json data file that contains all possible searching tags

$jsonFile = 'daten.json'; // path of the json file
$jsonData = file_get_contents($jsonFile);

echo "fdssfsf";

// Schritt 2: Die JSON-Daten in ein PHP-Array oder Objekt umwandeln
$data = json_decode($jsonData, true);  // true wandelt es in ein Array um, false für ein Objekt

// Optional: Daten anzeigen
print_r($data);
?>

