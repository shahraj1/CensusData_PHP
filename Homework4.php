 <!-- Name: Raj Shah 
	  Class:IT-140 PHP & mySQL
	  Abstract: Creating Databases -->
<html>


<head>

<title> PHP & SQL</title>

</head>


<body>

<script type="text/javascript">

function validateForm(thisform) {
	 	  
	  with (thisform) {
      
        if (validate_required(txtFirstName, "First name must be completed.") == false)
		      { txtFirstName.focus(); return false; } 
              
        if (validate_required(txtLastName, "Last name must be completed.") == false)
		      { txtLastName.focus(); return false; } 

        if (validate_required(txtAddress, "Address must be completed.") == false)
		      { txtAddress.focus(); return false; }
              
        if (validate_required(txtCity, "City must be completed.") == false)
		      { txtCity.focus(); return false; }
              
        if (checkState(lstStates, "Please select a state.") == false)
		      { lstStates.focus(); return false; }
              
        if (checkZip (txtZip, "The US Zip Code must contain 5 digits.") == false)
		      { txtZip.focus(); return false; }

        if (checkEmail (txtEmail, "Not a valid e-mail address") == false)
		      { txtEmail.focus(); return false; }
			  
        if (checkPhone (txtPhoneNumber, "Phone number must be completed and right format") == false)
		      { txtPhoneNumber.focus(); return false; } 

        if (checkBirthdate (txtBirthdate, "Birthdate must be completed and right format") == false)
              { txtBirthdate.focus(); return false; } 
        
        if (checkShirtSize (lstShirtSize, "Please select a shirt size") == false)
              { lstShirtSize.focus(); return false; } 
		}
    }

function validate_required(field, alerttext) {
	    with(field) { 
		
			<!-- check if the field is empty -->
			if (value == "") {
				alert(alerttext);
				return false;
			}
		}
	}
    
function checkZip(field, alerttext) {
		with(field) { 
		
			<!-- regex for zip-code accepts 99999 or 99999-9999 formats -->
            var zipCode = ^\d{5}(?:[-\s]\d{4})?$; 
            if(field.value.match(zipCode)) {
                return true;
            }
            else {
                alert(alerttext);
				return false;
            }
        }
	}
	
function checkPhone(field, alerttext) {
		with(field) { 
			
			<!-- regex for phone number accepts 9999999999 or (000)-000-0000 -->
            var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
            if(field.value.match(phoneNum)) {
                return true;
            }
            else {
                alert(alerttext);
				return false;
            }
        }
	}
    

function checkEmail(field, alerttext) {
        with(field){

			<!-- regex for email accepts you@example.com -->
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(field.value.match(filter)) {
                return true;
            }
            
            else {
                alert(alerttext);
				return false;
            }   
        }
    
    }
    
function checkBirthdate(field, alerttext) {
        with(field){
			
			<!-- regex for date of birth -->
            var filter = /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/;
            if(field.value.match(filter)) {
                return true;
            }
            
            else {
                alert(alerttext);
				return false;
            }   
        }
    
    }
    
function checkState(field, alerttext) {
	    with(field) { 
		
			<!-- check if the option value is selected or not -->
			if (value == "") {
				alert(alerttext);
				return false;
			}
		}
	}
    
function checkShirtSize(field, alerttext) {
	    with(field) { 
		
			<!-- check if the option value is selected or not -->
			if (value == "") {
				alert(alerttext);
				return false;
			}
		}
	}
    
</script>

<body>

    <div class="container">
	  <form name="myform" action="process_player.php"  onsubmit="return validateForm(myform)" method="post">
		  <table align="center" border=0>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="txtFirstName"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="txtLastName"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="txtAddress"></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type="text" name="txtCity"></td>
			</tr>
			<tr>
				<td>State:</td>
				<td><select name="lstStates">
					<option value="" selected></option>
					<option value="ohio">Ohio</option>
					<option value="kentucky">Kentucky</option>
					<option value="indiana">Indiana</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Zip Code:</td>
				<td><input type="text" name="txtZip"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="txtEmail"></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type="text" name="txtPhoneNumber"></td>
			</tr>
			<tr>
				<td>Birthdate:</td>
				<td><input type="text" name="txtBirthdate" placeholder="(yyyy/mm/dd)"></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><label for="male">Male</label>
					<input type="radio" name="radioGender" value="Male"><br>
					<label for="female">Female</label>
					<input type="radio" name="radioGender" value="Female" checked>
				</td>
			</tr>
			<tr>
				<td>Shirt Size:</td>
				<td><select name="lstShirtSize">
					<option value="" selected></option>
					<option value="Male Small">Male Small</option>
					<option value="Male Medium">Male Medium</option>
					<option value="Male Large">Male Large</option>
					<option value="Male X-Large">Male X-Large</option>
					<option value="Female Small">Female Small</option>
					<option value="Female Medium">Female Medium</option>
					<option value="Female Large">Female Large</option>
					<option value="Female X-Large">Female X-Large</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Meal option:</td>
				<td>
					<input type="checkbox" name="chkMeal" value="Lunch"> Lunch<br>
					<input type="checkbox" name="chkMeal" value="Dinner"> Dinner<br>
					<input type="checkbox" name="chkMeal" value="Cart"> Cart
				</td>
			</tr>
			<tr>
				<td align="center" ><input type="button" value="Create Database" action="CreateDatabase.php" onclick="CreateDatabase.php" method="post"></td>
				<td align="center" ><input type="button" value="List Players" action=""></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit"></td>
			</tr>
		</table>

	  </form>
	</div>
</body>
</html>