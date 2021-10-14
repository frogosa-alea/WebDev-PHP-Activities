<?php

    // Define Constants
    define("NAME","Alea B. Frogosa");
    define("STUDENT_NUMBER","2018-01383-MN-0");
    define("ADDRESS","80 J Sto Nino St., Holy Spirit, QC");
    define("EMAILADDRESS","benitezalea.f@gmail.com");
    define("CONTACT_NUMBER","+639478481554");
    define("WEB_ADDRESS","localhost/Frogosa");
    define("LAB_TITLE","Laboratory Activity No. 5");
    define("DESCRIPTION","Functions and Control Structures – Magic Square");   
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
                echo '<form action="" method="post" class="table table-success table-striped" cellpadding=4 border=1 style="border-collapse:collapse">';
                echo '<table cellpadding=4 border=1 style="border-collapse:collapse; margin-left: auto; margin-right: auto;">';
                echo '<tr><td style="text-align: center; vertical-align: middle;"><strong>Magic Square</strong></td></tr>';
                echo '<tr><td style="text-align: center; vertical-align: middle;">Enter an odd number &nbsp;<input type=text name=number>&nbsp;';
                echo '<input class="btn btn-secondary" type="submit" value="Generate Magic Square"></td></tr>';
                echo '</table>';
                echo '</form>';
                if (count($_POST) > 0)
                    {
                        $n = (int)(isset($_POST['number']) ? $_POST['number'] : 3);

                        if ($n<3)
                        {
                            $n = 3;
                            print_magicsquare($n);
                            echo "INVALID! 3 was the minimum input, input became 3 as default";
                        }
                        else if ($n > 2 && $n % 2 == 1)
                        {
                        print_magicsquare($n);
                        }
                        else if ($n > 2 && $n % 2 == 0)
                        {
                            doublyEven($n);
                        }
                    }

                function print_magicsquare($n)
                {
                    $magicSquare;
                    for ($i = 0; $i < $n; $i++)
                        for ($j = 0; $j < $n; $j++)
                            $magicSquare[$i][$j] = 0;
                 
                    $i = (int)$n / 2;
                    $j = $n - 1;
                 
                    for ($num = 1; $num <= $n * $n; )
                    {
                         
                        if ($i == -1 && $j == $n) 
                        {
                            $j = $n-2;
                            $i = 0;
                        }
                        else
                        {
                            if ($j == $n)
                                $j = 0;
                 
                            if ($i < 0)
                                $i = $n-1;
                        }
                         
                        if ($magicSquare[$i][$j]) 
                        {
                            $j -= 2;
                            $i++;
                            continue;
                        }
                        else
                        {
                            $magicSquare[$i][$j] = $num++; 
                 
                        $j++; $i--; 
                        }
                    }
                 
                    echo "The Magic Square for n = " . $n;
                         
                    echo "<br>";
                    echo '<table border=1 class="table table-success table-striped" style="width: 50%;margin-left: auto; margin-right: auto;">';
                        for ($i = 0; $i < $n; $i++)
                        {   
                            echo '<tr>';
                            for ($j = 0; $j < $n; $j++)
                                echo '<td>' .$magicSquare[$j][$i] . '</td>';
                            echo '</tr>';
                            echo "\n";
                        }
                    echo '</table>';
                }



                


                function doublyEven($n) 
                {  
                    $arr = array_fill(0, $n, 
                    array_fill(0, $n, 0)); 
  
    
                    for ( $i = 0; $i < $n; $i++) 
                        for ( $j = 0; $j < $n; $j++) 
                             $arr[$i][$j] = ($n * $i) + $j + 1; 
      
    
                    for ($i = 0; $i < $n / 4; $i++) 
                        for ($j = 0; $j < $n / 4; $j++) 
                            $arr[$i][$j] = ($n * $n + 1) -  $arr[$i][$j]; 
      
    
                    for ($i = 0; $i < $n / 4; $i++) 
                        for ($j = 3 * ($n / 4); $j < $n; $j++) 
                            $arr[$i][$j] = ($n * $n + 1) -  $arr[$i][$j]; 
      
    
                    for ($i = 3 * $n / 4; $i < $n; $i++) 
                        for ($j = 0; $j < $n / 4; $j++) 
                            $arr[$i][$j] = ($n * $n + 1) -  $arr[$i][$j]; 
      
    
                    for ($i = 3 * $n / 4; $i < $n; $i++) 
                        for ($j = 3 * $n / 4; $j < $n; $j++) 
                            $arr[$i][$j] = ($n * $n + 1) -  $arr[$i][$j]; 
  
    
                    for ($i = $n / 4; $i < 3 * $n / 4; $i++) 
                        for ($j = $n / 4; $j < 3 * $n / 4; $j++) 
                            $arr[$i][$j] = ($n * $n + 1) -  $arr[$i][$j]; 


                    echo "The Magic Square for n = " . $n;
  
                    echo '<table border=1 class="table table-success table-striped">';
                    for ($i = 0; $i < $n; $i++) 
                    { 
                        echo '<tr>';
                        for ($j = 0; $j < $n; $j++) 
                        echo '<td>' .$arr[$i][$j] . '</td>'; 
                        echo '</tr>';
                        echo "\n"; 
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
