<?php
        $fname=$lname=$email=$gender=$mobile=$dob=$hsc=$ssc=$course=$yenroll=$menroll="";
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $fname = test_input($_POST["fname"]);
            $lname = test_input($_POST["lname"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
            $mobile = test_input($_POST["mobile"]);
            $dob = test_input($_POST["dob"]);
            $hsc = test_input($_POST["hsc"]);
            $ssc = test_input($_POST["ssc"]);
            $course = test_input($_POST["course"]);
            $yenroll = test_input($_POST["yenroll"]);
            $menroll = test_input($_POST["menroll"]);
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
?>
<html>
    <head>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
            <h1>Please fill up the form</h1>
            <hr>
            <table>
                <tr>
                    <td>First name:</td>
                    <td><input type="text" name="fname"></td>
                </tr>
                <tr>
                    <td>Last name:</td>
                    <td><input type="text" name="lname"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td> <input type="text" id="email" name="email"></td>
                </tr>
                <tr>
                    <td>Gender: 
                        <td>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        </td>
                    </td>
                </tr>
                <tr>
                    <td>Mobile NO:
                        <td>
                        <input type="text" name="mobile">
                        </td>
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td> <input type="date" id="birthday" name="dob"></td>
                </tr>
                <tr>
                    <td>HSC results:</td>
                    <td><input type="text" name="hsc"></td>
                </tr>
                <tr>
                    <td>SSC results:</td>
                    <td><input type="text" name="ssc"></td>
                </tr>
                <tr>
                    <td>Select a course you want to enroll:</td>
                    <td>
                    <select name="course" id="course">
                            <option value="Select">Select</option>
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="BBA">BBA</option>
                    </select> 
                    </td>
                </tr>
                <tr>
                    <td>Choose a year enrolling year:</td>
                    <td>
                    <select name="yenroll" id="yenroll">
                            <option value="Select">Select</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td>Choose a year enrolling year:</td>
                    <td>
                    <select name="menroll" id="menroll">
                            <option value="Select">Select</option>
                            <option value="Spring">Spring</option>
                            <option value="Summer">Summer</option>
                            <option value="Fall">Fall</option>
                        </select> 
                    </td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Insert Data">
        </form>
    </body>
</html>