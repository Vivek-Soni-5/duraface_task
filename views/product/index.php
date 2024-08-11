
<?php include('../views/header.php'); ?>
<main>
    <div class="product-container">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <div class="product-details">
                        <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                        <a href="details?id=<?php echo htmlspecialchars($product['id']); ?>" class="btn">View Details</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>
    </div>
</main>
<?php include('../views/footer.php'); ?>

