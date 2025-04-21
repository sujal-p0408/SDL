<!DOCTYPE html>
Declares this file as an HTML5 document.

html
Copy
Edit
<html lang="en">
Starts the HTML page and sets the language to English.

html
Copy
Edit
<head>
The head section contains meta info, links to CSS, etc.

html
Copy
Edit
  <meta charset="UTF-8">
Sets character encoding so the browser knows how to read text (UTF-8 supports all characters).

html
Copy
Edit
  <title>Dynamic TY Time Table</title>
The name that appears in the browser tab.

html
Copy
Edit
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
Loads Bootstrap CSS from the internet so we can use its styling classes.

html
Copy
Edit
  <style>
    body {
      padding: 20px;
      background-color: #f0f2f5;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    table {
      background-color: white;
    }
  </style>
Internal CSS to style the body, heading, and table background.

html
Copy
Edit
</head>
Ends the head section.

html
Copy
Edit
<body>
Starts the body of the webpage — this is where visible content goes.

html
Copy
Edit
  <h2>TY Time Table - Dynamic</h2>
A heading in the center at the top.

html
Copy
Edit
  <div class="container mb-4">
A Bootstrap container with some margin at the bottom (mb-4).

👇 Input fields for user to enter data:
html
Copy
Edit
    <div class="row g-2">
Creates a Bootstrap row with gap between columns.

html
Copy
Edit
      <div class="col-md-3">
        <input type="text" id="day" class="form-control" placeholder="Day (e.g. Monday)">
      </div>
A text input for the day, with ID day so we can access it in JS.

html
Copy
Edit
      <div class="col-md-3">
        <input type="text" id="time" class="form-control" placeholder="Time Slot (e.g. 9-10)">
      </div>
Input for the time slot.

html
Copy
Edit
      <div class="col-md-3">
        <input type="text" id="subject" class="form-control" placeholder="Subject Name">
      </div>
Input for subject name.

html
Copy
Edit
      <div class="col-md-2">
        <input type="text" id="faculty" class="form-control" placeholder="Faculty Initials">
      </div>
Input for faculty initials.

html
Copy
Edit
      <div class="col-md-1">
        <button onclick="addRow()" class="btn btn-primary w-100">Add</button>
      </div>
A button that calls the addRow() function when clicked.

📄 Table for displaying timetable:
html
Copy
Edit
  <div class="container">
    <table class="table table-bordered table-striped" id="timetable">
Creates a Bootstrap table with borders and striped rows. Also gives it ID timetable.

html
Copy
Edit
      <thead class="table-dark">
        <tr>
          <th>Day</th>
          <th>Time Slot</th>
          <th>Subject Name</th>
          <th>Faculty Initials</th>
        </tr>
      </thead>
Table header row with column names.

html
Copy
Edit
      <tbody>
        <!-- Dynamic rows will appear here -->
      </tbody>
    </table>
  </div>
Empty <tbody> where rows will be added by JavaScript.

🧠 JavaScript for Adding Rows
html
Copy
Edit
  <script>
    function addRow() {
Starts a JS function called addRow().

js
Copy
Edit
      let day = document.getElementById("day").value;
      let time = document.getElementById("time").value;
      let subject = document.getElementById("subject").value;
      let faculty = document.getElementById("faculty").value;
Gets the values entered by the user in all four input fields.

js
Copy
Edit
      if (day && time && subject && faculty) {
Checks if all fields are filled. If not, we skip adding.

js
Copy
Edit
        let table = document.getElementById("timetable").getElementsByTagName('tbody')[0];
Finds the <tbody> inside the timetable table.

js
Copy
Edit
        let newRow = table.insertRow();
Inserts a new empty row.

js
Copy
Edit
        newRow.insertCell(0).innerText = day;
        newRow.insertCell(1).innerText = time;
        newRow.insertCell(2).innerText = subject;
        newRow.insertCell(3).innerText = faculty;
Adds 4 cells to the row and fills them with user data.

js
Copy
Edit
        // Clear inputs
        document.getElementById("day").value = "";
        document.getElementById("time").value = "";
        document.getElementById("subject").value = "";
        document.getElementById("faculty").value = "";
Clears the input boxes after adding the row.

js
Copy
Edit
      } else {
        alert("Please fill all fields");
      }
    }
  </script>
If any field is empty, show an alert asking user to fill all fields.

html
Copy
Edit
</body>
</html>
Closes the body and HTML document.