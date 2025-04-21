✅ HTML Section
html
Copy
Edit
<!DOCTYPE html>
<html lang="en">
This line tells the browser that the document is HTML5.

lang="en" means the language of the page is English.

html
Copy
Edit
<head>
  <meta charset="UTF-8">
  <title>Gmail Registration Form</title>
<meta charset="UTF-8"> ensures all characters (including emojis, special symbols) show properly.

<title> sets the title of the page (what shows on the browser tab).

html
Copy
Edit
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
This line links Bootstrap v5.3 CSS so we get nice UI without writing too much CSS.

html
Copy
Edit
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 500px;
      margin: 40px auto;
      padding: 30px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 25px;
    }
  </style>
</head>
This CSS makes the form centered, gives it padding, shadow, and a clean white background.

✅ Body Section (Form Design)
html
Copy
Edit
<body>
  <div class="form-container">
    <h2>Gmail Registration</h2>
Container with heading "Gmail Registration".

html
Copy
Edit
    <form onsubmit="return validateForm()">
When the form is submitted, the JavaScript function validateForm() will run.

If validateForm() returns false, form won't submit.

📄 Form Inputs
✅ Full Name
html
Copy
Edit
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" id="name" class="form-control" placeholder="Enter your name">
      </div>
Takes user's name input using a text field.

✅ Email
html
Copy
Edit
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" id="email" class="form-control" placeholder="Enter your email">
      </div>
Email input with placeholder.

✅ Password + Confirm Password
html
Copy
Edit
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Create password">
      </div>

      <div class="mb-3">
        <label for="confirm" class="form-label">Confirm Password</label>
        <input type="password" id="confirm" class="form-control" placeholder="Re-enter password">
      </div>
Two password fields to ensure user types correct password.

✅ Gender (Radio Buttons)
html
Copy
Edit
      <div class="mb-3">
        <label class="form-label">Gender</label><br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female" class="ms-2"> Female
      </div>
User must choose either Male or Female.

✅ Terms & Conditions (Checkbox)
html
Copy
Edit
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="terms">
        <label class="form-check-label" for="terms">I accept the terms and conditions</label>
      </div>
User must accept terms to continue.

✅ Submit Button
html
Copy
Edit
      <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
  </div>
Button that submits the form (only if validation passes).

✅ JavaScript Validation
javascript
Copy
Edit
<script>
  function validateForm() {
This function runs when the form is submitted.

javascript
Copy
Edit
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;
    let confirm = document.getElementById("confirm").value;
    let gender = document.querySelector('input[name="gender"]:checked');
    let terms = document.getElementById("terms").checked;
Fetching all the input values and saving them in variables.

javascript
Copy
Edit
    if (name === "") {
      alert("Please enter your name.");
      return false;
    }
Checks if name is empty.

javascript
Copy
Edit
    let namePattern = /^[A-Za-z\s]+$/;
    if (!namePattern.test(name)) {
      alert("Name should only contain letters and spaces.");
      return false;
    }
Regex to ensure name has only letters and spaces.

javascript
Copy
Edit
    if (email === "" || password === "" || confirm === "") {
      alert("Please fill in all fields.");
      return false;
    }
Checks if any field is left blank.

javascript
Copy
Edit
    if (!email.includes("@") || !email.endsWith(".com")) {
      alert("Please enter a valid email address.");
      return false;
    }
Basic check to ensure email contains @ and ends with .com.

javascript
Copy
Edit
    if (password.length < 6) {
      alert("Password should be at least 6 characters.");
      return false;
    }
Password must be minimum 6 characters.

javascript
Copy
Edit
    if (password !== confirm) {
      alert("Passwords do not match.");
      return false;
    }
Confirms both password fields match.

javascript
Copy
Edit
    if (!gender) {
      alert("Please select your gender.");
      return false;
    }

    if (!terms) {
      alert("You must accept the terms and conditions.");
      return false;
    }
Makes sure gender is selected and terms are checked.

javascript
Copy
Edit
    alert("Registration Successful!");
    return true;
  }
</script>
If everything is okay, shows success message and allows submission.