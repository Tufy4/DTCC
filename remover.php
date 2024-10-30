<?php
session_start();


if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    if (isset($_SESSION['cart'])) {
        // Encontra o índice do item no carrinho com base no ID do produto
        $item_index = -1;
        foreach ($_SESSION['cart'] as $index => $item) {
            if ($item['id'] == $product_id) {
                $item_index = $index;
                break;
            }
        }

        // Remove o item
        if ($item_index !== -1) {
            unset($_SESSION['cart'][$item_index]);

            header("Location: carrinho.php");
            exit();
        }
    }
}


header("Location: carrinho.php");
exit();
?>
