<?php

include ('db/connection.php');

if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    
    
    //write sql query (quando quiser abrir um banco de dados fazer igual de cima e depois ir no sql do myadmin copiar e colar apagar os valore depois do value adicionar sql = e depois copiar do values igual a parte de cima a parte '' com o sifrão em cima)
    
   $sql = "INSERT INTO `register`(`firstname`, `lastname`, `email`, `password` )  VALUES ('$firstname','$lastname', '$email', '$password')";
    //execute query no phpmyadmin deve estar assim -> INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES () sem o id
   $result = $conn->query($sql);
   if ($result === TRUE) {
   echo "Cadastrado com sucesso. ";

}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastrar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <div class="content">      

      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form action="" method="POST">
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu nome</label>
            <input id="nome_login" name="firstname" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Sua senha</label>
            <input id="password" name="password" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
        
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="login.php">Cadastre-se</a>
          </p>
        </form>
      </div>
  
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
         <form action="" method="POST"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input type="text" name="firstname" class="form-control" placeholder="Nome">
          </p>

          <p> 
            <label for="nome_cad">Seu sobrenome</label>
            <input id="nome_cad" name="lastname" required="required" type="text" placeholder="Seu sobrenome" />
          </p>
           
           
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="password" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" name="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="login.php"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>