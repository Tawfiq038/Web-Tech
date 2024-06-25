<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>

<body>
<h1>Registration</h1>


<form action="register.php" method="POST">

<table>
<tr>
<td>
<fieldset>
<legend>General Information:</legend>


<table>
<tr>
  <td><label for="fname"><h4>First name:</h4></label></td>
  <td>:</td>
<td>
<?php echo $_POST["fname"];
?>

</td>
</tr>

<tr>
  <td><label for="lname"><h4>Last name:</h4></label></td>
  <td><input type="text" id="lname" name="lname"></td>
</tr>

<tr>
  <td><label for="lname"><h4>Gender:</h4></label></td>

  <td><input type="radio" id="Male" name="fav_language" value="Male">
<label for="Male">Male</label>
<input type="radio" id="Female" name="fav_language" value="Female">
<label for="Female">Female</label></td>
</tr>

<tr>
  <td><label for="fname"><h4>Father's name:</h4></label></td>
  <td><input type="text" id="fname" name="fname"></td>
</tr>

<tr>
  <td><label for="lname"><h4>Mother's name:</h4></label></td>
  <td><input type="text" id="lname" name="lname"></td>
</tr>

<tr>
  <td><label for="lname"><h4>Blood Group:</h4></label></td>
  <td><select id="cars" name="cars">
    <option value="volvo">A+</option>
    <option value="saab">A-</option>
    <option value="fiat">B+</option>
    <option value="audi">B-</option>
    <option value="audi">O+</option>
    <option value="audi">O-</option>
  </select></td>
</tr>

<tr>
  <td><label for="lname"><h4>Religion:</h4></label></td>
  <td><select id="cars" name="cars">
    <option value="volvo">Islam</option>
    <option value="saab">Hindu</option>
    <option value="fiat">Christian</option>
    <option value="audi">Buddha</option>
  </select></td>
</tr>
</table>

</fieldset>
</td>


<td>
<fieldset>
<legend>Contact Information:</legend>
<table>
<tr>
<td><h4>Email:</h4></td>
<td><input type="text" id="fname" name="fname"></td>
</tr>

<tr>
<td><h4>Phone Number:</h4></td>
<td><input type="text" id="fname" name="fname"></td>
</tr>

<tr>
<td><h4>Website:</h4></td>
<td><input type="text" id="fname" name="fname"></td>
</tr>

<tr>
<td><h4>Address:</h4></td>
<td>
<fieldset>
<legend>Present Address:</legend>
<table>
<tr>
<td><select id="cars" name="cars">
    <option value="volvo">Bangladesh</option>
    <option value="saab">USA</option>
    <option value="fiat">UK</option>
  </select></td>

<td><select id="cars" name="cars">
    <option value="volvo">Dhaka</option>
    <option value="saab">Washington</option>
    <option value="fiat">London</option>
  </select></td>
</tr>
<tr>
<td>
<textarea id="w3review" name="w3review" rows="5" cols="30"></textarea>
</td>
</tr>
<tr><td><input type="text" id="fname" name="fname"></td></tr>
</table>
</table>
</fieldset>
</td>


<td>
<fieldset>
<legend>Account Information:</legend>
<table>
<tr>
<td><h4>Username:</h4></td>
<td><input type="text" id="fname" name="fname"></td>
</tr>

<tr>
<td><h4>Password:</h4></td>
<td><input type="text" id="fname" name="fname"></td>
</tr>

<tr>
<td><h4>Confirm Password:</h4></td>
<td><input type="text" id="fname" name="fname"></td>
</tr>





</table>
</fieldset>
<br>
<input type="submit" value="Register">
</td>
</tr>
</table>
</form>
</body>
</html>