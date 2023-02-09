<?php
session_start();
?>
<!DOCTYPE html>
<html>

<link rel="stylesheet" href="style.css">
<link href="icon.png" rel="icon" type="icon.png" />

<head>

    <title>Galgje | Willekeurig</title>
</head>

<body>
    <div class="head">
        <h1>Galgje</h1>
    </div>

    <div class="text">
        <h3>Je hebt gekozen voor een willekeurig woord!</h3>
    </div>
    <?php
    $randomwoorden = array( // dit is de array voor alle woorden die kunnen worden gebruikt
        "academy",
        "system",
        "grip",
        "shake",
        "attack",
        "number",
        "angle",
        "orange",
        "tacky",
        "rely",
        "jar",
        "touch",
        "train",
        "array",
        "random"
    );
    $kiezen = array_rand($randomwoorden); // dit zorgt ervoor dat een van de woorden random wordt gekozen om mee te spelen
    setcookie('woord', $randomwoorden[$kiezen]); //dit zorgt er voor dat het random woord dat is gekozen word opgeslagen in een cookie
    ?>
    <div class="button">
        <form>
            <button class="startbutton" type="submit" formaction="galgje.php">Start Willekeurig</button> <!-- dit zorgt ervoor dat als je op start willekeurig klikt dat je naar het spel gaat -->
        </form>
    </div>
    <form action="index.php">
        <button type="submit" name="button" value="terug naar start">reset</button>
    </form>
    <div class="img">
        <img src="foto10.png" alt="Galgje" /> <!-- dit print een foto -->
    </div>
</body>

</html>
