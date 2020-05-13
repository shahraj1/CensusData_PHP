<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE dbSQL";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Create Player TABLE
$sql = "CREATE TABLE TPlayers (
intPlayerID 	INT(6)		UNSIGNED AUTO_INCREMENT 	PRIMARY KEY, 
strFirstName 	VARCHAR(30) NOT NULL,
strLastName 	VARCHAR(30) NOT NULL,
strAddress 		VARCHAR(50) NOT NULL,
strCity 		VARCHAR(50) NOT NULL,
strState		VARCHAR(50) NOT NULL,
strZipCode 		VARCHAR(50) NOT NULL
strEmailAddress VARCHAR(50) NOT NULL,
strPhoneNumber 	VARCHAR(50) NOT NULL,
intGroupID		INT(6) 		NOT NULL,
intGenderID		INT(6)		NOT NULL,
intShirtSizeID	INT(60) 	NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table TPlayers created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


// Create Group TABLE
$sql = "CREATE TABLE TGroups (
intGroupID		INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
strGroup		VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table TGroups created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}



// Create Gender Table
$sql = "CREATE TABLE TGenders (
intGenderID 	INT(6) 		UNSIGNED AUTO_INCREMENT 	PRIMARY KEY, 
strGender 		VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table TGenders created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Create Shirt Size TABLE
$sql = "CREATE TABLE TShirtSizes (
intShirtSizeID		INT(6) 		UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
strShirtSize 		VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table TShirtSizes created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>