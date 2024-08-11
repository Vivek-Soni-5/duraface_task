<?php
require_once('../controllers/PageController.php');
require_once('../controllers/ProductController.php');
require_once('../controllers/ContactController.php');
require_once('../config/db.php');
require_once('../models/Product.php');
require_once('../controllers/AdminController.php');
// Initialize PDO (assume $pdo is a valid PDO instance)
$productModel = new Product($pdo);

// Basic routing logic
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $path);
$lastSegment = end($segments);
// Check if there is a query string in the last segment
if (strpos($lastSegment, '?') !== false) {
    // Remove the query string to get the base part
    $lastSegment = explode('?', $lastSegment)[0];
}

switch ($lastSegment) {
    case '':
    case 'home':
        $pageController = new PageController();
        $page = $pageController->getPage('home');
        include('../views/home/index.php');
        break;
    case 'about':
        $pageController = new PageController();
        $page = $pageController->getPage('about');
        include('../views/about/index.php');
        break;
    case 'products':
        $productController = new ProductController();
        $products = $productController->getProducts();
        include('../views/product/index.php');
        break;
    case 'details':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $productController = new ProductController();
            $products = $productController->getProduct($_GET['id']);
            include('../views/product/details.php');
        }
        break;
    case 'delete':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $AdminController = new AdminController();
            $product = $AdminController->delete($_GET['id']);
            $products = $AdminController->getProducts();
            include('../admin/admin.php');
        } else {
            include('../admin/admin.php'); 
        }
        break;
    case 'admin':
        $AdminController = new AdminController();
        $products = $AdminController->getProducts();
        include('../admin/admin.php');
        break;
    case 'add_product':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Process the form submission
            $AdminController = new AdminController();
            $AdminController->addProduct($_POST['name'], $_POST['description'], $_POST['features'], $_POST['image_url'], $_POST['benefits'], $_POST['applications']);
            header('Location: admin');
        } else {
            header('Location: admin');
        }
        break;
    case 'contact':
        include('../views/contact/index.php');
        break;
    case 'submit_contact':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contactController = new ContactController();
            $contactController->submitMessage($_POST['name'], $_POST['email'], $_POST['message']);
            header('Location: contact?success=true');
        }
        break;
    default:
        http_response_code(404);
        echo 'Page not found';
        break;
}
