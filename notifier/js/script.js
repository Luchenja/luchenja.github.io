$(document).ready(function() {
    // Event listener for the login form submission
    $("#loginBtn").click(function() {
        var username = $("#username").val();
        var password = $("#password").val();

        // Send a request to a PHP script for user authentication
        $.ajax({
            type: "POST",
            url: "authenticate_user.php", // Replace with your PHP script URL
            data: { username: username, password: password },
            success: function(response) {
                if (response === "success") {
                    alert("Login successful!");
                    location.reload(); // Reload the page after login
                } else {
                    alert("Invalid credentials. Please try again.");
                }
            },
            error: function(error) {
                console.error(error); // Log any errors
                alert("Error authenticating user.");
            }
        });
    });

    // Event listener for the notification form submission
    $("#notificationForm").submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get the value from the input field
        var message = $("#message").val();

        // Send a request to a PHP script to record the message and timestamp
        $.ajax({
            type: "POST",
            url: "record_notification.php", // Replace with your PHP script URL
            data: {
                message: message,
                timestamp: new Date().toISOString()
            },
            success: function(response) {
                console.log(response); // Log the response from the server
                alert("Notification sent and message recorded!");
            },
            error: function(error) {
                console.error(error); // Log any errors
                alert("Error sending notification!");
            }
        });
    });
});