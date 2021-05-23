<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>♦ SHOP SHOP ♦</title>
    <link rel="stylesheet" href="css/pure-min.css">
    <link rel="stylesheet" href="css/_.css">
    <style>
        body {
            font-family: "Bookman Old Style";
            font-size: 1.7em;
        }
    </style>
</head>
<body class="solo">
<form action="index.php" method="post" class="pure-form pure-form-message">
    <?php
        
        if (!empty($_POST["clear"])) {
            $_SESSION["cart"] = [];
        }
        if (!empty($_POST["item"])) {
            $item = $_POST["item"];
            $_SESSION["cart"][] = $item;
        }
    $cart_count = empty($_SESSION["cart"]) ? 0 : count($_SESSION["cart"]);
    ?>
    <h1>🛒 My cart (<?= $cart_count ?>)</h1>
    <button class="lnk" type="submit" name="clear" value="clear">✖ Clear</button>
    <?php require_once "cart.php"; ?>
    <h1>🛍 Shop</h1>
    <?php
        $items = [ "🍎", "🍒", "🍓", "🍞", "🍡", "🍜" ];
        foreach ($items as $item) {
            echo "<button class='pure-button' type='submit' name='item' value='$item'> $item </button>";
        }
    ?>
    <br><br>
        <span><a class="lnk" href="https://www.facebook.com/ambratolm2" target="_blank">&copy; Ambratolm</a></span>
</form>
</body>
</html>