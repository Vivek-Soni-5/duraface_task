# Product Management Web Application for Duraface Solutions

## Overview

This project is a web application designed for managing products. It features a simple admin interface for CRUD operations and a contact form for user inquiries. The application allows users to add, view, and delete products through a straightforward interface.

## Features

### Homepage

1. **Hero Section**:
   - Captivating image
   - Headline
   - Subheading
   - Call-to-action button
     
      ![image](https://github.com/user-attachments/assets/d1e3f9e5-3b54-46d9-beae-4de8f8b65a94)

2. **About Us Section**:
   - Detailed company information

     ![image](https://github.com/user-attachments/assets/03261dff-2086-45e0-92c2-fa63ea6b0c37)


3. **Key Product Categories**:
   - Tile Adhesives
   - Wall Putty
   - Block Joining Mortar
   - Each category includes images and brief descriptions

4. **Benefits Section**:
   - Icons/visuals highlighting the advantages of Duraface products

5. **Testimonials/Case Studies**:
   - Display of customer testimonials or case studies
     
     ![image](https://github.com/user-attachments/assets/665c249d-740b-43fb-88eb-0ff68a8754c3)

6. **Call to Action**:
   - Contact information
   - Contact form

### Product Pages

1. **Category Pages**:
   - Individual pages for each product category

     ![image](https://github.com/user-attachments/assets/7d06e853-6b6a-4a58-94f1-59cc7a7d122a)

2. **Product Details**:
   - Detailed product information
   - Features, benefits, and applications
   - High-quality images
   - Optional technical specifications and data sheets
  
     ![image](https://github.com/user-attachments/assets/cf34d846-0929-415c-998d-d47ed6e41406)

### Other Pages

1. **About Us Page**:
   - Expanded company information
  
     ![image](https://github.com/user-attachments/assets/bed8da35-4cf3-42d7-8512-03e3c289bd7c)

2. **Contact Us Page**:
   - Contact details
   - Functional contact form

      ![image](https://github.com/user-attachments/assets/9d594e5a-b5fc-4a56-a1f8-60fc0b3808f2)


### Content Management System (CMS)

1. **Admin Functionality**:
   - Create, edit, and delete pages
   - Manage page content (title, content, URL slug, meta title, and description)
   - Basic image uploads for page content

### MVC Pattern

1. **Model**:
   - Handles database interactions and data management

2. **View**:
   - Responsible for rendering the HTML and presenting data to users

3. **Controller**:
   - Processes user input and updates the model and view accordingly

## Technologies Used

- **PHP**: Server-side scripting language.
- **MySQL** (or MariaDB): Database management system.
- **PDO**: PHP Data Objects for database interaction.
- **HTML/CSS**: Front-end technologies for layout and styling.


## Installation

### Setup the Database

1. **Clone the Repository**

   ```bash
   git clone https://github.com/Vivek-Soni-5/duraface_task.git
   cd duraface_task

2. **Create a MySQL or MariaDB Database**
   - Use a MySQL client to create a new database.

3. **Setup the Database**
   - Create a MySQL or MariaDB database.
   - Import the provided SQL schema to set up the database structure.
   - Update the `config/db.php` file with your database credentials.
     
4. **Configure the Environment**
   - Ensure PHP and MySQL/MariaDB are installed on your system.
   - Configure your web server (e.g., Apache or Nginx) to serve the project directory.

5. **Start the Server**
   ```bash
   php -S localhost:8000 -t public

### Usage

1. **Access the Application**
   - Open your web browser and navigate to http://localhost:8000 (or the port you have configured).

2. **Admin Interface**
   - Navigate to /admin to view and manage products.
   - Use the /add_product endpoint to add new products.

3. **Contact Form**
   - Navigate to /contact to submit your inquiries.

### File Structure

1. **`public/`: Publicly accessible directory.**
   - `index.php`: Main routing and entry point for the application.
2. **`controllers/`: Contains controller classes for handling business logic.**
3. **`models/`: Contains model classes for database interactions.**
4. **`views/`: Contains view files for rendering HTML content.**
5. **`config/`: Contains configuration files, including database connection settings.**

### Example Usage

1. **Adding a Product**
   - Go to /admin and select "Add Product".
   - Fill out the form with the product details.
   - Submit the form to add the product to the database.
2. **Deleting a Product**
   - Navigate to /admin to view the list of products.
   - Click "Delete" next to the product you wish to remove.
  
### Accessing the Homepage

1. **Go to the Homepage**:
   - Open your web browser and navigate to `http://localhost:8000` (or the port you have configured).

2. **View the Homepage**:
   - The homepage will display the hero section, about us section, key product categories, benefits, testimonials, and a clear call-to-action section.


### Viewing Products

1. **Navigate to the Products Page**:
   - From the homepage, click on the "Products" link in the navigation menu or go directly to `http://localhost:8000/products`.

2. **View Product Categories**:
   - The products page will display key product categories, such as Tile Adhesives, Wall Putty, and Block Joining Mortar, with images and brief descriptions.

3. **Explore Specific Products**:
   - Click on a product category to view individual products within that category. Detailed information, including product features, benefits, and high-quality images, will be displayed.

4. **Access Product Details**:
   - Click on a specific product to view detailed information, features, benefits, applications, and optional technical specifications or data sheets for download.


### Contact
  ![image](https://github.com/user-attachments/assets/bfe280b5-1cc3-44bb-b2a8-d911e87e7da8)


For questions or issues, please contact sonivivek050@gmail.com.
