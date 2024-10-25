<?php
$Kecamatan = $_POST['Kecamatan'];
$Longtitude = $_POST['Longtitude'];
$Latitude = $_POST['Latitude'];
$Luas = $_POST['Luas'];
$JumlahPenduduk = $_POST['JumlahPenduduk'];

// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO penduduk (Kecamatan, Longtitude, Latitude, Luas, JumlahPenduduk)
VALUES ('$Kecamatan', $Longtitude, $Latitude, $Luas, $JumlahPenduduk)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//header("Location: index.html");
//exit;
?>