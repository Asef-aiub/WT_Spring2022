
<?php
$username=$password= "";
if(isset($_GET["result"]))
{
    $username = $_GET["fname"];
    if(empty($username))
    {
        echo "enter a valid name";

    }
    else 
    {
        echo "your name is: ".$username;
    }
    echo "<br>";

    $age = $_GET["age"];
    if (empty($age))
    {
        echo "enter a valid age";
    }
    else 
    {
        echo "your age is: ".$age;
    }

    echo "<br>";

    if (isset($_GET["desig"]))
    {
        echo "designation selected: ".$_GET["desig"];
    }
    else
    {
        echo " you didn't select any radio button";
    }
    echo "<br>";

    if (isset($_GET["prfLang1"])||isset($_GET["prfLang2"])||isset($_GET["language3"]))
    {
        echo "language selected: ";
        if (isset($_GET["prfLang1"]))
        {
            echo $_GET["prfLang1"];
        }
        if (isset($_GET["prfLang2"]))
        {
            echo $_GET["prfLang2"];
        }
        if (isset($_GET["prfLang3"]))
        {
            echo $_GET["prfLang3"];
        }

    }
    else
    {
        echo "you did not select  any box";
    }
    echo "<br>";

    $useremail = $_GET["email"];
    if(empty($useremail)||strlen($useremail)<5)
    {
        echo "enter a valid email";

    }
    else 
    {
        echo "your email is ".$useremail;
    }
    echo "<br>";

    $userpass = $_GET["password"];
    if(empty($userpass)||strlen($userpass)<5)
    {
        echo "enter a valid password";

    }
    else 
    {
        echo "password is successfully submitted";
    }
    echo "<br>";
}
?>