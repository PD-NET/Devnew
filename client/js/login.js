document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();

        try {
            // Perform your login logic here, for example, checking username and password.
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            // Use AJAX to send the login data to the server
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "process_login.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        window.location.href = "index.php";
                    } else {
                        throw new Error(response.message);
                    }
                }
            };
            const data = "username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password);
            xhr.send(data);
        } catch (error) {
            // Handle exceptions here
            console.error(error.message);
            alert("An error occurred during login. Please try again.");
        }
    });
});
