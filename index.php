<?php
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
$sql = "SELECT * FROM penduduk";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1px'><tr>
<th>Kecamatan</th>
<th>Longtitude</th>
<th>Latitude</th>
<th>Luas</th>
<th>JumlahPenduduk</th>
<th>Action<th>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Kecamatan"] . "</td><td>" .
            $row["Longtitude"] . "</td><td>" .
            $row["Latitude"] . "</td><td>" .
            $row["Luas"] . "</td><td align='right'>" .
            $row["JumlahPenduduk"] . "</td>
            <td><a href='delete.php?id=" . $row["id"] . "' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">Delete</a>
    </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>