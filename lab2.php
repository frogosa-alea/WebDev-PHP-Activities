<?php

    // Define Constants
    define("NAME","Alea B. Frogosa");
    define("STUDENT_NUMBER","2018-01383-MN-0");
    define("ADDRESS","80 J Sto Nino St., Holy Spirit, QC");
    define("EMAILADDRESS","benitezalea.f@gmail.com");
    define("CONTACT_NUMBER","+639478481554");
    define("WEB_ADDRESS","localhost/Frogosa");
    define("LAB_TITLE","Laboratory Activity No. 2");
    define("DESCRIPTION","Creating Basic PHP Script");
    //Variables
    $school = "Polytechnic University of the Philippines";
    $course = "Bachelor of Science in Computer Engineering";
    $yearlevel = "3rd Year";
    $dateofbirth = "November 1, 1999";
    $gender = "Female";
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
                <div class="display-lab-two">
                    <table class="lab2-content-table">
                        <?php echo '<table class="table table-success table-striped"border=1 style="border-collapse: collapse;">';?>
                        <tr><th colspan=2><strong>My Academic Information</strong></th></tr>
                        <tr><td>School</td><td><?php echo $school ?> </td></tr>
                        <tr><td>Course</td><td><?php echo $course ?></td></tr>
                        <tr><td>Year Level</td><td><?php echo $yearlevel ?></td></tr>
                        <tr><td>Date of Birth</td><td><?php echo $dateofbirth?></td></tr>
                        <tr><td>Sex</td><td><?php echo $gender?></td></tr>
                    </table>
                </div>
            </article>
        </section>
        <!-- FOOTER -->
        <?php include("sections/footer.php");?>
    </body>
</html>
