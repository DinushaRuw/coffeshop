<?php
// Initialize variables to store form data and errors
$firstname = $lastname = $nic = $phone = $gender = $address = $email = "";
$errors = [];

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $firstName = htmlspecialchars(trim($_POST["first_name"]));
    $lastName = htmlspecialchars(trim($_POST["last_name"]));
    $nic = htmlspecialchars(trim($_POST["nic"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $gender = htmlspecialchars(trim($_POST["gender"]));
    $address = htmlspecialchars(trim($_POST["Address"]));
    $email = htmlspecialchars(trim($_POST["email"]));

    // Simple validation
    if (empty($firstName) || empty($lastName) || empty($nic) || empty($phone) || empty($gender) || empty($address) || empty($email)) {
        $errors[] = "All fields are required.";
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = "Invalid email format.";
    }

    // If no errors, process data (e.g., save to database)
    if (empty($errors)) {
        // For demonstration, we'll just show the data
        echo "<h2>Registration Successful</h2>";
        echo "<p>First Name: $firstName</p>";
        echo "<p>Last Name: $lastName</p>";
        echo "<p>NIC: $nic</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Address: $address</p>";
        echo "<p>Email: $email</p>";
        // You can add code here to save data to a database
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Order Online</header>
            <form id="registrationForm" method="post" onsubmit="return validateForm();">
                <div class="field input">
                    <label for="first name">First Name</label>    
                    <input type="text" name="first name" id="first name" value="<?php echo htmlspecialchars($firstName); ?>" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="last Name">Last Name</label>    
                    <input type="text" name="last Name" id="last Name" value="<?php echo htmlspecialchars($lastName); ?>" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="nic">NIC</label>    
                    <input type="text" name="nic" id="nic" value="<?php echo htmlspecialchars($nic); ?>" required>
                </div>
                <div class="field input">
                    <label for="phone">Phone Number</label>    
                    <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
                </div>
                <div class="field input">
                    <label for="gender">Gender</label>    
                    <input type="text" name="gender" id="gender" value="<?php echo htmlspecialchars($gender); ?>" required>
                </div>
                <div class="field input">
                    <label for="Address">Address</label>    
                    <input type="text" name="Address" id="Address" value="<?php echo htmlspecialchars($address); ?>" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>    
                    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <div class="field">    
                    <input type="submit" class="btn" name="submit" value="Submit">
                </div>
                <div class="links">
                    <!-- Links or additional content can go here -->
                </div>
                <?php
                // Display errors if there are any
                if (!empty($errors)) {
                    echo '<div class="errors">';
                    foreach ($errors as $error) {
                        echo '<p>' . htmlspecialchars($error) . '</p>';
                    }
                    echo '</div>';
                }
                ?>
            </form>
        </div>
    </div>
    <script src="form-validation.js"></script>
</body>
</html>
