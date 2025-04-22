function showAlert() {
    alert("Hello! Welcome to the Human Lifetime and Time of Day Program.");
  }
  
  function calculateAverageLifetime() {
    const averageLifeExpectancy = 72; 
    const weeksInYear = 52; 
    const averageWeeks = averageLifeExpectancy * weeksInYear; 
    return averageWeeks;
  }
  
  // Get the current time of the day (morning, afternoon, night)
  function getTimeOfDay() {
    const hours = new Date().getHours(); // Get current hour
  
    if (hours >= 6 && hours < 12) {
      return "Good Morning!";
    } else if (hours >= 12 && hours < 18) {
      return "Good Afternoon!";
    } else {
      return "Good Night!";
    }
  }
  
  // Store a string in a variable
  const greeting = "Welcome to the Human Lifetime and Time of Day Program!";
  
  // Update the page with the calculated data
  window.onload = function() {
    // Calculate and display the average weeks in a human lifetime
    const lifetimeInWeeks = calculateAverageLifetime();
    document.getElementById('average-lifetime').textContent = `The average human lifetime in weeks is: ${lifetimeInWeeks} weeks.`;
  
    // Display the time of day message
    const timeMessage = getTimeOfDay();
    document.getElementById('time-of-day').textContent = timeMessage;
  
    // Log the greeting string to the console
    console.log(greeting);
  }
  