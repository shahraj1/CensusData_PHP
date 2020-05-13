<?php
	$firstName = $_POST['txtFirstName'];
	$lastName = $_POST['txtFirstName'];
	$Address = $_POST['txtAddress'];
	$City = $_POST['txtCity'];
	$State = $_POST['lstStates'];
	$ZipCode = $_POST['txtZip'];
	$Email = $_POST['txtEmail'];
	$PhoneNumber = $_POST['txtPhoneNumber'];
	$BirthDate = $_POST['txtBirthDate'];
	$Gender = $_POST['radioGender'];
	$ShirtSize = $_POST['lstShirtSize'];
	$MealOption = $_POST['chkMeal'];

	echo("First Name:"  . $firstName);
	echo("<br/> Last Name: " . $lastName);

?>


