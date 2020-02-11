<?php
    include 'db_connect.php';

    if(isset($_POST['submit'])){
        // Sorguyu hazırlayalım
        $SORGU = $DB->prepare("INSERT INTO rehber(adisoyadi, telefonu, birimi)
        VALUES (:adisoyadi,:telefonu,:birimi)");
        $SORGU->bindParam(":adisoyadi", $adisoyadi);
        $SORGU->bindParam(":telefonu",  $telefonu);
        $SORGU->bindParam(":birimi",    $birimi);
        // SQL Sorgumuzu çalıştıralım
        $SORGU->execute();
        $YeniKayitID = $DB->lastInsertId();
        die("$YeniKayitID Kayıt numarası ile kaydedildi");
        // İşlem tamam. Ana sayfaya yönlendirelim.
        header("location: index.php");
        die();
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Create New Participant </title>
  </head>
  <body>


        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>

    <form>
  <div class="container">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
  </div>
      <div class="form-group">
    <label for="exampleInputPassword1">Number</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
        <div class="form-group form-check">


      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
