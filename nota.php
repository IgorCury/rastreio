<?php

include ('db/connectioncad.php');

if (isset($_POST['submit'])){
    $cod = $_POST['cod'];
    $quant = $_POST['quant'];
    $vol = $_POST['vol'];
    $email = $_POST['statusEn'];  
    $email = $_POST['email'];

    //write sql query (quando quiser abrir um banco de dados fazer igual de cima e depois ir no sql do myadmin copiar e colar apagar os valore depois do value adicionar sql = e depois copiar do values igual a parte de cima a parte '' com o sifrão em cima)
    
     $sql = "INSERT INTO `finalcad`(`cod`, `quant`, `vol`, `statusEn`, `email`)  VALUES ('$cod', '$quant', '$vol', '$statusEn', '$email')";
     //execute query no phpmyadmin deve estar assim -> INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES () sem o id
  
     $result = $conn->query($sql);
   if ($result === TRUE) {
    header('Location: index.php');

}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <script src="jquery-3.6.0.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro final da nota</title>
</head>
<body>
   <form action="" method="POST">
  <div class="content">
      <h1> <b>SEU CODIGO DE RASTREIO</b></h1>
      <p>
     <label for="destina_camp">Numero do rastreio</label>
     <input type="text" class="form-control" name="cod" value="<?php echo $cod = rand(100000, 999999); ?>" readonly>     
      </p>


  </h1>
  <h1><b>DIGITE A QUANTIDADE DE VOLUME</b></h1>
    <p>  <input  name="quant" type="number" min="1" max="999" placeholder="digite o numero de volume"/>   </p>
</br>  
  <select name="vol" class="form-control form-control-lg"> 
  <option>Volume</option>
  <option>Caixa</option>
  <option>Saco</option>
</select>
</br>
</br>  
            <p>
            <h3><b>Digite seu e-mail para receber o rastreio</b></h3>
            <label for="bairro">E-mail</label>
           <input type="email" class="form-control" name="email"  placeholder="Digite o e-mail para receber o rastreio">
            </p>

        
               
         <p> 
            <input type="submit" name="submit" value="Finalizar" >
          </p>            
</div>   
</script>
 </form>
</body>
</html>
