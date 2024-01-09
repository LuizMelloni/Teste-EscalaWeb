<?php
include_once('conexao.php');


$sql = "SELECT * FROM contatos";
$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>

    <h2>Lista de Clientes</h2>

    <?php
    if ($result->num_rows > 0) {
        
        echo "<ul>";
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["nome"] . " - " . $row["email"] . " - " . $row["telefone"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum contato encontrado.";
    }


    $conexao->close();
    ?>

</body>
</html>
