<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bodyContainer">

<form class="formContainer container mt-5 bg-dark" action="controler/envio.php" method="POST">

   <div class="form-floating mb-3">
    <input required type="text" name="nome" class="form-control" id="floatingInputNome" placeholder="Seu nome">
    <label for="floatingInputNome">Nome</label>
  </div>

  <div class="form-floating mb-3">
    <input type="email" name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
    <label for="floatingInputEmail">Email </label>
  </div>

  <div class="form-floating mb-3">
    <input type="number" name="telefone" class="form-control" id="floatingPassword" placeholder="Telefone">
    <label for="floatingPassword">Telefone</label>
  </div>

  <div class="form-floating mb-3">
   <textarea name="mensagem" class="form-control" id="floatingMensagem" placeholder="Sua mensagem" required></textarea>
   <label for="floatingMensagem">Mensagem</label>
</div>

  
  <button name="enviar" type="submit" class="botao btn btn-primary btn-info btn-lg mt-4 container-fluid ">Enviar</button>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>