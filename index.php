

<?php
    include 'db_baglan.php';

    if(isset($_GET["ara"])) {
        $ARANANAD = $_GET["ara"];
        // Çalıştırılacak sorgu
        $SORGU = $DB->prepare("SELECT * FROM rehber
            WHERE adisoyadi LIKE '%$ARANANAD%' ");
    } else {
        // Çalıştırılacak sorgu
        $SORGU = $DB->prepare("SELECT * FROM rehber");
    }
    // Sorguyu çalıştır
    $SORGU->execute();
    // Kayıtları Getir
    $KAYITLAR = $SORGU->fetchAll();
?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact List</title>
  </head>
  <body style="background-color:#bfbfbf">
    <div class="continer mt-5 mb-5">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <div class="jumbotron">
        <h1 class="display-4">Participant List</h1>
        <p class="lead"></p>
        <a class="btn btn-primary btn-dark" href="create.php" role="button">Click to add new participants</a>
    </div>
    </div>
<div class="col-md-2"></div>
<div class="col-md-8">
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Name</th>
          <th scope="col">Number</th>

        </tr>
      </thead>
<?php foreach ($KAYITLAR as $KAYIT): ?>
      <tbody>
        <tr>
          <th scope="row">
            <?php echo $KAYIT['id'] ?>
          </th>
          <td><?php echo $KAYIT['Name'] ?></td>
          <td>  <?php echo $KAYIT['Number'] ?></td>


        </tr>

      </tbody>
<?php endforeach; ?>
    </table>
  </div>
  <div class="col-md-2"></div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
