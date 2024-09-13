
<!DOCTYPE html>
<html>
<head>
    <title>Insert Page</title>
</head>
<body>
    <center>
        <?php
        // Establish a connection to the database
        $conn = mysqli_connect("localhost", "root", "", "shoponline");

        // Check if the connection was successful
        if (!$conn) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Collect data from the form
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $nic = $_REQUEST['nic'];
        $phone = $_REQUEST['phone'];
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        $created_at = $_REQUEST['created_at'];

        // Correct SQL query to explicitly specify column names
        $sql = "INSERT INTO users (first_name, last_name, nic, phone, gender, address, email, created_at) 
                VALUES ('$first_name', '$last_name', '$nic', '$phone', '$gender', '$address', '$email', '$created_at')";

        // Execute the query and check if successful
        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully. Please browse your localhost PHPMyAdmin to view the updated data.</h3>";
            echo nl2br("\n$first_name\n $last_name\n $nic\n $phone\n $gender\n $address\n $email\n $created_at");
        } else {
            echo "ERROR: Sorry! $sql. " . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>


