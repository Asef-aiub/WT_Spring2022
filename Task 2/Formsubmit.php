<html>
<body>

<h2>Registration Form</h2>
<form action="result/result.php" method="get">
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
<td><input type="radio" name="desig">Junior Programmer
<input type="radio" name="desig">Senior Programmer
<input type="radio" name="desig">Project Lead</td>
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
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</form>
</body>
</html>

