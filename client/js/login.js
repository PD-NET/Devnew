document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.getElementById("loginForm");

  loginForm.addEventListener("submit", function (e) {
      e.preventDefault();

      try {
          // Perform your login logic here, for example, checking username and password.
          const username = document.getElementById("username").value;
          const password = document.getElementById("password").value;

          // Replace this condition with your actual login validation
          if (username === "dsu" && password === "12345") {
              window.location.href = "index.html";
          } else {
              throw new Error("Invalid username or password. Please try again.");
          }
      } catch (error) {
          // Handle exceptions here
          console.error(error.message);
          alert("An error occurred during login. Please try again.");
      }
  });
});
