<?php
// Xiriirka database
include 'conn.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admission";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Xiriirka wuu fashilmay: " . $conn->connect_error);
}

// Hubi in form la diray
if (isset($_POST['submit'])) {
    // Qaado xogta
    $magac = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $school = mysqli_real_escape_string($conn, $_POST['schol']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);

    // Ku dar xogta database
    $sql = "INSERT INTO student (fullname, email, schol, phone, faculty)
            VALUES ('$magac', '$email', '$school', '$phone', '$faculty')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Xogta si guul ah ayaa loo keydiyay!";
    } else {
        echo "❌ Error: " . $conn->error;
    }

    $conn->close();
}
?>
