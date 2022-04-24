<?php

include ('db/connectioncad.php');
$sql = "SELECT * FROM finalcad";

$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de etiqueta</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="view.php">Enviados <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="cadastro_remetente.php">Cadastrar Nota</a>
      <a class="nav-item nav-link" href="logout.php">Sair</a>
    </div>
  </div>
</nav>
    

<body>
    <div class="container">
        <h1>Usuarios</h1>
        <table class="table">
            <thead>
                <tr>
        <th>ID</th>
        <th>Codigo</th>
        <th>Quantidade</th>
        <th>Volume</th>
        <th>Email</th>
        <th>Status</th>

                </tr>
            </thead>
            <tbody>
                    <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()){
                                ?>
                                <tr>                                
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['cod']; ?></td>
                                <td><?php echo $row['quant']; ?></td>
                                <td><?php echo $row['vol']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['statusEn']; ?></td>
                                 
                                
                                
                                </tr>
                                <?php
                            }
                        }
                      ?>      
            </tbody>
        </table>
    </div>
</body>

</html>