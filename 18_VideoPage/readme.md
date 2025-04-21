🧾 Full Code for Reference:
html
Copy
Edit
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Video Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
      background-color: #f0f0f0;
    }

    video {
      width: 80%;
      max-width: 700px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    h1 {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <h1>Watch My Video</h1>

  <!-- Video Element -->
  <video controls>
    <source src="myvideo.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

</body>
</html>
🧠 Line-by-Line Explanation:
html
Copy
Edit
<!DOCTYPE html>
✅ Declares the document type. It tells the browser this is an HTML5 page.

html
Copy
Edit
<html lang="en">
✅ Opens the HTML document and specifies the language as English.

html
Copy
Edit
<head>
✅ The <head> tag contains meta info, title, and styles for the page.

html
Copy
Edit
  <meta charset="UTF-8">
✅ Sets the character encoding to UTF-8, which supports most characters/symbols.

html
Copy
Edit
  <title>My Video Page</title>
✅ This sets the title of the page that appears on the browser tab.

html
Copy
Edit
  <style>
✅ Begins a CSS style section to style the page directly within the HTML file.

css
Copy
Edit
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
      background-color: #f0f0f0;
    }
✅ Styles the <body>:

Sets the font to Arial

Centers all text

Adds 50px padding around content

Sets a light grey background color

css
Copy
Edit
    video {
      width: 80%;
      max-width: 700px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }
✅ Styles the <video> element:

Makes it take 80% of page width

Limits the max width to 700px

Rounds corners

Adds a subtle drop shadow

css
Copy
Edit
    h1 {
      margin-bottom: 20px;
    }
✅ Adds spacing below the main heading (<h1>).

html
Copy
Edit
</style>
</head>
✅ Ends the style section and the head of the document.

html
Copy
Edit
<body>
✅ Starts the visible content of the page.

html
Copy
Edit
  <h1>Watch My Video</h1>
✅ A large heading on the page.

html
Copy
Edit
  <!-- Video Element -->
✅ A comment describing the next section: adding a video.

html
Copy
Edit
  <video controls>
✅ Adds a <video> element with play/pause controls.

html
Copy
Edit
    <source src="myvideo.mp4" type="video/mp4">
✅ Specifies the video file to load and its type.
📝 This file (myvideo.mp4) must be saved in the same folder as the HTML file.

html
Copy
Edit
    Your browser does not support the video tag.
✅ A message that appears only if the browser can’t play the video.

html
Copy
Edit
  </video>
✅ Closes the video element.

html
Copy
Edit
</body>
</html>
✅ Ends the visible body and the entire HTML page.