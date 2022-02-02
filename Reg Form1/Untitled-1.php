<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>
<form action="/action_page.php">
<table>
<tr>
<td>First Name :</td> 
<td><input type="text" name="fname"></td>
</tr>
<tr>
<td>Last Name :</td> 
<td><input type="text" name="lname"></td>
</tr>
<tr>
<td>Age :</td> 
<td><input type="text" name="age"></td>
</tr>
<tr>
<td>Designation :</td> 
<td><input type="radio" name="desig">Junior  Programmer
<input type="radio" name="desig">Senior Programmer
<input type="radio" name="desig">Project Lead</td>
</tr>
<tr>
<td>Preferred Language :</td> 
<td><input type="checkbox" name="prfLang">JAVA
<input type="checkbox" name="prfLang">PHP
<input type="checkbox" name="prfLang">C++</td>
</tr>
<tr>
<td>Email :</td> 
<td><input type="text" name="email"><td>
</tr>
<tr>
<td>Password :</td> 
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td>Please Choose a File :</td>
<td>
<input type="file" name="video" accept="video/*">
</td>
</tr>
</table>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</form>
</body>
</html>

