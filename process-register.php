<?php
//database connection
require ('dbConnection.php'); 
//Validate form data
$errors = array();

//apple id
if (empty($_POST['apple_id'])) {
    $errors[] = "Apple ID is required";
} else {
    $apple_id = intval($_POST['apple_id']);              
}

//Year of planting
if (empty($_POST['yop'])) {
    $errors[] = "Year of planting is required";
} else {
    $yop = intval($_POST['yop']);          
}

//Breed
if (empty($_POST['breed'])) {
    $errors[] = "Breed is required";
} else {
    $breed = mysqli_real_escape_string($conn, $_POST['breed']);            
}

//Apple row
if (empty($_POST['apple_row'])) {
    $errors[] = "Apple row is required";
} else {
    $apple_row = intval($_POST['apple_row']);          
}

//Apple column
if (empty($_POST['apple_column'])) {
    $errors[] = "Apple column is required";
} else {
    $apple_column = intval($_POST['apple_column']);          
}


if (empty($_POST['latitude'])) {
    $errors[] = "Latitude is required";
} else {
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);            
}

//Longitude
if (empty($_POST['longitude'])) {
    $errors[] = "Longitude is required";
} else {
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);            
}
            

// If there are errors, display them and stop further execution
if (!empty($errors)) {
    foreach ($errors as $error){
        echo $error. "<br>";
    }
    exit;
}
//create a SQL query using prepared statementsto insert the data into the database table
$sql = "INSERT INTO apples (apple_id, yop, breed, apple_row, apple_column, latitude, longitude)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "iississ", $apple_id, $yop, $breed, $apple_row, $apple_column, $latitude, $longitude);

//Execute the prepared statement
if (mysqli_stmt_execute($stmt)) {
    echo "Registration Successful!";
    header("Location: register-thanks.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>
