HTML Part:
1. HTML Structure:
html
Copy
Edit
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>: Declares the document type to HTML5.

<html lang="en">: The root element for the HTML document, with the lang attribute set to English.

html
Copy
Edit
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
<head>: Contains meta-information for the page.

<meta charset="UTF-8">: Defines the character encoding as UTF-8, which supports a wide range of characters.

<meta name="viewport" content="width=device-width, initial-scale=1.0">: Ensures the page is responsive by setting the width to the device’s width and initial zoom level to 1.

<title>Registration Form</title>: Sets the title of the page displayed in the browser's title bar or tab.

html
Copy
Edit
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
        }
        .container {
            width: 400px;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        label {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.2em;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .hide {
            display: none;
        }
        .success-message {
            color: green;
            text-align: center;
        }
    </style>
CSS Styling:

body: Centers the content vertically and horizontally using flexbox, sets a background color, and ensures no margin around the page.

.container: Styles the form container with width, padding, background color, border-radius, and box-shadow to give it a card-like appearance.

h1: Centers the title.

label: Applies font size and spacing to form labels.

input, textarea, and button: Ensures these elements span the full width of the container, with padding and consistent styling for a clean design.

.error: Defines styling for error messages in red.

.hide: A class used to hide elements (i.e., error messages).

.success-message: Styles the success message text in green and centers it.

html
Copy
Edit
</head>
<body>
Closes the head section and starts the body section.

2. Form Content:
html
Copy
Edit
<div class="container">
    <h1>Registration Form</h1>
    <form id="registrationForm">
The container div holds the entire form. Inside, the title (h1) reads "Registration Form".

The form element with id="registrationForm" defines the form. It holds various input fields.

html
Copy
Edit
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>
        <div id="firstnameError" class="error hide">First name is required!</div>
First Name Field:

label: Provides a description for the field.

input: Specifies that it's a text field with id="firstname" and name="firstname". The required attribute makes this field mandatory.

The div below the input will display an error message if the field is empty after submission. It is hidden by default using the hide class.

html
Copy
Edit
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>
        <div id="lastnameError" class="error hide">Last name is required!</div>
Last Name Field: Same as the first name field, but for the last name.

html
Copy
Edit
        <label for="organization">Organization:</label>
        <input type="text" id="organization" name="organization" required>
        <div id="organizationError" class="error hide">Organization is required!</div>
Organization Field: Same as previous fields but asks for the user's organization.

html
Copy
Edit
        <label for="hobbies">Hobbies (comma separated):</label>
        <textarea id="hobbies" name="hobbies" required></textarea>
        <div id="hobbiesError" class="error hide">Hobbies are required!</div>
Hobbies Field: This is a textarea input for the user's hobbies. It's also required, and an error message is displayed if left blank.

html
Copy
Edit
        <button type="submit">Submit</button>
    </form>
Submit Button: The button to submit the form.

html
Copy
Edit
    <div id="successMessage" class="success-message hide">
        <h2>Registration Successful!</h2>
        <p>First Name: <span id="displayFirstname"></span></p>
        <p>Last Name: <span id="displayLastname"></span></p>
        <p>Organization: <span id="displayOrganization"></span></p>
        <p>Hobbies: <span id="displayHobbies"></span></p>
    </div>
</div>
Success Message: A hidden div that will display a success message with the submitted details once the form is successfully validated. Each detail (first name, last name, organization, hobbies) is displayed in its own span.

3. JavaScript Code:
javascript
Copy
Edit
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();
Adds an event listener for the form submission. The event.preventDefault() stops the form from being submitted traditionally (i.e., reloading the page).

javascript
Copy
Edit
    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;
    const organization = document.getElementById('organization').value;
    const hobbies = document.getElementById('hobbies').value;
Retrieves the values of the firstname, lastname, organization, and hobbies fields.

javascript
Copy
Edit
    let isValid = true;
Initializes a variable isValid to keep track of whether all fields are valid.

javascript
Copy
Edit
    if (firstname === '') {
        document.getElementById('firstnameError').classList.remove('hide');
        isValid = false;
    } else {
        document.getElementById('firstnameError').classList.add('hide');
    }
Checks if the first name is empty. If so, it shows the error message by removing the hide class. If it is not empty, the error message is hidden.

javascript
Copy
Edit
    if (lastname === '') {
        document.getElementById('lastnameError').classList.remove('hide');
        isValid = false;
    } else {
        document.getElementById('lastnameError').classList.add('hide');
    }
Same logic for last name validation.

javascript
Copy
Edit
    if (organization === '') {
        document.getElementById('organizationError').classList.remove('hide');
        isValid = false;
    } else {
        document.getElementById('organizationError').classList.add('hide');
    }
Same logic for organization validation.

javascript
Copy
Edit
    if (hobbies === '') {
        document.getElementById('hobbiesError').classList.remove('hide');
        isValid = false;
    } else {
        document.getElementById('hobbiesError').classList.add('hide');
    }
Same logic for hobbies validation.

javascript
Copy
Edit
    if (isValid) {
        document.getElementById('registrationForm').classList.add('hide');
        document.getElementById('successMessage').classList.remove('hide');
        document.getElementById('displayFirstname').textContent = firstname;
        document.getElementById('displayLastname').textContent = lastname;
        document.getElementById('displayOrganization').textContent = organization;
        document.getElementById('displayHobbies').textContent = hobbies;
    }
});
If all fields are valid:

The form is hidden (hide class is added).

The success message is shown by removing the hide class.

The submitted details (first name, last name, organization, hobbies) are displayed in the successMessage div using the textContent property.

Summary:
This form includes:

Fields for first name, last name, organization, and hobbies.

Validation for each field to ensure it is filled out.

Error messages shown if any field is missing.

A success message displayed with the user's input upon successful form submission.