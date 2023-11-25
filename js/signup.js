document.addEventListener("DOMContentLoaded", function () {
    const signupForm = document.getElementById("signupForm");

    signupForm.addEventListener("submit", function (e) {
        e.preventDefault();

        try {
            const signupUsername = document.getElementById("new-username").value;
            const signupEmail = document.getElementById("new-email").value;
            const signupPassword = document.getElementById("new-password").value;

            // Check if the user already exists
            if (userAlreadyExists(signupUsername)) {
                throw new Error("User already exists. Please choose a different username.");
            }

            // Continue with signup logic

            if (signupUsername.trim() === '' || signupEmail.trim() === '' || signupPassword.trim() === '') {
                throw new Error("All fields must be filled out.");
            }

            // Additional validation and signup logic...

            // If signup is successful, you can redirect or perform other actions
            console.log("Signup successful!");
            redirectToDashboard(); // Redirect to the dashboard after successful signup
        } catch (error) {
            // Handle exceptions here
            console.error("Signup error:", error.message);
            alert(error.message);
        }
    });

    // Placeholder function to check if a user already exists
    function userAlreadyExists(username) {
        // Replace this with your actual logic (e.g., querying a database)
        // Return true if the user already exists, otherwise return false
        // For example, assuming you have a list of existing usernames in an array:
        const existingUsernames = ["user1", "user2", "user3"];
        return existingUsernames.includes(username);
    }

    // Function to redirect to the dashboard
    function redirectToDashboard() {
        window.location.href = "index.html";
    }
});
