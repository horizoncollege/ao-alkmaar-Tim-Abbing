<!DOCTYPE html>
<html>
<?php
error_reporting(0);
?>

<head>
    <link href="icon.png" rel="icon" type="icon.png" />
    <meta charset="utf-8">
    <title>Galgje | Spel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .mid {
            display: inline-block;
            width: 55%;
        }

        .right {
            display: inline-block;
            width: 44%;
        }

        .right img {
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="mid">
        <?php

        $mistakesCount = 0;
        if (isset($_POST['button'])) {
            if ($_POST['button'] != 'reset') {
                $lastCharacter   = $_POST['button'];
                if (isset($_COOKIE['characters'])) {
                    $characters = $_COOKIE['characters'] . ',' . $_POST['button']; //dit reset alle fouten als ]je op rest klikt
                } else {
                    $characters = $_POST['button'];
                }
                setcookie('characters', $characters, time() + (86400 * 10));
                header("Location: galgje.php");
            } else {
                setcookie("woord", "", time() - 3600);
                setcookie("characters", "", time() - 3600);
                setcookie("mistakes", "", time() - 3600);
                header("Location: index.php"); //dit set alle cookie's
            }
        }
        $woordKarakters = str_split($_COOKIE['woord']);
        $keuzeKarakters = explode(",", $_COOKIE['characters']);
        $won = true;
        foreach ($woordKarakters as $woordKarakter) {
            $keuzeCorrect = false;
            foreach ($keuzeKarakters as $keuzeKarakter) {
                if ($woordKarakter === $keuzeKarakter) {
                    $keuzeCorrect = true;
                }
            }
            if ($keuzeCorrect) {
                echo ($woordKarakter);  // dit zorgt er voor dat als je een goede letter aanklikt het lage streepje word vervangen door een letter
            } else {
                echo ('_ ');
                $won = false;  // het laage streepje laat zien hoeveel letters er in hert woord zitten
            }
        }
        foreach ($keuzeKarakters as $keuzeKarakter) {
            $keuzeCorrect = false;
            foreach ($woordKarakters as $woordKarakter) {
                if ($woordKarakter === $keuzeKarakter) {
                    $keuzeCorrect = true; //hier word gechekt wat je hebt aangeklikt of het goed of fout is
                }
            }

            if (!$keuzeCorrect) {
                $mistakesCount++; //als je een foute letter aanklikt zorgt dit er voor dat er 1 strafpunt bij komt
            }
        }
        $lose = false;
        if ($mistakesCount === 10) { //dit zet het maximum aantal fouten voordat je af bent op 10
            $lose = true;
        }

        if ($won) {
            echo '<h1 class="Gewonnen">Je hebt gewonnen</h1>'; // dit word uitgeprint als je gewonnen hebt
        }
        if ($lose) {
            echo '<h1 class="Verloren">Je hebt verloren</h1>'; // dit word uitgeprint als je hebt verloren
            echo "<br><h3 class='Verloren'> Het woord was " . $_COOKIE['woord']; // hier word  het word laten zien wat het had moeten zijn als je hebt verloren
        }
        ?>
        <br>
        <br>
        <br>
        <form action="galgje.php" method="post">
            <button type="submit" name="button" value="reset">reset</button> <!-- dit print de reset button -->

            <?php
            $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
            foreach ($alphabet as $value) { //dit zorgt dat alle letters in een array komen
                $display = true;
                foreach ($keuzeKarakters as $keuzeKarakter) {
                    if ($value === $keuzeKarakter) {
                        $display = false;
                    }
                }
                if ($won) {
                    $display = false;
                    setcookie('woord', "");
                    setcookie('characters', ""); // dit zorgt er voor dat als je hebt gewonnen dat je dan geen letter meer kan aanklikken
                }
                if ($lose) {
                    $display = false;
                    setcookie('woord', "");
                    setcookie('characters', ""); // dit zorgt er voor dat als je hebt verloren dat je dan geen letters meer kan aanklikken
                }
                if ($display) {
                    echo ('<button type="submit" name="button" value="' . $value . '">' . $value . '</button>');
                } else { //dit print ale letters en zorgt dat je er op kan klikken
                    echo ('<button type="submit" name="button" value="' . $value . '" disabled>' . $value . '</button>');
                }
            }
            ?>

        </form>

        <h1>Gebruikte letters:</h1>
        <p>
            <?php
            foreach ($keuzeKarakters as $keuzeKarakter) {
                echo ($keuzeKarakter . ' , '); // dit print komma's tussen de letters die zijn gebruikt
            }
            ?>
        </p>
    </div>
    <div class="right">
        <?php //dit print alle foto's
        if ($mistakesCount == 0) {
            echo ('<img id="dood" src="foto1.png">');
        }
        if ($mistakesCount == 1) {
            echo ('<img id="dood" src="foto2.png">');
        }
        if ($mistakesCount == 2) {
            echo ('<img id="dood" src="foto3.png">');
        }
        if ($mistakesCount == 3) {
            echo ('<img id="dood" src="foto4.png">');
        }
        if ($mistakesCount == 4) {
            echo ('<img id="dood" src="foto5.png">');
        }
        if ($mistakesCount == 5) {
            echo ('<img id="dood" src="foto6.png">');
        }
        if ($mistakesCount == 6) {
            echo ('<img id="dood" src="foto7.png">');
        }
        if ($mistakesCount == 7) {
            echo ('<img id="dood" src="foto8.png">');
        }
        if ($mistakesCount == 8) {
            echo ('<img id="dood" src="foto9.png">');
        }
        if ($mistakesCount == 9) {
            echo ('<img id="dood" src="foto10.png">');
        }
        if ($mistakesCount == 10) {
            echo ('<img id="dood" src="END.png">');
        }
        ?>

    </div>
</body>

</html>
