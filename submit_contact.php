<?php
$servername = "localhost";
$username = "redlinetraining";
$password = "E]MZ&F+g,H!Y";
$dbname = "redlinetraining_redline_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Insert data
$sql = "INSERT INTO contact_submissions (full_name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "
    <script>
        $(document).ready(function(){
            $('#successModal').modal('show');
        });
    </script>
    <div class='modal fade' id='successModal' tabindex='-1' aria-labelledby='successModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='successModalLabel'>Success!</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <p>Your message has been sent successfully!</p>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-primary' onclick='window.location.href=\"contact_us.php\";'>Okay</button>
                </div>
            </div>
        </div>
    </div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Redline Training Centre</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional Custom Styles (if you have a custom stylesheet) -->
    <link href="your_custom_styles.css" rel="stylesheet">

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Your contact form and other content -->

    <!-- Modal structure (Bootstrap modal) -->
    <div class='modal fade' id='successModal' tabindex='-1' aria-labelledby='successModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='successModalLabel'>Success!</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <p>Your message has been sent successfully!</p>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-primary' onclick='window.location.href=\"contact_us.php\";'>Okay</button>
                    <button type='button' class='btn btn-secondary' onclick='window.location.href=\"services.php\";'>Go to Services</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
