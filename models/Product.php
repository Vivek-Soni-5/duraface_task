<?php

class Product
{
    private $pdo;

    // Constructor to initialize PDO connection
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Method to fetch all products
    public function getAllProducts()
    {
        $sql = 'SELECT * FROM products';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Method to fetch a single product by its ID
    public function getProductById($id)
    {
        $sql = 'SELECT * FROM products WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Method to create a new product
    public function createProduct($name, $description, $price, $category_id)
    {
        $sql = 'INSERT INTO products (name, description, price, category_id) VALUES (:name, :description, :price, :category_id)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Method to update an existing product
    public function updateProduct($id, $name, $description, $price, $category_id)
    {
        $sql = 'UPDATE products SET name = :name, description = :description, price = :price, category_id = :category_id WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Method to delete a product
    public function deleteProduct($id)
    {
        $sql = 'DELETE FROM products WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}

