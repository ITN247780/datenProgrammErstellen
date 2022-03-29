<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="funkt.php" method="POST">
        <button type="submit" name="erstelle">Erstelle die Datei im Ordner</button>
    </form>



    <?php

    if (isset($_POST['erstelle'])) {

       

        #mkdir('Dateien');

        #$file = fopen('Dateien/eins.log','a');
        #$file1 = fopen('Dateien/zwei.log','a');
        #$file2 = fopen('Dateien/drei.log','a');

        #$inhalt = "hallo ich bin eins";
        #$inhalt1 ="hallo ich bin zwei";
        #$inhalt2 ="hallo ich bin drei";


        /////////////////////////////////////////////////////////////////////////////////////////////

        if (!is_dir("Dateien")) {

            mkdir('Dateien');

            $inhalt = "hallo ich bin eins";
            $inhalt1 = "hallo ich bin zwei";
            $inhalt2 = "hallo ich bin drei";

            if (!file_exists("Dateien/eins.log,Dateien/zwei.log,Dateien/drei.log")) {




                $file = fopen('Dateien/eins.log', 'a');
                $file1 = fopen('Dateien/zwei.log', 'a');
                $file2 = fopen('Dateien/drei.log', 'a');





                fwrite($file, $inhalt);
                fwrite($file1, $inhalt1);
                fwrite($file2, $inhalt2);
                echo "Daten erfolgreich Erstellt!!";
                echo "<br>";
            } 
        }else {
                echo "Die Daten sind schon vorhanden!!";
            }
    } //button



    ?>







    <a href="löschen.php"><br><br>löschen</a>






</body>

</html>