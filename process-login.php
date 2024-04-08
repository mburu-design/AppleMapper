<?php
//Start session
session_start();
// //check if user i already logged in , then redirect to the new page
// if (isset($_SESSION['email'])){
//     header("Location: register-page.php");
//     exit;
// }

//Check if the form has been submitted 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Connect to database.
        require 'dbConnection.php';
        //check if form is submitted
        if(isset($_POST['login'])){
            //Retrieve form data
            $email = $_POST['email'];
            $password = $_POST['password'];

            //email validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'You forgot to enter your email';
                echo'or the email format is incorrect';
            } else {
            //Validate the password

                if (empty($password)) {
                    echo 'You forgot to enter your password';

                } else{
                    //Query to check email and password
                    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
                    $result = $conn-> query($query);

                    // Check if the record is in database
                    if ($result->num_rows > 0) {
                        //if one database row  matches the input start the session
                        $_SESSION['email'] = $email;
                        
                        //Make the browser load the register page
                        header("Location:admin-view-apples.php");
                        exit();
                        
                    } else {//The email and password are not in database
                        echo'Invalid email or password';
                    
                    }
                        
                 }
            }
        
        }
    }

?>
