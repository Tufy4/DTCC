<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $product_id = $_POST['product_id'];
    $quantidade = intval($_POST['quantidade']);

 
    include("php/configgg.php");

 
    $sql = "SELECT * FROM produto WHERE idproduto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();


        $item = [
            'id' => $product_id,
            'nome' => $row['nome'],
            'preco' => $row['preco'],
            'quantidade' => $quantidade
        ];

  
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Adiciona o item ou atualiza
        $item_exists = false;
        foreach ($_SESSION['cart'] as &$cart_item) {
            if ($cart_item['id'] === $item['id']) {
                $cart_item['quantidade'] += $item['quantidade'];
                $item_exists = true;
                break;
            }
        }

        if (!$item_exists) {
            $_SESSION['cart'][] = $item;
        }

        echo "Produto adicionado ao carrinho com sucesso!";
    } else {
        echo "Produto não encontrado.";
    }


    $stmt->close();
    $conn->close();
}


header("Location: compra.php?id=" . $product_id);
?>
