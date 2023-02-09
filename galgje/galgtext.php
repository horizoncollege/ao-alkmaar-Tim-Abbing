<?php
session_start();
?>

<!DOCTYPE html>
<html>

<link rel="stylesheet" href="style.css">
<link href="icon.png" rel="icon" type="icon.png" />

<head>
    <title>Galgje | Zelf</title>
</head>

<body>
    <div class="head">
        <h1>Galgje</h1>
    </div>
    <div class="text">
        <h3>Je hebt gekozen om zelf een woord in te voeren.</h3>
    </div>
    <div class="button">
        <form method="POST">
            <input class="textinput" type="text" name="WoordGalgje" id="WoordGalgje" placeholder="Voer een woord in" /> <!-- dit is de input waar je je woord kan invullen om mee te spelen -->
            <button class="start" type="submit" name="Opslaan" id="Start">opslaan</button> <!-- dit print de opslaan knop-->
        </form>
    </div>
    <div class="phpGalgWoord">
        <h2>
            <?php
            if (isset($_POST["Opslaan"])) {
                    setcookie('woord', $_POST["WoordGalgje"]);
                    header("refresh: 0 "); // zorgt er voor dat als je op opslaan klikt dat het woord wordt opgeslagen
            }
            
            if (isset($_COOKIE["woord"])) { //dit laat het woord zien dat je hebt gekozen wanneer je op opslaan hebt ge klikt
                echo ("Je hebt een woord gekozen om mee te spelen");
            }
            ?>
        </h2>
    </div>
    <div class="img">
        <img src="foto10.png" alt="Galgje">  <!-- dit print een foto -->
    </div>
    <div class="startbutton">
        <form>
            <button class="startbutton" type="submit" formaction="galgje.php">Begin het spel</button> <!-- deze knop zorgt ervoor dat als je op begin spel klikt dat je naar het spel gaat -->
        </form>
    </div>
    <form action="index.php">
    <button type="submit" name="button" value="terug naar start">reset</button>
    </form>
</body>

</html>
