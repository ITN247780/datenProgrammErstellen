<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <form action="löschen.php" method="POST">
    <button type="submit" name="g">lösche Daten</button>

  </form>






  <?php



 

  if (isset($_POST['g'])) {


    if (is_dir("Dateien")) {

     
      
      unlink("Dateien/eins.log");
      unlink("Dateien/zwei.log");
      unlink("Dateien/drei.log");



      rmdir("Dateien");
      echo "Daten erfolgreich gelöscht";
    } else {
      echo "Daten nicht vorhanden oder gelöscht!!";
    }
  }



  ?>


  <a href="funkt.php"><br><br>zum erstellen zurück</a>







</body>

</html>