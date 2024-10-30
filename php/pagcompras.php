<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Compras</title>
</head>
<body>
    <h1>Página de compras</h1>
    <?php 
    include("config.php");


$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()){
    echo "<div class='produto'>";
    echo "<h2>" . $row["nome"] . "</h2>";
    echo "<p>Preço: R$ " . $row["preco"] . "</p>";
    echo "<p>Descriçâo: " . $row["descrição"] . "</p>";
    echo "<img src='" . $row['imagem'] . "'alt='Imagem do Produto'>";
    echo "</div>";
}
} else {
    echo " Nenhum produto disponivel.";
}

$conn->close();

    ?>
</body>
</html>