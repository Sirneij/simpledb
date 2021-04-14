<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="John Idogun">
    <title>Monitor | View registered users</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- main css -->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <?php
    try {
        // This script retrieves all the records from the users table.
        require('mysqli_connect.php'); // Connect to the database.
        // Make the query:
        // Nothing passed from user safe query                                                 #1
        $query = "SELECT CONCAT(last_name, ', ', first_name) AS name, ";
        $query .= "DATE_FORMAT(registration_date, '%M %d, %Y') AS ";
        $query .= "regdat FROM users ORDER BY registration_date ASC";
        $result = mysqli_query($db, $query); // Run the query.
        if ($result) { // If it ran OK, display the records.
            // Table header.  
            echo
            '<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date Registered</th>
            </tr>
        </thead>';

            echo '<tbody>';
            // Fetch and print all the records:  
            $con = 1;                                                  #3
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo '<tr>
                <th scope="row">' . $con . '</th>
                <td>' . $row['name'] . '</td>
                <td>' . $row['regdat'] . '</td>
                </tr>';
                $con++;
            }
            echo '</tbody>';
            echo '</table>';
            mysqli_free_result($result); // Free up the resources.
        } else { // If it did not run OK.
            // Error message:
            echo '<p class="error">The current users could not be retrieved. We apologize';
            echo ' for any inconvenience.</p>';
            // Debug message:
            echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
            exit;
        } // End of if ($result)
        mysqli_close($db); // Close the database connection.
    } catch (Exception $e) // We finally handle any problems here
    {
        print "An Exception occurred. Message: " . $e->getMessage();
        print "The system is busy please try later";
    } catch (Error $e) {
        print "An Error occurred. Message: " . $e->getMessage();
        print "The system is busy please try again later.";
    }
    ?>


    <?php include 'includes/footer.php'; ?>
</body>

</html>