
<html>
<body>
<?php
 

$conn = new mysqli('localhost','root','');
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,"sample_db");
 
$sql="INSERT INTO contact(Name,Email,Subject,Message) VALUES ('$_POST[contactName]','$_POST[contactEmail]','$_POST[contactSubject]','$_POST[contactMessage]')";
 
if ($conn->query($sql) === TRUE) {
header("Location:http://localhost/final_website/mainpage.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
</body>
</html>
