 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db_nm = "software";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_nm);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*
echo '<script language="javascript">';
echo 'alert("Connection Successful!! Enjoy ShareKaro :)")';
echo '</script>';
*/


?> 
