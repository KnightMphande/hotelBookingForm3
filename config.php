<?php
/*
 * Configuration for database connection
 */

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "hotelbookingform"; 
?>

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

                $query = mysql_query("SELECT * FROM users WHERE firstname='$fname' ");
                $result = mysqli_query($conn, $query);
                if(mysql_num_rows($query) > 0 )
                {
                    echo 'Username already exists';
                }else{
        
                    if(!mysqli_query($conn, 'hotelbookingForm'))
                    {
                        echo 'Database not selected';
                    }
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $sql = "INSERT INTO users(name, surname) VALUES ( \"$fname\", \"$lname\")";
                    if(!mysqli_query($conn, $sql) )
                    {
                        echo 'Not inserted';
                    }else{
                        echo 'Inserted';
                    }
                }
                mysqli_close($conn);
            }
    }
?>