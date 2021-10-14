<?php

    // Define Constants
    define("NAME","Alea B. Frogosa");
    define("STUDENT_NUMBER","2018-01383-MN-0");
    define("ADDRESS","80 J Sto Nino St., Holy Spirit, QC");
    define("EMAILADDRESS","benitezalea.f@gmail.com");
    define("CONTACT_NUMBER","+639478481554");
    define("WEB_ADDRESS","localhost/Frogosa");
    define("LAB_TITLE","Laboratory Activity No. 8");
    define("DESCRIPTION","Array Manipulations – Word Counter");
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
                    $text = (isset($_POST['text'])) ? $_POST['text'] : '';
                    echo '<form method="post">';
                    echo 'Enter text:<br />';
                    echo '<textarea class="form-control" name="text" style="width:500px">';
                    echo $text;
                    echo '</textarea><br />';
                    echo '<input class="btn btn-outline-success" type=submit value="Process">&nbsp;';
                    echo '<input class="btn btn-outline-success" type=reset>&nbsp;';
                    echo '</form>';
                    $text = preg_replace('/[^a-zA-Z0-9 ]/','',trim($text));

                    $colors = array('#C8EAFE', '#C2E8FE', '#B0DAF2', '#9ECBE5', '#7EBADD', '#5EA9D4', '#54A0CC', '#4A96C3', '#3583B1', '#185177');
                    if ($text <> '') 
                    {
                        
                        $text = strtolower($text);
                        $allwords = explode(' ', $text);
                        $uniquewordlist = array_unique($allwords);
                        sort($uniquewordlist);
                        if (current($uniquewordlist) == '') 
                        {
                            $deleteditem = array_shift($uniquewordlist);
                        }

                        foreach ($uniquewordlist as $word)
                            $counter[$word] = 0;
                        
                        $totalwords = 0;
                        foreach ($allwords as $word) 
                        {
                            if ($word != '') {
                            $counter[$word]++;
                            $totalwords++;
                        }
                    }
                    
                    echo'<br><br>';
                    echo '<table border=1 class="table table-success table-striped" style="text-align: center;width: 50%;margin-left: auto; margin-right: auto; text-align=center;">';
                    echo '<tr><td style="text-align: center;" colspan=4 align=center>Array Manipulation - Word Counter</td></tr>';
                    echo '<tr><td>No.</td><td>Word</td><td>Frequency</td><td>Percent</td></tr>';
                    $i=1;
                    foreach ($uniquewordlist as $word) {
                    $color = current($colors);
                    $length = number_format($counter[$word] / $totalwords * 100.00,2);
                    echo '<tr>';
                    echo '<td>',$i, '.</td>';
                    echo '<td>', $word, '</td>';
                    echo '<td>', $counter[$word],'</td>';
                    echo '<td style="background:',$color,'">',$length,'%</td>';
                    echo '</tr>';
                    next($colors);
                    if (current($colors) == false) {
                    reset($colors);
                    }
                    $i++;
                    }
                    echo '</table>';
                    }
                ?>
            </article>
        </section>
        <!-- FOOTER -->
        <?php include("sections/footer.php");?>
    </body>
</html>
