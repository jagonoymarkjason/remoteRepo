<html>

<head>
	<title>Registration Form</title>

	<style>
		body{
			background: #333;
			font-family:arial;
		}
		form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:500px;
		}

		label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
	</style>

</head>

<body>
	<form>
	<h1>Masterzxc</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label></label> <input type="text" name="uname" placeholder="username"/><br />
		<label></label> <input type="text" name="email" placeholder="email"/><br />
		<label></label> <input type="password" name="pass" placeholder="password"/><br />
		<label></label> <input type="password" name="cpass" placeholder="confirm password"/>
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label></label> <input type="text" name="fname" placeholder="firstame"/><br />
		<label></label> <input type="text" name="lname" placeholder="lastname"/><br />
		<label></label> <input type="text" name="contact" placeholder="contact"/><br />
		<label></label> <textarea rows="2" cols="20" name="address" placeholder="address"></textarea><br />
		<label></label> <input type="text" name="city" placeholder="city"/><br />
		<label></label> <input type="text" name="state" placeholder="state"/><br />
		<label></label> <input type="text" name="zip" placeholder="zip"/>
	</fieldset>
	<input type="submit" value="Register" onClick="return submit_form();" />
	</form>

	<script type="text/javascript">
		function submit_form(){
			alert("Thank you for your registration...");
		}
	</script>

</body>

</html>