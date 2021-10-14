<?php

    // Define Constants
    define("NAME","Alea B. Frogosa");
    define("STUDENT_NUMBER","2018-01383-MN-0");
    define("ADDRESS","80 J Sto Nino St., Holy Spirit, QC");
    define("EMAILADDRESS","benitezalea.f@gmail.com");
    define("CONTACT_NUMBER","+639478481554");
    define("WEB_ADDRESS","localhost/Frogosa");
    define("LAB_TITLE","Laboratory Activity No. 10");
    define("DESCRIPTION","Creating Basic PHP Script");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo LAB_TITLE ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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


                $links['lab10_home.php'] = 'Home';
                $links['lab10_vision.php'] = 'Vision';
                $links['lab10_mission.php'] = 'Mission';
                $links['lab10_history.php'] = 'History';
                echo '<table width=100% border=1 class="table table-success table-striped">';
                // navigation section
                echo '<tr><td>';
                foreach ($links as $key => $value)
                echo '&nbsp;<a style="font-weight:bold;" href="?page=', $key, '"> ', $value, ' </a>&nbsp;';
                echo '</td></tr>';
                // dynamic content
                echo '<tr><td><br />';
                if ( isset($_GET['page']) ) {
                $page = $_GET['page'];
                if (is_readable($page))
                include_once($page);
                else
                echo 'File <strong>', $page, '</strong> not found!';
                }
                else {
                reset($links);
                include_once(key($links));
                }
                echo '<br /><br />';
                echo '</td></tr>';
                echo '</table>';

                
            ?>
            </article>
        </section>
        <!-- FOOTER -->
        <?php include("sections/footer.php");?>
    </body>
</html>
