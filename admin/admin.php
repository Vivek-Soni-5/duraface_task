<?php include('../views/adminHeader.php'); ?>
<main>
    <div class="product-container">
        <h1 style="text-align:center;">Add New Product</h1>
        <form id="add-product-form" action="add_product" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="features">Features:</label>
            <input type="text" id="features" name="features" required>

            <label for="benefits">Benefits:</label>
            <input type="text" id="benefits" name="benefits" required>

            <label for="applications">Applications:</label>
            <input type="text" id="applications" name="applications" required>
            
            <label for="image_url">Image URL:</label>
            <input type="text" id="image_url" name="image_url" required>
            
            <button type="submit" class="btn">Add Product</button>
        </form>

        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <div class="product-details">
                        <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                        <a href="delete?id=<?php echo htmlspecialchars($product['id']); ?>" class="btn">Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>
    </div>
</main>
<?php include('../views/footer.php'); ?>
