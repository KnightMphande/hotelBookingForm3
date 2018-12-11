<?php
/*
 * Configuration for database connection
 */

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "hotelbookingform"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hotelBookingForm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>

<?php 
    function connect_db() {
        global $host, $username, $password, $dbname;
    
        $conn = mysqli_connect($host, $username, $password, $dbname);
    
        if (!$conn) {
            return false;
        }
    
        return $conn;
    }
?>

<?php 
    function add_user() { 
        if(isset($_POST['submit']) )
            {
                $conn = connect_db();
                if(!$conn) {
                    return false;
                }

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $sql = "SELECT * FROM users WHERE name = '$fname' AND surname = '$lname' ";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0 )
                {
                    echo '<h1 style="color: white;">'. 'Username already exists' .'</h1>';
                }else{
        
                    if(!mysqli_query($conn, $sql))
                    {
                        echo '<h1 style="color: white;">'. 'Database not selected' .'</h1>';
                    }
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $sql = "INSERT INTO users(name, surname) VALUES ( \"$fname\", \"$lname\")";
                    if(!mysqli_query($conn, $sql) )
                    {
                        echo '<h1 style="color: white;">'. 'Username not inserted' .'</h1>';
                    }else{
                        echo '<h1 style="color: white;">'. 'Insert username successful' .'</h1>';
                    }
                }
                mysqli_close($conn);
            }
    }
?>
</body>
</html>
