<!DOCTYPE html>
✅ Declares the document type. This tells the browser it's an HTML5 document.

html
Copy
Edit
<html lang="en">
✅ Opens the HTML document and sets the language to English.

html
Copy
Edit
<head>
✅ Starts the <head> section, which contains metadata, styles, and links.

html
Copy
Edit
  <meta charset="UTF-8">
✅ Sets character encoding to UTF-8 (supports all common characters/symbols).

html
Copy
Edit
  <meta name="viewport" content="width=device-width, initial-scale=1">
✅ Ensures the website is responsive — fits well on mobile, tablet, and desktop.

html
Copy
Edit
  <title>My Local Image Gallery</title>
✅ Sets the title of the page. This shows up on the browser tab.

html
Copy
Edit
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
✅ Loads Bootstrap 5.3 CSS from a CDN to use its grid system, spacing, and responsive design features.

html
Copy
Edit
  <style>
✅ Starts an internal CSS block to define custom styles.

css
Copy
Edit
    .gallery-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
    }
✅ Styles for images in the gallery:

width: 100%: makes the image take full width of its column.

height: 250px: fixed height.

object-fit: cover: image covers the space without stretching.

border-radius: gives images rounded corners.

css
Copy
Edit
    .gallery-container {
      padding: 40px;
    }
✅ Adds 40px padding around the gallery area.

css
Copy
Edit
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
✅ Centers the heading and adds space below it.

html
Copy
Edit
  </style>
</head>
✅ Ends the style block and the <head> section.

html
Copy
Edit
<body>
✅ Starts the visible part of the web page.

html
Copy
Edit
<div class="container gallery-container">
✅ A Bootstrap container with the class gallery-container to apply our custom padding.

html
Copy
Edit
  <h2>My Local Image Gallery</h2>
✅ The gallery title, styled using our CSS (centered, spaced).

html
Copy
Edit
  <div class="row g-4">
✅ A Bootstrap row with g-4 (gap size 4). It lays out a grid with spacing between items.

Below are columns with images:
html
Copy
Edit
    <div class="col-sm-6 col-md-4 col-lg-3">
      <img src="img1.jpg" alt="Image 1" class="gallery-img">
    </div>
✅ This shows one image:

col-sm-6: On small screens, image takes 6/12 (half) of the width.

col-md-4: On medium screens, image takes 4/12 (one-third).

col-lg-3: On large screens, image takes 3/12 (one-fourth).

img src="img1.jpg": Loads an image named img1.jpg from the same folder as the HTML file.

alt="Image 1": Alternative text for accessibility.

class="gallery-img": Applies the custom styling we defined earlier.

👉 This block is repeated for img2.jpg, img3.jpg, and img4.jpg.

html
Copy
Edit
    <!-- Add more images as needed -->
✅ A comment reminding you that you can copy/paste more <div> blocks to add more images.

html
Copy
Edit
  </div>
</div>
✅ Closes the image row and the container.

html
Copy
Edit
</body>
</html>
✅ Ends the body and the entire HTML document.

✅ Notes for Your Use:
Place img1.jpg, img2.jpg, etc., in the same folder as your .html file.

You can add more images by copying any <div class="col-..."> block.