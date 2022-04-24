<?php

include ('db/connectionrast.php');

if (isset($_POST['submit'])){
    $remet = $_POST['remet'];
    $nomerespon = $_POST['nomerespon'];
    $street = $_POST['street'];
    $comple = $_POST['comple'];
    $bairro = $_POST['bairro'];
    $cepcity = $_POST['cepcity'];          
    //write sql query (quando quiser abrir um banco de dados fazer igual de cima e depois ir no sql do myadmin copiar e colar apagar os valore depois do value adicionar sql = e depois copiar do values igual a parte de cima a parte '' com o sifrão em cima)
    
     $sql = "INSERT INTO `tableremetente`(`remet`, `nomerespon`, `street`, `comple`, `bairro`, `cepcity` )  VALUES ('$remet', '$nomerespon', '$street', '$comple', '$bairro', '$cepcity')";
     //execute query no phpmyadmin deve estar assim -> INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES () sem o id
  
     $result = $conn->query($sql);
   if ($result === TRUE) {
    header('Location: cadastro_nota.php');

}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div action="nota.php" class="content">
   <form action="" method="POST"> 
        <h1><b>Remetente</b></h1>
      <div class="form-group">
      <p>
     <label for="destina_camp">Remetente</label>
     <input type="text" class="form-control" name="remet" placeholder="Remetente">
        </p>
     </div>  
      <div class="form-group">
        <p>
      <label for="Cliente">Nome responsavel</label>
       <input type="text" class="form-control"  name="nomerespon" placeholder="Nome do Responsavel">
        </div>
        </p>      
       <div class="form-group">
         <p>
        <label for="rua">Rua</label>
       <input type="text" class="form-control"  name="street" placeholder="Rua">
       </div>
       </p>
       <div class="form-group">
         <p>
          <label for="Comple">Complemento</label>
          <input type="text" class="form-control" name="comple" placeholder="Complemento">
          </div>
          </p>      
          <div class="form-group">
            <p>
         <label for="bairro">Bairro</label>
           <input type="text" class="form-control" name="bairro"  placeholder="Bairro e numero">
            </p>
         </div>
          <div class="form-group">
            <p>
            <label for="cep">Cep</label>
             <input type="text" class="form-control" name="cepcity" placeholder="Exp: 0000-0000">
             </p>
         </div>
               <p> 
            <input type="submit" name="submit" value="CADASTRO DESTINATARIO" >
          </p> 
         
 
</div>
</body>
</html>