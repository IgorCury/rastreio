<?php
include ('db/connectioncad.php');
  
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="jquery-3.6.0.min.js"></script>
<script src="barJs.js" defer></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">RASTRA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="register.php">Cadastra-se</a>
      <a class="nav-item nav-link" href="login.php">Acessar</a>
    </div>
  </div>
</nav>
        <h1>Rastreio de nota</h1>
        
        <form method="POST" action="index.php">
         Pesquisar:
         <input type="text" name="cod" placeholder="PESQUISAR">
         <input type="submit" name="submit" value="ENVIAR">    
                  
        <?php if(isset($_POST['submit'])){
          $query = "select * from finalcad where cod = $_POST[cod]";
          //echo $query;
          $query_run = mysqli_query($conn, $query);
          while($row = mysqli_fetch_assoc($query_run)){
        
         echo "<h1> Status do seu pedido:</br> ".$row['statusEn']."</h1><br>";
          echo '<br>';
          
                }
              }
         ?>
         

    <h1 class="text-center">STATUS DA ENTREGA</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>                
        <div
          class="progress-step progress-step-active"
          data-title="Cadastrado"></div>
        <div class="progress-step" data-title="Parado"></div>
        <div class="progress-step" data-title="Saindo para entrega"></div>
        <div class="progress-step" data-title="Entregue"></div>
      </div>

      <!-- Steps -->

    </form>


</form>
</body>
</html>