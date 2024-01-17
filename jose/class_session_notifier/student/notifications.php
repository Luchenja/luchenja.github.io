<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

#notifications-container {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.notification {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #e0e0e0;
}

.notification h2 {
    margin: 0;
    color: #333;
}

.notification p {
    margin: 5px 0;
    color: #666;
}

    </style>
</head>
<body>
    <div id="notifications-container"></div>

    <script >
        document.addEventListener("DOMContentLoaded", function () {
    // Assuming you have a function to fetch notifications from the server
    fetchNotifications();
});

function fetchNotifications() {
    // Replace the following with your server-side code to fetch notifications
    // For example, if you're using AJAX, you might make a request to a server endpoint

    // Dummy data for demonstration
    const dummyNotifications = [
        { title: "Notification 1", message: "This is the first notification." },
        { title: "Notification 2", message: "Another notification for you." },
        // Add more notifications as needed
    ];

    displayNotifications(dummyNotifications);
}

function displayNotifications(notifications) {
    const container = document.getElementById("notifications-container");

    notifications.forEach(notification => {
        const notificationDiv = document.createElement("div");
        notificationDiv.classList.add("notification");

        const titleElement = document.createElement("h2");
        titleElement.textContent = notification.title;

        const messageElement = document.createElement("p");
        messageElement.textContent = notification.message;

        notificationDiv.appendChild(titleElement);
        notificationDiv.appendChild(messageElement);

        container.appendChild(notificationDiv);
    });
}

    </script>
</body>
</html>
