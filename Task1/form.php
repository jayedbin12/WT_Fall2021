<html>
    <head>
    </head>
    <body>
        <form action="control/control.php" method="post">
        <fieldset>
            <h1>Registration form</h1>
            <hr>
            <table>
                <tr>
                    <td>First name</td>
                    <td><input type="text" name="fname" pattern="[A-Za-z]{5}"></td>
                </tr>
                <tr>
                    <td>Last name</td>
                    <td><input type="text" name="lname" pattern="[A-Za-z]{5}"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td> <input type="text" name="age"></td>
                </tr>
                <tr>
                    <td>Designation
                        <td>
                        <input type="radio" name="designation" value="Junior Programmer">Junior Programmer
                        <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
                        <input type="radio" name="designation" value="Team leader">Team leader
                        </td>    
                    </td>
                </tr>
                <tr>
                    <td>Preferred language
                        <td>
                        <input type="checkbox" name="language" value="JAVA">JAVA
                        <input type="checkbox" name="language" value="PHP">PHP
                        <input type="checkbox" name="language" value="C++">C++
                        </td>   
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> <input type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" id="password" name="password" pattern=".{8,}"></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="Reset" value="Reset">
        </form>
    </body>
</html>
