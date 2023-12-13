<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2 class="h2">Register User Here</h2>
<form action="create-contact.php" method="post">
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" required>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="phone_number">Phone Number:</label>
    <input type="tel" name="phone_number" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" required>

    <button type="submit" name="submit">Register</button>
</form>

</body>
</html>
