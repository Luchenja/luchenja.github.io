<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">

<div class="login-container">
    <form class="form" action="process-login.php" method="post">
        <h2 class="heading">Login</h2>

        <!-- Display error message if available -->
        <?php if (isset($_GET['error'])): ?>
            <p class="error-message"><?php echo $_GET['error']; ?></p>
        <?php endif; ?>

        <label class="label" for="email">Email:</label>
        <input class="input" type="email" name="email" required>

        <label class="label" for="password">Password:</label>
        <input class="input" type="password" name="password" required>

        <button class="button" type="submit" name="submit">Login</button>

        <p class="paragraph">Don't have an account? <a class="link" href="registration.php">Register</a></p>
    </form>
</div>

</body>
</html>
