<!DOCTYPE html>

<?php
include ("../control/regformControl.php");

?>
<html>
<body>

<h2>Registration Form </h2>
<form action="" method="post" enctype="multipart/form-data">
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
<td><input type="radio" name="desig" value="junior_programmer">Junior  Programmer
<input type="radio" name="desig" value="senior_programmer">Senior Programmer
<input type="radio" name="desig" value="project_lead">Project Lead</td>
</tr>
<tr>
<td>Preferred Language :</td> 
<td><input type="checkbox" name="prfLang1" value="java">JAVA
<input type="checkbox" name="prfLang2" value="php">PHP
<input type="checkbox" name="prfLang3" value="c++">C++</td>
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
<input type="file" name="file">
</td>
</tr>
</table>
<input type="submit" name="Submit">
<input type="reset" value="Reset">
</form>
</body>
</html>

