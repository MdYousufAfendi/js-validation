<html>
	<head>
		<script>
			function GEEKFORGEEKS() {
				var fname =
					document.forms["RegForm"]["fname"];
				var lname =
					document.forms["RegForm"]["lname"];
				var gen =
					document.forms["RegForm"]["gen"];
				var dob =
					document.forms["RegForm"]["dob"];
				var rel =
					document.forms["RegForm"]["rel"];
				var preadd =
					document.forms["RegForm"]["preadd"];
				var peradd =
					document.forms["RegForm"]["peradd"];
				var phone =
					document.forms["RegForm"]["phone"];
				var email =
					document.forms["RegForm"]["EMail"];
				var username =
					document.forms["RegForm"]["username"];
				var password =
					document.forms["RegForm"]["Password"];
				

				if (fname.value == "") {
					window.alert("Please enter your first name.");
					name.focus();
					return false;
				}

				if (lname.value == "") {
					window.alert("Please enter your last name.");
					name.focus();
					return false;
				}

				if (gen.value == "") {
					window.alert("Please enter your gender.");
					name.focus();
					return false;
				}

				if (dob.value == "") {
					window.alert("Please enter your date of birth.");
					name.focus();
					return false;
				}

				if (rel.value == "") {
					window.alert("Please enter your relegion.");
					name.focus();
					return false;
				}

				if (preadd.value == "") {
					window.alert("Please enter your present address.");
					address.focus();
					return false;
				}

				if (peradd.value == "") {
					window.alert("Please enter your permanent address.");
					address.focus();
					return false;
				}

				if (phone.value == "") {
					window.alert(
					"Please enter your phone number.");
					phone.focus();
					return false;
				}

				if (email.value == "") {
					window.alert(
					"Please enter a valid e-mail address.");
					email.focus();
					return false;
				}
 
				if (username.value == "") {
					window.alert(
					"Please enter a username.");
					email.focus();
					return false;
				}

				if (password.value == "") {
					window.alert("Please enter your password");
					password.focus();
					return false;
				}


				return true;
			}
		</script>

		<style>
			div {
				box-sizing: border-box;
				width: 100%;
				border: 100px solid black;
				float: left;
				align-content: center;
				align-items: center;
			}

			form {
				margin: 0 auto;
				width: 600px;
			}
		</style>
	</head>

	<body>
		<h1 style="text-align: center;">REGISTRATION FORM</h1>
		<fieldset>
    <legend><label>***Basic Information***</label></legend>
    <input type="text" class="login-input" name="fname" placeholder="First Name" required />
    <br><br>
    <input type="text" class="login-input" name="lname" placeholder="Last Name" required />
    <br><br>
    Gender:
  <input type="radio" name="gen" value="female">Female
  <input type="radio" name="gen" value="male">Male
  <input type="radio" name="gen" value="other">Other
  <span class="error">* </span>
  

   <br><br>

  Date of Birth: <input type="date" name="dob"
            min="1990-01-01" max="2050-12-31">
            <span class="error">* </span>
    <br><br>
    Select Religion: 
           <select>  
           <option value = "Islam"> Islam  
           </option>  
           <option value = "Hindus"> Hindus   
           </option>  
           <option value = "Others"> Others  
           </option> 
       </select>

       </fieldset>
       <br><br>
       <br><br>
           <fieldset>
      <legend><label>***Contact Information***</label></legend>
    <input type="text" class="login-input" name="padd" placeholder="Present Address" required />
    <br><br>
   

  <input type="text" class="login-input" name="email" placeholder="Email Adress">
  <br><br>
  
   Website: <a href="https://github.com/MdYousufAfendi">Visit Github Account!</a>
  </fieldset>
  <br><br>
  <br><br>
  <fieldset>
    <legend><label>***Account Information***</label></legend>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <br><br>
        <input type="password" class="login-input" name="password" placeholder="Password">
        <br><br>
    </fieldset>
    <br><br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
	</body>
</html>


