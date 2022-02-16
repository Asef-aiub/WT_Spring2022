<html>
<body>

<h2>Registration Form</h2>
<form action="submit.php" method="post">
<table>
<tr>
<td> Name :</td> 
<td><input type="text" name="fname"></td>
</tr>
</tr>
<tr>
<td>Age :</td> 
<td><input type="number" name="age" min="16" max="50"></td>
</tr>
<tr>
<td>Designation :</td> 
<td><input type="radio" name="desig" value = "Junior Programmer">Junior Programmer
<input type="radio" name="desig" value = "Senior Programmer">Senior Programmer
<input type="radio" name="desig" value = "Project Lead">Project Lead</td>
</tr>
<tr>
<td>Preferred Language :</td> 
<td><input type="checkbox" name="prfLang1">JAVA
<input type="checkbox" name="prfLang2">PHP
<input type="checkbox" name="prfLang3">C++</td>
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
<input type="submit" name="submit">
<input type="reset" value="Reset">
</form>
</body>
</html>

