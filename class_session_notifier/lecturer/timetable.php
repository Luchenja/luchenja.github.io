<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Timetable</title>
    <style>
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
            background-color: #f2f2f2; /* Light gray background for headers */
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
    <h2>Weekly Timetable</h2>
    <table>
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
</body>
</html>
