<?php
    include('../control/searchcontrol.php');
?>
<html>
    <head>
        <title>FTLabExam</title>
    </head>
    <body>
        <h1>Search Employee</h1>
        <form action="" methhod="POST">
        <table>
            <tr>
                <td>Search by ID:</td>
                <td><input type="text" name="ID"></td>
            </tr>
            <tr>
                <td>Search by name:</td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr>
                <td>Search by Salary:</td>
                <td><input type="text" name="Salary"></td>
                <td><input type="text" name="Salary"></td>
            </tr>
        </table>
        <input name="submit" type="submit" value="Search">
        </form>
        <br>
        <?php echo $error; ?>
    </body>
</html>