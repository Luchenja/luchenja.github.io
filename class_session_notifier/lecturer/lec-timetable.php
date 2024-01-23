<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard.html</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
          .table-container {
            margin: 20px; /* Add margin for spacing */
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden; /* Clear floats within the container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
            color: green; /* Light gray background for headers */
        }

        /* Zebra striping */
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Light background for even rows */
        }
        .button {
            background-color: #4CAF50; /* Green background color */
            color: white; /* White text color */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px; /* Add margin to the right */
            text-decoration: none; /* Remove default link underline */
            display: inline-block;
        }

        .button-right {
            float: right; /* Align the button to the right */
        }
    </style>
</head>
<body>
    <div class="dashboard-container" id="dashboard">
        <div class="dashboard-small">
            <div class="dashboard-img">
                <img src="../img/profile.png" alt="profile"  id="img">
            </div>
            <div class="personal-info extra" >
                <b><a href="lect-dash.php" >Home</a></b>
            </div>
            <div class="contact-saved extra" >
                <b><a href="lec-timetable.php">Time Table</a></b>
            </div>
            <div class="request extra">
                <b><a href="#">Application status</a></b>
            </div>
            <div class="request extra" >
                <b><a href="#">Notifications</a></b>
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
                        <div class="table">
                        <table style="width:100%;">
                        <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                        </tr>

                        <?php
                        // Define your classes and times
                        $classes = array(
                            "9:00 AM - 10:00 AM" => array("Monday" => "Math", "Tuesday" => "English", "Wednesday" => "Science"),
                            "10:00 AM - 11:00 AM" => array("Monday" => "Physics", "Wednesday" => "Chemistry"),
                            "11:00 AM - 12:00 PM" => array("Tuesday" => "Biology", "Thursday" => "History"),
                            // Add more classes and times as needed
                        );

                        // Define days
                        $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

                        // Loop through each time slot
                        foreach ($classes as $timeSlot => $dayClass) {
                            echo "<tr>";
                            echo "<td>$timeSlot</td>";

                            // Loop through each day
                            foreach ($days as $day) {
                                echo "<td>";

                                // Check if there is a class scheduled for this time and day
                                if (isset($dayClass[$day])) {
                                    echo "<strong>{$dayClass[$day]}</strong><br>";
                                } else {
                                    echo "No class";
                                }

                                echo "</td>";
                            }

                            echo "</tr>";
                        }
                        ?>
    </table>
    <a href="message.php" class="button button-right">Link Button</a>
                        </div>
                       
                    </div>
                    <div class="notifications">
                            <div class="confirmation">
                                <h2 class="confirmation-heading">confirm Session</h2>
                                <form action="">
                                    <label for="">Confirm Session(s):</label>
                                    <textarea name="sessions" id="" cols="20" rows="5"></textarea>

                                    <p>Not available? , kindly leave a note </p>

                                    <label for="">Absence Note:</label>
                                    <textarea name="nosessions" id="" cols="20" rows="5"></textarea>

                                    <input type="submit" name="submit" value="Confirm">

                                </form>
                            </div>
                        </div>
                </div>
            </div>
    
        </div>
    </div>
</body>
</html>