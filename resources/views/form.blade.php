<html>
<head>
	<title>halaman form</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up form</h3>
	<form action="{{url('welcome')}}" method="get">
		<p>Fist Name:</p>
		<input type="text" name="fistName" id="fistName">
		<p>Last Name</p>
		<input type="text" name="lastName" id ="lastName">
		<p>Gender :</p>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label>
		<p>Nationality:</p>
		 <select id="nationality" name="nationality">
		 	<option value="indonesian">Indonesia</option>
		 	<option value="singapura">Singapura</option>
		 	<option value="malaysia">Malaysia</option>
		 	<option value="thailand">Thailand</option>
		 </select> 
		 <p>Language Spoken:</p>
		  <input type="checkbox" id="Language" name="Language" value="indonesia">
		  <label for="indonesia"> Bahasa Indonesia</label><br>
		  <input type="checkbox" id="Language" name="Language" value="English">
		  <label for="English"> English</label><br>
		  <input type="checkbox" id="Language" name="Language" value="other">
		  <label for="other"> Other</label>
		  <p>Bio :</p>
		   <textarea name="bio" id="bio" rows="10" cols="30"></textarea><br>
		   <input type="submit" value="Sing Up">
	</form>
</body>
</html>