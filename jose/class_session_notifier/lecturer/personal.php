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

                        <div class="container-color">
                                <div class="personal-container">
                                    <div class="personal-heading">
                                        <h2> Personal Account Information</h2>
                                    </div>
                                        <hr>
                                                <div class="contact-card">
                                                    <div class="contact-abouts">
                                                        <p><b>NAME:</b></p>
                                                        <p><b>PHONE:</b></p>
                                                        <p><b>EMAIL:</b></p>
                                                    </div>
                                                    <div class="contact-img">
                                                        <img src="../img/profile.png" alt="profile" style="height: 150px;">
                                                    </div>
                                                </div>
                                                
                                        <hr>
                                </div>
                        </div>
                </div>
            </div>
    
        </div>
    </div>
</body>
</html>