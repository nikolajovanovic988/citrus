<?php

use Citrus\Repositories\Fruit;

$sql = "SELECT * FROM products";

$products = array();

if (!$q = $conn->query($sql)) {
    die("Database error!");
} else {
    while ($line = $q->fetch_object()) {
        $fruit = new Fruit($line->image, $line->title, $line->description);
        array_push($products, $fruit);
    }
}
?>

<div class="grid">
    <?php foreach ($products as $product) { ?>
        <div class="cell">
            <img src="<?php echo $product->getImage(); ?>" alt="fruit" class="product-img">
            <p class="product-title"><?php echo $product->getTitle(); ?></p>
            <p class="product-description"><?php echo $product->getDescription(); ?></p>
        </div>
    <?php } ?>
</div>