<?php

    // Define Constants
    define("NAME","Alea B. Frogosa");
    define("STUDENT_NUMBER","2018-01383-MN-0");
    define("ADDRESS","80 J Sto Nino St., Holy Spirit, QC");
    define("EMAILADDRESS","benitezalea.f@gmail.com");
    define("CONTACT_NUMBER","+639478481554");
    define("WEB_ADDRESS","localhost/Frogosa");
    define("LAB_TITLE","Laboratory Activity No. 9");
    define("DESCRIPTION","Handling User Input (User Registration)");

    function generate_textbox($name, $value) {
        return '<input class="form-control" type="text" name="' . $name . '" value="' . $value . '">';    
    }
    function generate_password($name, $value) {
        return '<input type="password" id="form1" class="form-control" name="' . $name . '" value="' . $value . '">';
    }
    function generate_textarea($name, $value) {
        return '<textarea class="form-control" id="floatingTextarea" name="' . $name . '">' . $value . '</textarea>';
    }
    function generate_checkbox($name) {
        return '<input class="form-check-input" id="flexCheckDefault" type="checkbox" name="' . $name . '">';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo LAB_TITLE ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="styling/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- HEADER -->
        <?php include("sections/header.php");?>

        <section>
            <!-- NAV -->
            <?php include("sections/nav.php");?>
            <article>
                <?php
                    $lastname = isset($_POST['txtLastname']) ? $_POST['txtLastname'] : '';
                    $firstname = isset($_POST['txtFirstname']) ? $_POST['txtFirstname'] : '';
                    $middlename = isset($_POST['txtMiddlename']) ? $_POST['txtMiddlename'] : '';
                    $emailaddress = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '';
                    $username = isset($_POST['username']) ? $_POST['username'] : '';
                    $password = isset($_POST['password']) ? $_POST['password'] : '';
                    $confirmpassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
                    $comments = isset($_POST['comments']) ? $_POST['comments'] : '';
                    $agree = isset($_POST['agree']) ? $_POST['agree'] : '';
                    if (count($_POST) == 0) {
                        echo '<form method="post" action="lab9.php">';
                        echo '<table>';
                        echo '<tr><td colspan=2 ><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
                        echo '<tr><td>Last Name</td><td>',
                        generate_textbox('txtLastname', $lastname),
                        '</td></tr>';
                        echo '<tr><td>First Name</td><td>',
                        generate_textbox('txtFirstname', $firstname),
                        '</td></tr>';
                        echo '<tr><td>Middle Name</td><td>',
                        generate_textbox('txtMiddlename', $middlename),
                        '</td></tr>';
                        echo '<tr><td>Email Address</td><td>',
                        generate_textbox('emailAddress', $emailaddress),
                        '</td></tr>';
                        echo '<tr><td>Username</td><td>',
                        generate_textbox('username', $username),
                        '</td></tr>';
                        echo '<tr><td>Password</td><td>',
                        generate_password('password', $password),
                        '</td></tr>';
                        echo '<tr><td>Confirm Password</td><td>',
                        generate_password('confirmPassword', $confirmpassword),
                        '</td></tr>';
                        echo '<tr><td>Comments</td><td>',
                        generate_textarea('comments', $comments),
                        '</td></tr>';
                        echo '<tr><td>Agree</td><td>',
                        generate_checkbox('agree', $agree),
                        '</td></tr>';
                        echo '<tr><td class="form-buttons" colspan=2>';
                        echo '<input type="submit" class="btn btn-outline-success" name="btnRegister" value="Register">&nbsp;';
                        echo '<input type="reset" class="btn btn-outline-success" name="btnReset" value="Reset">&nbsp;';
                        echo '</td></tr>';
                        echo '</table>';
                        echo '</form>';
                        }
                        else {
                        echo '<table class="table table-success table-striped">';
                        echo '<tr><td style="text-align=center;" colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
                        echo '<tr><td style="text-align=center;" colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';
                        echo '<tr><td>Last name</td><td>', $lastname, '</td></tr>';
                        echo '<tr><td>First name</td><td>', $firstname, '</td></tr>';
                        echo '<tr><td>Middle name</td><td>', $middlename, '</td></tr>';
                        echo '<tr><td>Email Address</td><td>', $emailaddress, '</td></tr>';
                        echo '<tr><td>Username</td><td>', $username, '</td></tr>';
                        echo '<tr><td>Password</td><td>', $password, '</td></tr>';
                        echo '<tr><td>Confirm Password</td><td>', $confirmpassword, '</td></tr>';
                        echo '<tr><td>Comments</td><td>', $comments, '</td></tr>';
                        echo '<tr><td>Agree</td><td>', $agree, '</td></tr>';
                        echo '</table>';
                        }
                ?>
            </article>
        </section>
        <!-- FOOTER -->
        <?php include("sections/footer.php");?>
    </body>
</html>
