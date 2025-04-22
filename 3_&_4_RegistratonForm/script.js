// validation.js

function validateForm() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;
    let confirm = document.getElementById("confirm").value;
    let gender = document.querySelector('input[name="gender"]:checked');
    let terms = document.getElementById("terms").checked;
  
    if (name === "") {
      alert("Please enter your name.");
      return false;
    }
  
    let namePattern = /^[A-Za-z\s]+$/;
    if (!namePattern.test(name)) {
      alert("Name should only contain letters and spaces.");
      return false;
    }
  
    if (email === "" || password === "" || confirm === "") {
      alert("Please fill in all fields.");
      return false;
    }
  
    if (!email.includes("@") || !email.endsWith(".com")) {
      alert("Please enter a valid email address.");
      return false;
    }
  
    if (password.length < 6) {
      alert("Password should be at least 6 characters.");
      return false;
    }
  
    if (password !== confirm) {
      alert("Passwords do not match.");
      return false;
    }
  
    if (!gender) {
      alert("Please select your gender.");
      return false;
    }
  
    if (!terms) {
      alert("You must accept the terms and conditions.");
      return false;
    }
  
    alert("Registration Successful!");
    return true;
  }
  