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
                    <div class="profile">
                        <h3>Profile</h3>
                    </div>
                    <div class="lecture-body">
                        <div class="time-table">
                            <div class="time-table-heading">
                                <h3>TIME TABLE</h3>

                            </div>
                            <div class="time-table" style="height: 400px;">
                            <img src="../img/IT-Time.jpg" alt="" height="300px">
                            </div>
                        </div>
                        <div class="notifications">
                            <div class="confirmation">
                                <h2 class="confirmation-heading">confirm Session</h2>
                                <form action="../logics/send-message.php" method="POST">
                                    <label for="">Confirm Session(s):</label>
                                    <textarea name="session" id="" cols="20" rows="5"></textarea>

                                    <input type="submit" name="submit" value="Confirm">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</body>
</html>