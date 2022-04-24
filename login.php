<?php

include('db/connection.php');

if(isset ($_POST['email']) || isset ($_POST['password'])) {

    if(strlen($_POST['email']) == 0 ) {
        echo "Prencha seu e-mail";
    } else if(strlen($_POST['password']) == 0 ) {
        echo "Prencha sua senha";
    }else {

        $email = $conn -> real_escape_string($_POST['email']);
        $password = $conn -> real_escape_string($_POST['password']);

        $sql_code = "SELECT * FROM register WHERE email = '$email' AND `password` = '$password'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução da sql:" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade ==  1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset ($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: menu.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }
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
   <div class="content"> 
  <div id="login">
</head>
<body>
    <h1>ACESSAR RASTREIO</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">            
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="password">            
        </p>
                <p>
                <input type="submit" value="Logar">
                </p>

                    <p class="link">
                     Ainda não tem conta?
                  <a href="register.php">Cadastre-se</a>
                 </p>

                    
            </div>
            </div>
        </div> 
    </form>  

</body>
</html>

