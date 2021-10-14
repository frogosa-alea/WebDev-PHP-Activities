<?php

    // Define Constants
    define("NAME","Alea B. Frogosa");
    define("STUDENT_NUMBER","2018-01383-MN-0");
    define("ADDRESS","80 J Sto Nino St., Holy Spirit, QC");
    define("EMAILADDRESS","benitezalea.f@gmail.com");
    define("CONTACT_NUMBER","+639478481554");
    define("WEB_ADDRESS","Web Address");
    define("LAB_TITLE","Laboratory Activity No. 1");
    define("DESCRIPTION","Creating Basic PHP Script");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo LAB_TITLE ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="styling/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- HEADER -->
        <?php include("sections/header.php");?>

        <section>
            <!-- NAV -->
            <?php include("sections/nav.php");?>
            <article>
                <div class="display-lab-one">
                <span> Hello World! <br> Today is </span> 
                <?php echo date("m/d/Y") ?>
                </div>
            </article>
        </section>
        <!-- FOOTER -->
        <?php include("sections/footer.php");?>
    </body>
</html>
