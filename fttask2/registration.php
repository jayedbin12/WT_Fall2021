<?php
$fname=$lname=$age=$designation=$language=$email=$password=$fnameE=$lnameE=$emailE=$passwordE="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $age=$_REQUEST["age"];
    $email=$_REQUEST["email"];

    if(empty($_POST["fname"])){
    $fnameE="Name is requied";
    }
    else
    {
    $fname = test_input($_POST["fname"]);
    if( preg_match("/[0-9]/", $fname))
    {$fnameE="Must start with letter";}
    else if (!preg_match("/[a-zA-Z]{5,}/",$fname)){
    $fnameE = "At least Five words and can only contain letters";}
    } 

    if(empty($_POST["lname"])){
    $lnameE = "Name is requied";
    }
    else
    {
    $lname = test_input($_POST["lname"]);
    if(preg_match("/[0-9]/", $lname))
    {$lname="Must start with letter";}
    else if (!preg_match("/[a-zA-Z]{5,}/",$lname)){
    $lnameE = "At least three words and can only contain letters";}
    }
    if(empty($_POST["email"])){
        $emailE = "Email is required";
        }
        else
        {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailE = "Invalid email format. Format: example@gmail.com";}
        }
    if(empty($_POST["password"])){
            $passwordE="Enter password";
        }
        else{
            $password = test_input($_POST["password"]);
            if(!preg_match("/[0-9a-zA-Z@#$%]{9,}/",$password)){
                $passwordE = "At least nine letters";
            }
        }    
}
?>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <fieldset>
            <legend>Registration Form</legend>
            <hr>
            <form action="" onsubmit="return validateForm()" method="post">
            <table>
                <tr>
                    <td>First name:</td>
                    <td><input type="text" id="fname" name="fname" value="<?php echo $fname;?>"><span class="error">*<?php echo $fnameE;?></span></td>
                </tr>
                <tr>
                    <td>Last name:</td>
                    <td><input type="text" id="lname" name="lname" value="<?php echo $lname;?>"><span class="error">*<?php echo $lnameE;?></span></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" id="age" name="age"></td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td>
                        <input type="radio" id="designation" name="designation">Junior Programmer
                        <input type="radio" id="designation" name="designation">Senior Programmer
                        <input type="radio" id="designation" name="designation">Project Leader
                    </td>
                </tr>
                <tr>
                    <td>Preferred language:</td>
                    <td>
                        <input type="checkbox" id="java" name="language">JAVA
                        <input type="checkbox" id="php" name="language">PHP
                        <input type="checkbox" id="c++" name="language">C++
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" id="email" value="<?php echo $email;?>"><span class="error">*<?php echo $emailE;?></span></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id="password" value="<?php echo $password;?>"><span class="error">*<?php echo $passwordE;?></span></td>
                </tr>
                <tr>
                    <td>Please choose a file:</td>
                    <td><input type="file" name="file" id="file"></td>
                </tr>
            </table>
            <input type="submit" id="submit" name="submit" value="Submit">
            <input type="reset" name="reset" id="reset" value="Reset">
            </form>
        </fieldset>
        <p id="message"></p>
        <p id="message2"></p>
        <script src="script.js"></script>
    </body>
</html>
<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $age;
echo "<br>";
echo $designation;
echo "<br>";
echo $language;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
?>