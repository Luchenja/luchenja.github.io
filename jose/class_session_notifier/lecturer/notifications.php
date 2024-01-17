<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard.html</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="dashboard-container" id="dashboard">
        <div class="dashboard-small">
            <div class="dashboard-img">
                <img src="../img/profile.png" alt="profile"  id="img">
            </div>
            <div class="personal-info extra" >
                <b><a href="personal.php" >Personal Information</a></b>
            </div>
            <div class="contact-saved extra" >
                <b><a href="timetablenot.php">Time table $ Notifications</a></b>
            </div>
            <div class="request extra" >
                <b><a href="#">Log out</a></b>
            </div>
        </div>
        <div class="dashboard-large">
            <div class="dashboard-sub-large">
                <div class="dashboard-heading">
                    <h2 id="hoverTrigger">Home</h2>
                </div>
                <div class="heading-img">
                    <img src="../img/profile.png" alt="profile" style="height: 40px;">
                </div>
                <div class="dashboard-content">

                <form action="../logics/send-notification.php"  method="post">
                    <h4>Confirm your presence </h4>
                    <label for="notification">Enter your message here</label>
                    <textarea name="notification" id="notification" cols="30" rows="10"></textarea>

                    <p>Not available today ? leave a text here</p>

                    <label for="response"></label>
                    <textarea name="response" id="response" cols="30" rows="10"></textarea>

                    <input type="submit" name="submit" value="confirm">
                </form>
                </div>
            </div>
    
        </div>
    </div>
</body>
</html>