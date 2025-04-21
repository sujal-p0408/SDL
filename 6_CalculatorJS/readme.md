HTML Structure
html
Copy
Edit
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>: Declares the document type and version (HTML5).

<html lang="en">: Begins the HTML document, specifying the language as English (lang="en").

html
Copy
Edit
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Humanized Calculator</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <style>
<meta charset="UTF-8">: Specifies the character encoding (UTF-8) for the document.

<meta name="viewport" content="width=device-width, initial-scale=1.0">: Makes the page responsive to mobile devices by setting the viewport width to the device's width.

<title>Humanized Calculator</title>: Sets the title of the page that appears in the browser tab.

<link>: Includes the Google Fonts stylesheet for the "Roboto" font.

<style>: Contains the CSS for styling the page, which will be discussed next.

CSS Styles
css
Copy
Edit
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
*: A universal selector that targets all elements on the page.

margin: 0; padding: 0;: Resets default margins and padding applied by browsers.

box-sizing: border-box;: Ensures that the element’s padding and border are included in its total width and height.

css
Copy
Edit
body {
  font-family: 'Roboto', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color: red; /* Changed to red */
  color: #333;
}
font-family: 'Roboto', sans-serif;: Applies the "Roboto" font (from Google Fonts) to the body of the page.

display: flex;: Uses Flexbox layout to center content.

justify-content: center; align-items: center;: Centers content both horizontally and vertically.

min-height: 100vh;: Ensures the body takes up at least 100% of the viewport height.

background-color: red;: Sets the background color of the page to red.

color: #333;: Sets the text color to a dark gray.

css
Copy
Edit
.calculator {
  background-color: #fff;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
  width: 300px;
  text-align: center;
}
.calculator: Styles the container that holds the calculator.

background-color: #fff;: Sets the background color of the calculator to white.

padding: 20px;: Adds padding around the content inside the calculator.

border-radius: 15px;: Rounds the corners of the calculator container.

box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);: Adds a subtle shadow effect for depth.

width: 300px;: Sets the width of the calculator.

text-align: center;: Centers the text inside the calculator.

css
Copy
Edit
.calculator .display {
  font-size: 2.5em;
  margin-bottom: 20px;
  padding: 10px;
  background-color: #f1f1f1;
  border-radius: 10px;
  width: 100%;
  border: none;
  color: #555;
}
.calculator .display: Styles the display area of the calculator.

font-size: 2.5em;: Sets the font size of the text in the display.

margin-bottom: 20px;: Adds a 20px margin below the display.

padding: 10px;: Adds padding inside the display.

background-color: #f1f1f1;: Sets a light gray background color for the display.

border-radius: 10px;: Rounds the corners of the display.

width: 100%;: Makes the display span the entire width of its container.

border: none;: Removes any default borders.

color: #555;: Sets the text color to a medium gray.

css
Copy
Edit
.buttons {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
}
.buttons: Styles the container holding the calculator's buttons.

display: grid;: Uses CSS Grid to layout the buttons.

grid-template-columns: repeat(4, 1fr);: Creates 4 equal-width columns in the grid.

gap: 10px;: Adds a 10px gap between buttons.

css
Copy
Edit
.button {
  padding: 20px;
  font-size: 1.5em;
  background-color: #f1f1f1;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: all 0.2s ease;
  color: #555;
}
.button: Styles each individual button.

padding: 20px;: Adds padding inside the button.

font-size: 1.5em;: Sets the font size of the button text.

background-color: #f1f1f1;: Sets a light gray background for the button.

border: none;: Removes any default borders.

border-radius: 10px;: Rounds the corners of the button.

cursor: pointer;: Changes the mouse cursor to a pointer when hovering over a button.

transition: all 0.2s ease;: Adds a smooth transition for hover and active states.

color: #555;: Sets the text color to medium gray.

css
Copy
Edit
.button:hover {
  background-color: #f1d5d5;
}
.button:hover: Changes the button's background color when hovered to a light red.

css
Copy
Edit
.button:active {
  background-color: #d2a4a4;
}
.button:active: Changes the button's background color to a darker red when pressed.

css
Copy
Edit
.button:focus {
  outline: none;
}
.button:focus: Removes the outline when the button is focused (clicked).

css
Copy
Edit
.equal {
  background-color: #58cc58;
  color: white;
  grid-column: span 2;
}
.equal: Styles the "=" button.

background-color: #58cc58;: Sets a green background color.

color: white;: Sets the text color to white.

grid-column: span 2;: Makes the "=" button span across 2 grid columns.

css
Copy
Edit
.clear {
  background-color: #ff4c4c;
  color: white;
  grid-column: span 2;
}
.clear: Styles the "C" button.

background-color: #ff4c4c;: Sets a red background color.

color: white;: Sets the text color to white.

grid-column: span 2;: Makes the "C" button span across 2 grid columns.

JavaScript Logic
javascript
Copy
Edit
let display = document.getElementById('display');
let currentInput = '';
display: Selects the input field with the id display to display the calculator's output.

currentInput: Initializes an empty string to store the current input.

javascript
Copy
Edit
function appendNumber(number) {
  currentInput += number;
  display.value = currentInput;
}
appendNumber(number): Appends a number to the currentInput string and updates the display.

javascript
Copy
Edit
function appendOperator(operator) {
  currentInput += ` ${operator} `;
  display.value = currentInput;
}
appendOperator(operator): Appends an operator (e.g., +, -, etc.) to the currentInput string and updates the display.

javascript
Copy
Edit
function clearDisplay() {
  currentInput = '';
  display.value = '';
}
clearDisplay(): Clears the input by resetting currentInput to an empty string and clearing the display.

javascript
Copy
Edit
function calculateResult() {
  try {
    currentInput = eval(currentInput).toString();
    display.value = currentInput;
  } catch (e) {
    display.value = 'Error';
  }
}
calculateResult(): Uses JavaScript's eval() function to evaluate the current input as an arithmetic expression. If there's an error (e.g., invalid input), it catches the error and displays "Error" on the calculator.

Closing HTML Tags
html
Copy
Edit
</script>
</body>
</html>