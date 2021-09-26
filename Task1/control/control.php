<html>
    <body>
        <?php
        $fname=$lname=$age=$designation=$language=$email=$password="";
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $fname = test_input($_POST["fname"]);
            $lname = test_input($_POST["lname"]);
            $age = test_input($_POST["age"]);
            $designation = test_input($_POST["designation"]);
            $language = test_input($_POST["language"]);
            $email = test_input($_POST["email"]);
            $password = test_input($_POST["password"]);
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        ?>

        <?php
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
           echo "<br>";
        ?>
    </body>
</html>