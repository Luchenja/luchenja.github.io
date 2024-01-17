<?php
include'../logics/view-courses.php';
include'../logics/view-course.php';
include'../logics/send-notification.php';
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

                    <div class="lecture-boo">
                        <div class="tim-table">
                            <div class="tim-table-heading">
                                <h4 class="center">COURSES LIST</h4>
                                <!-- fix tis section-->
                                <div class="course">
                                    <?php
                                    $i=1;
                                    foreach($courses as $course){
                                        ?>
                                            <div class="1"><p ><?=$course['coursename']?></p></div>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                    
                                    <div class="2">
                                        <a href="course-timetable.php?id=<?=$course['id']?>">VIEW</a>
                                        <a href="../logics/send-notification.php?id=<?=$course['id']?>">NOTIFY</a>

                                    </div>
                                    


                                
                                </div>
                            </div>
                        </div>
                        <div class="notifications">
                            <h4 class="center">TIME TABLE</h4>

                            <div class="time-content">
                            <?php
                                if (count($results) > 0) {
                                    $major = $results[0];
                                    $imagePath = '../logics/uploads/' . $major['timetableImage'];
                                    ?>
                                    <img src="<?php echo $imagePath; ?>" alt="Timetable Image">
                                    <?php
                                }
                            ?>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</body>
</html>