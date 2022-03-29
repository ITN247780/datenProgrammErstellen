
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
     body {
     width: 500px;
     height:400px;
     background-color: #f0f8ff;
     border:1px solid black;
     }




    </style>
</head>
<body>
<h1>Erstellen und löschen von datei</h1>
 
<form action="php.php" method="POST">
<button type="submit" name="erstelle">Erstelle die Datei im Ordner</button>
</form>



<?php

if(isset($_POST['erstelle'])){





echo "1.Erstelle einen Ordner mit den Namen Test";
//mkdir('test'); // erstelle ordner
//rmdir('img'); // lösche ordner

echo "<br>";
///
echo "2.Erstelle eine Datei Namens file.log";
//$file = fopen("test/file.log","a");    //a append mode schreibt dazu w überschreibt file
$inhalt ="inhalt der log datei!!";

if(!file_exists("test/file.log")){  
mkdir('test');
$file = fopen("test/file.log","a");

fwrite($file, $inhalt);
echo "<br>";
echo "<br>";
echo "Datei wurde erfolgreich erstellt!";
//header("Refresh:3; url=loeschen.php");
echo '<a href="loeschen.php"><br><br>zum löschen</a>';
}else{
    echo "<br><br>Die Datei ist schon vorhanden!!";
    //header("Refresh:3;url=loeschen.php");
    echo '<a href="loeschen.php"><br><br>zum löschen</a>';
}



}



?>

</body>
</html>