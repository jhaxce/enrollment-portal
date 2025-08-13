let container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

setTimeout(() => {
	container.classList.add('sign-in')
}, 200)

// JavaScript code to handle form submissions and display the success messages

// Function to handle the sign up form submission
function handleSignupFormSubmit(event) {
  event.preventDefault(); // Prevent the default form submission

  // Get the form data
  var form = event.target;
  var formData = new FormData(form);

  // Make an AJAX request to the PHP script for sign up
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'signup.php', true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      var response = xhr.responseText;
      // Update the message element for sign up with the response
      document.getElementById('signupMessage').innerHTML = response;

      // If sign up is successful, update the sign-in message as well
      if (response.includes('<h4 style=\'color: #2c7134;\'>...</h4>')) {
				// Toggle to sign-in form
				toggle();

        document.getElementById('signinMessage').innerHTML = "<h4 style='color: #2c7134;'>Account created successfully!</h4>";

      }
    }
  };
  xhr.send(formData);
}

function handleSigninFormSubmit(event) {
  event.preventDefault(); // Prevent the default form submission

  // Get the form data
  var form = event.target;
  var formData = new FormData(form);

  // Make an AJAX request to the PHP script for sign up
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'signin.php', true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      var response = xhr.responseText;
      try {
        var jsonData = JSON.parse(response);
        if (jsonData.redirect) {
          // Redirect to the specified URL
          window.location.href = jsonData.redirect;
        } else {
          // Update the message element with the response
          document.getElementById('signinMessage').innerHTML = jsonData.message;
        }
      } catch (error) {
        // Error occurred while parsing JSON response
        console.error(error);
      }
    }
  };
  xhr.send(formData);
}

// Add event listeners to the form submit buttons
var signupForm = document.getElementById('signupForm');
var signinForm = document.getElementById('signinForm');

signupForm.addEventListener('submit', handleSignupFormSubmit);
signinForm.addEventListener('submit', handleSigninFormSubmit);

function toggleForgotMessage() {
	var message = document.getElementById("forgotPasswordMsg");
	message.classList.toggle("active");
}