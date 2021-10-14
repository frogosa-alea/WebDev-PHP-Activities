<?php

    // Define Constants
    define("NAME","Alea B. Frogosa");
    define("STUDENT_NUMBER","2018-01383-MN-0");
    define("ADDRESS","80 J Sto Nino St., Holy Spirit, QC");
    define("EMAILADDRESS","benitezalea.f@gmail.com");
    define("CONTACT_NUMBER","+639478481554");
    define("WEB_ADDRESS","localhost/Frogosa");
    define("LAB_TITLE","Laboratory Activity No. 7");
    define("DESCRIPTION","Regular Expression");

    
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
            <div class="display-lab-seven">
                    <?php
                        
                        $patterns[] = array('String containing "PHP"', 'PHP');
                        $patterns[] = array('Starting with "PHP"', '^PHP');
                        $patterns[] = array('Ends with "PHP"', 'PHP$');
                        $patterns[] = array('String equal to "PHP"', '^PHP$');
                        $patterns[] = array('Word starting with letter "C"', '^C\w');
                        $patterns[] = array('Non-empty lowercase string', '^[a-z]');
                        $patterns[] = array('Non-empty uppercase string', '[A-Z]');
                        $patterns[] = array('Minimum 10 letters Maximum 20 letters', '^[A-Za-z].{9,19}$');
                        $patterns[] = array('Minimum 10 digits Maximum 20 digits', '^[0-9]{10,20}$');
                        $patterns[] = array('Minimum 10 characters Maximum 20 characters', '^.{10,20}$');
                        $patterns[] = array('Valid PHP variable name', '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*');
                        $patterns[] = array('Valid PHP constant name', '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*');
                        $patterns[] = array('Valid decimal (base-10) integer', '^[0-9]\d');
                        $patterns[] = array('Valid float number', '^[\d]+(|\.[\d]+)$');
                        $patterns[] = array('5-letter string', '\b\w[A-Za-z]{4,4}\b');
                        $patterns[] = array('5-digit string', '\b[0-9]{5}\b');
                        $patterns[] = array('5 ascii characters', '[\x01-\x7F]{5}$');
                        $patterns[] = array('5 non-alphanumeric characters', '[^a-zA-Z0-9]{5}$');
                        $patterns[] = array('Passing Grade (1.00,1.25,1.50 to 3.00)', '.00|1.25|1.50|1.75|2.00|2.25|2.5|2.75|3.00');
                        $patterns[] = array('Sub-domain Name (Ex. .edu or .ue.edu or .ccss.ue.edu)', '\w.edu|.ue.edu|.ccss.ue.edu');
                        echo '<form method="post">';
                        $i=1;
                        echo '<table border=1>';
                        echo '<tr><td colspan=5 align=center>Regular Expression Test</td></tr>';
                        echo '<tr><td>No.</td><td>Description</td><td>String</td><td>RegEx Pattern</td><td>Result</td>';
                        foreach ($patterns as $pattern_item) {
                        $description = $pattern_item[0];
                        $pattern = $pattern_item[1];
                        $value = isset($_POST["field$i"]) ? $_POST["field$i"] : '';
                        if ($pattern == '') {
                        $result = 'Missing pattern';
                        $pattern = '&nbsp;';
                        }
                        else {
                            $pattern = '/' . $pattern . '/';
                            if (preg_match($pattern, $value))
                            $result = 'Valid';
                            else
                            $result = 'Invalid';
                            }
                            echo "<tr>";
                            echo "<td>$i.</td><td>$description</td>";
                            echo "<td><input type=text name=\"field$i\" value=\"$value\"></td>";
                            echo "<td>$pattern</td><td>$result</td>";
                            echo '<tr>';
                            $i++;
                            }
                            echo '</table ><br />';
                            echo '<input type="submit" name="validate" value="Validate Data">&nbsp';
                            echo '<input type="reset" value="Reset">&nbsp';
                            echo '</form>';
                    ?>
                </div>
            </article>
        </section>
        <!-- FOOTER -->
        <?php include("sections/footer.php");?>
    </body>
</html>
