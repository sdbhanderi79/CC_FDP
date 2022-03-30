<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="submit" Value="Connect to MySQL Server & Insert data in a table">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "sdbhanderimysqlserver.mysql.database.azure.com";
$username = "sdbhanderi";
$password = "Mahant@2105M";
$dbname = "mydb";
  
  // Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
  
//  $con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL); mysqli_real_connect($conn, "sdbhanderimysqlserver.mysql.database.azure.com", "sdbhanderi", "Mahant@2105M", "mydb", 3306, MYSQLI_CLIENT_SSL);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
$sql = "INSERT INTO student VALUES (4, 'Savani', 'Shivraj', '86565');";
$sql .= "INSERT INTO Student VALUES (7, 'twinkal', 'karad', '55');";
$sql .= "INSERT INTO Student VALUES (8, 'pooja', 'karad', '55');";
$sql .= "INSERT INTO Student VALUES (9, 'komal', 'abad', '55');";
$sql .= "INSERT INTO Student VALUES (10, 'shreya', 'abad', '55');";
$sql .= "INSERT INTO Student VALUES (11, 'mayuri', 'avasari', '55')";

  
  
  if ($conn->multi_query($sql) === TRUE) {
    echo "New records inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>

</body>
  
  </html>
