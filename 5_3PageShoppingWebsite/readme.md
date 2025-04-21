index.html
html
Copy
Edit
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Garments Store - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!DOCTYPE html>: Specifies that this document is an HTML5 document.

<html lang="en">: The root element of the page with the language set to English.

<head>: Contains metadata about the webpage (not visible on the page itself).

<meta charset="UTF-8">: Specifies the character encoding for the webpage (UTF-8).

<title>: The title of the page that appears in the browser tab.

<link>: Links an external CSS file (Bootstrap) for styling the page.

html
Copy
Edit
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.html">GarmentsStore</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="products.html">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">: Defines a navigation bar using Bootstrap's navbar component.

navbar-expand-lg: The navbar will expand in large screen sizes.

navbar-dark: The navbar text is dark-colored.

bg-dark: The background color of the navbar is dark.

<div class="container">: Creates a container to center and add padding inside the navbar.

<a class="navbar-brand" href="index.html">GarmentsStore</a>: The brand/logo part of the navbar, linking to the homepage (index.html).

<button class="navbar-toggler" ...>: The button that appears on smaller screens to toggle the visibility of the navbar links.

<ul class="navbar-nav ms-auto">: A list of navigation links (Home, Products, Contact), which are aligned to the right (ms-auto).

html
Copy
Edit
  <div class="container text-center mt-5">
    <h1>Welcome to GarmentsStore</h1>
    <p>Your one-stop shop for stylish clothing for all ages!</p>
    <img src="images/logo.jpg" class="img-fluid mt-4" alt="Banner">
  </div>
<div class="container text-center mt-5">: A container that centers its content with some margin at the top (mt-5).

<h1>: A main heading that welcomes visitors to the store.

<p>: A paragraph that describes the store.

<img src="images/logo.jpg" class="img-fluid mt-4" alt="Banner">: Displays an image (logo) in a responsive format (img-fluid), with a top margin (mt-4).

html
Copy
Edit
  <footer class="bg-dark text-white text-center p-3 mt-5">© 2025 GarmentsStore</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<footer class="bg-dark text-white text-center p-3 mt-5">: Footer section with dark background and white text, centered, with padding (p-3) and a margin on top (mt-5).

© 2025 GarmentsStore: Copyright message.

<script>: Includes Bootstrap's JavaScript for interactive components (e.g., the responsive navbar).

products.html
html
Copy
Edit
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Garments Store - Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
This is similar to the index.html, setting up the HTML5 document, character encoding, title, and including Bootstrap CSS.

html
Copy
Edit
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.html">GarmentsStore</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="products.html">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
This is the same navbar component as index.html, linking the three pages (Home, Products, Contact).

html
Copy
Edit
  <div class="container mt-5">
    <h2 class="text-center mb-4">Our Products</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
<div class="container mt-5">: A container with a margin-top of 5 to separate the content from the navbar.

<h2>: A heading that introduces the products section.

<div class="row row-cols-1 row-cols-md-3 g-4">: Defines a grid layout where on small screens (row-cols-1), each row will have 1 column, and on medium screens (row-cols-md-3), each row will have 3 columns. g-4 gives spacing between the grid items.

html
Copy
Edit
    <!-- Product 1 -->
    <div class="col">
      <div class="card h-100">
        <img src="images/tshirt.jpg" class="card-img-top" alt="Men's T-Shirt">
        <div class="card-body">
          <h5 class="card-title">Men's T-Shirt</h5>
          <p class="card-text">Comfortable cotton T-shirt in various colors.</p>
          <button class="btn btn-primary w-100">Buy Now</button>
        </div>
      </div>
    </div>
This is a card component for the first product:

<div class="col">: A single column for the product.

<div class="card h-100">: A Bootstrap card with full height (h-100).

<img src="images/tshirt.jpg" ...>: Displays the product image (T-shirt).

<div class="card-body">: Contains the card's content (title, description, and button).

The next two products (Product 2 and Product 3) follow the same structure as Product 1, with different images and descriptions.

html
Copy
Edit
  </div> <!-- End of product grid -->
</div> <!-- End of container -->
  <footer class="bg-dark text-white text-center p-3 mt-5">© 2025 GarmentsStore</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</div> closes the grid and container.

The footer and Bootstrap JavaScript script are similar to the ones in index.html.

contact.html
This file is similar in structure to index.html and products.html, but with a focus on the contact form.

html
Copy
Edit
  <div class="container mt-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <form class="w-50 mx-auto">
This container holds a contact form, with centered text and a margin at the top (mt-5).

<form class="w-50 mx-auto">: A form with a width of 50% of the container, centered horizontally (mx-auto).

html
Copy
Edit
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your Name">
      </div>
Each form element is wrapped in a div with mb-3 for bottom margin.

<label>: Describes the input field.

<input>: A text input field for the user's name, styled using Bootstrap.

Similar structure follows for the email input and message textarea.

html
Copy
Edit
      <button type="submit" class="btn btn-success w-100">Send Message</button>
    </form>
A submit button (btn btn-success) that fills the full width (w-100).

The rest of the page is similar, with a footer and Bootstrap JavaScript.