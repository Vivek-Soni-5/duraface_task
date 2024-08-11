<?php
    require_once('../config/db.php');
    require_once('../models/Product.php');

    // Initialize PDO (assume $pdo is a valid PDO instance)
    $productModel = new Product($pdo);

    // Get product ID from URL
    $productId = $_GET['id'] ?? null;

    if ($productId) {
        $product = $productModel->getProductById($productId);
    } else {
        echo "Product ID is missing.";
        exit;
    }
?>

<?php include('../views/header.php'); ?>
<main>
    <?php if ($product): ?>
        <div class="product-details">
            <div class="product-image">
                <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            </div>
            <div class="product-info">
                <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                <p class="description"><?php echo htmlspecialchars($product['description']); ?></p>
                <h2>Features</h2>
                <p><?php echo htmlspecialchars($product['features']); ?></p>
                <h2>Benefits</h2>
                <p><?php echo htmlspecialchars($product['benefits']); ?></p>
                <h2>Applications</h2>
                <p><?php echo htmlspecialchars($product['applications']); ?></p>
                <?php if (!empty($product['data_sheet_url'])): ?>
                    <a href="<?php echo htmlspecialchars($product['data_sheet_url']); ?>" class="btn">Download Data Sheet</a>
                <?php endif; ?>
            </div>
        </div>
    <?php else: ?>
        <p>Product not found.</p>
    <?php endif; ?>
</main>
<?php include('../views/footer.php'); ?>
