<?php
include 'Cors.php';
$user = $_GET['user'];
$pass = $_GET['pass'];

$conn = new mysqli("localhost", "root", "", "ReactPhp");
if ($conn == TRUE) {
    $sql = "SELECT * from adminauth where user='$user' && pass='$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $z = array(
                "id" => $row["aid"],
                "Name" => $row["user"],
                "Pass" => $row["pass"]
            );
            echo json_encode($z);
        }
    } else {
        echo "Not matched	";
    }
} else {
    echo "Not Connected";
}




<<<<<<< HEAD
<<<<<<< HEAD
=======
mysqli_close($conn);
>>>>>>> 1a3a825b00cc3a1286d2433f4b8ae25d290b5000
=======
mysqli_close($conn);
>>>>>>> 1a3a825b00cc3a1286d2433f4b8ae25d290b5000
