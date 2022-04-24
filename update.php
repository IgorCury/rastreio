<?php

include ('db/connectioncad.php');

    // if the form's update button is clicked, we need to procss the form
    	if (isset($_POST['update'])) {
		// $id = $_POST['id']; 
		// $cod = $_POST['cod'];
		$quant = $_POST['quant'];
		$vol = $_POST['vol'];
		$email = $_POST['email'];
		$statusEn = $_POST['statusEn'];

		// write the update query
		$sql = "UPDATE `finalcad` SET `quant`='$quant',`vol`='$vol',`statusEn`='$statusEn' WHERE `quant`='$quant'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
			header('Location: view.php');
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}
    

    // if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `finalcad` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			
        $id = $row['id'];
		$cod = $row ['cod'];
		$quant = $row ['quant'];
		$vol = $row ['vol'];
		$email = $row ['email'];
		$statusEn = $row ['statusEn'];
		}
    }

}

	?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<script src="jquery-3.6.0.min.js"></script>
	<script src="barJs.js" defer></script>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Status da entrega</title>
    </head>
    <body>
        
		<h2>Rastreio</h2>
		<form action="" method="post">
        <div class="content">
		  <fieldset>
		    <legend>Informaçõe do Rastreio</legend>
		   
		    Quantidade:<br>
		    <input type="text" name="quant" value="<?php echo $quant; ?>">
		    <br>
		    Tipo de entrega:<br>
		    <input type="text" name="vol" value="<?php echo $vol; ?>">
		    <br>
		    E-mail:<br>
		    <input type="email" name="email" value="<?php echo $email; ?>">
		    <br>
		    Status da entrega:<br>     
                     
			<div class="form-step form-step-active">
                <select class="form-control form-control-lg" name="statusEn" >
                <option name="statusEn"   value="Cadastrado" <?php if($statusEn == 'Cadastrado'){ echo "checked";} ?>>Cadastrado</option>

                <option name="statusEn"   value="Parado" <?php if($statusEn == 'Parado'){ echo "checked";} ?>>Parado</option>

                <option name="statusEn"  value="Saindo para entrega" <?php if($statusEn == 'Saindo para entrega'){ echo "checked";} ?>>Saindo para entrega</option>

                <option name="statusEn"   value="Entregue" <?php if($statusEn == 'Entregue'){ echo "checked";} ?>>Entregue</option>
                </select>
		    <br><br>
		    <input type="submit" value="ATUALIZAR" name="update">

			
		  </fieldset>
		</form>
    </div>
 </body>
</html>




