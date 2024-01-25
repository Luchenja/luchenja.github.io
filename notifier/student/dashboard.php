<?php
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        // Redirect to the login page or handle unauthorized access
        header('Location: ../login.php');
        exit();
    }
    // Retrieve the user ID
    $userID = $_SESSION['user_id'];
    include'../logics/view-message.php';
?>
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
            <div class="request extra" >
                <b><a href="dashboard.php">Notifications</a></b>
            </div>
            <div class="request extra" >
                <b><a href="../logics/logout.php">Logout</a></b>
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
                    <div class="profile-body">
                        <div class="student-info">
                            <div class="student-name">
                                <h2>Lucas Joseph Nestory</h2>
                            </div>
                            <div class="student-attributes">
                                <p class="border-bottom"><b>Gender:</b>Male</p>
                                <p class="border-bottom"><b>Course:</b>Information Technology</p>
                                <p class="border-bottom"><b>Academic Year:</b>Third Year</p>
                                
                            </div>
                        </div>
                        <div class="application">
                            <div class="application-nav">
                                <ul>
                                    <li><a href="#"></a>Notifications</li>
                                </ul>
                            </div>
                            <div class="messages">
                                <div class="display">
                                    <?php
                                    $i=1;
                                    foreach($students as $student){
                                        ?>
                                        <?=$student['session']?>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="action">
                                    <a href="../logics/delete-notification.php?id=<?=$student['id']?>">Delete</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</body>
</html>