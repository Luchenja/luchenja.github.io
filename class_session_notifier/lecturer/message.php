<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Sender</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h2>Notification Sender</h2>

    <form id="notificationForm">
        <label for="message">Enter your message:</label>
        <input type="text" id="message" name="message" required>
        <button type="button" id="sendNotificationBtn">Send Notification</button>
    </form>

    <script>
        $(document).ready(function() {
            // Event listener for the button click
            $("#sendNotificationBtn").click(function() {
                // Get the message from the form
                var message = $("#message").val();

                // Send a request to a PHP script to record the notification time and message
                $.ajax({
                    type: "POST",
                    url: "record_notification.php", // Replace with your PHP script URL
                    data: { 
                        timestamp: new Date().toISOString(),
                        message: message
                    },
                    success: function(response) {
                        console.log(response); // Log the response from the server
                        alert("Notification sent and time recorded!");
                    },
                    error: function(error) {
                        console.error(error); // Log any errors
                        alert("Error sending notification!");
                    }
                });
            });
        });
    </script>
</body>
</html>
