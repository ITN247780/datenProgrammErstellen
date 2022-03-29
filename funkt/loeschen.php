
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
    
    
<p>Löschen der Datei Button drücken!!</p>

<form action="loeschen.php" method="POST">
    <button type="submit" name="g">löschen</button>
    
</form>

<?php

if(isset($_POST['g'])){

    if(!file_exists("test/file.log")){
       echo "<br>Datei nicht vorhanden zum löschen<br><br>";
    }else{


//fclose($file);
unlink("test/file.log");
rmdir("test");
echo "<br>Datei wurde Erfolgreich gelöscht<br><br>";

    }   
 
}

?>

<a href="php.php"><br>zurück zum erstellen</a>



</body>
</html>
