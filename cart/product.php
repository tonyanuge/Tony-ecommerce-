<?php
// id checker
if (isset($_GET['id'])) {
    // Prepare statement and execute
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Get product and return from the database 
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$product) {
        // Show if product id doesn't exists 
        exit('Product does not exist!');
    }
} else {
    exit('Product does not exist!');
}
?>
<?=template_header('Product')?>

<div class="product content-wrapper">
    <img src="imgs/<?=$product['img']?>" width="500" height="500" alt="<?=$product['name']?>">
    <div>
        <h1 class="name"><?=$product['name']?></h1>
        <span class="price">
            &euro;<?=$product['price']?>
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp">&euro;<?=$product['rrp']?></span>
            <?php endif; ?>
        </span>
        <form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" value="Add To Cart">
        </form>
        <div class="description">
            <?=$product['desc']?>
        </div>
    </div>
</div>

<?=template_footer()?>