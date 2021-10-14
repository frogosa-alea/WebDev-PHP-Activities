<?php

    // Define Constants
    define("NAME","Alea B. Frogosa");
    define("STUDENT_NUMBER","2018-01383-MN-0");
    define("ADDRESS","80 J Sto Nino St., Holy Spirit, QC");
    define("EMAILADDRESS","benitezalea.f@gmail.com");
    define("CONTACT_NUMBER","+639478481554");
    define("WEB_ADDRESS","localhost/Frogosa");
    define("LAB_TITLE","Laboratory Activity No. 3");
    define("DESCRIPTION","Working with Data Types and Operators");
    //Variables
    $myInteger = 10;
    $myFloat = 10.57;
    $myString = '10 apples';
    $myBoolean = true;
    $myNull = null;
    $myArray = array(1,2,3)
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
            <div class="main-table">
                <table class="table-one table table-success table-striped">
                    <tr><th colspan="2"> 1. PHP Data Types </th></tr>
                    <tbody>
                        <tr>
                            <td>1a. $myinteger</td>
                            <td><?php echo var_dump($myInteger); ?></td>
                        </tr>
                        <tr>
                            <td>1b. $myfloat</td>
                            <td><?php echo var_dump($myFloat); ?></td>
                        </tr>
                        <tr>
                            <td>1c. $mystring</td>
                            <td><?php echo var_dump($myString); ?></td>
                        </tr>
                        <tr>
                            <td>1d. $myboolean</td>
                            <td><?php echo var_dump($myBoolean); ?></td>
                        </tr>
                        <tr>
                            <td>1e. $mynull</td>
                            <td><?php echo var_dump($myNull); ?></td>
                        </tr>
                        <tr>
                            <td>1f. $myarray</td>
                            <td><?php echo var_dump($myArray); ?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-two table table-success table-striped">
                    <tr><th colspan="2"> 2. PHP Arithmetic Operators </th></tr>
                    <tbody>
                        <tr>
                            <td>$myinteger + 10</td>
                            <td><?php echo var_dump($myInteger + 10); ?></td>
                        </tr>
                        <tr>
                            <td>2b. $myinteger – 5</td>
                            <td><?php echo var_dump($myInteger - 5); ?></td>
                        </tr>
                        <tr>
                            <td>2c. $myinteger * 2</td>
                            <td><?php echo var_dump($myInteger * 2); ?></td>
                        </tr>
                        <tr>
                            <td>2d. $myinteger / 3</td>
                            <td><?php echo var_dump($myInteger / 3); ?></td>
                        </tr>
                        <tr>
                            <td>2e.$myboolean + 1</td>
                            <td><?php echo var_dump($myBoolean + 1); ?></td>
                        </tr>
                        <tr>
                            <td>2f. $mystring * 2</td>
                            <td><?php echo var_dump($myString * 2); ?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-three table table-success table-striped">
                    <tr><th colspan="2"> 3. PHP Bitwise Operators </th></tr>
                    <tbody>
                        <tr>
                            <td>3a. $myinteger & 8</td>
                            <td><?php echo var_dump($myInteger & 8); ?></td>
                        </tr>
                        <tr>
                            <td>3b. $myinteger | 8</td>
                            <td><?php echo var_dump($myInteger | 8); ?></td>
                        </tr>
                        <tr>
                            <td>3c.$myinteger << 1</td>
                            <td><?php echo var_dump($myInteger << 1); ?></td>
                        </tr>
                        <tr>
                            <td>3d. $myinteger >> 1</td>
                            <td><?php echo var_dump($myInteger >> 1); ?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-four table table-success table-striped">
                <tr><th colspan="2"> 4. PHP Comparison Operators </th></tr>
                    <tbody>
                        <tr>
                            <td>4a. $myinteger == 10</td>
                            <td><?php echo var_dump($myInteger == 10); ?></td>
                        </tr>
                        <tr>
                            <td>4b. $myinteger > 10</td>
                            <td><?php echo var_dump($myInteger > 10); ?></td>
                        </tr>
                        <tr>
                            <td>4c. $myinteger >= 10</td>
                            <td><?php echo var_dump($myInteger >= 10); ?></td>
                        </tr>
                        <tr>
                            <td>4c. $myinteger >= 10</td>
                            <td><?php echo var_dump($myInteger >= 10); ?></td>
                        </tr>
                        <tr>
                            <td>4e. $myinteger <= 20</td>
                            <td><?php echo var_dump($myInteger <= 20); ?></td>
                        </tr>
                        <tr>
                            <td>4f. $myinteger == $mystring</td>
                            <td><?php echo var_dump($myInteger == $myString); ?></td>
                        </tr>
                        <tr>
                            <td>4g. $myinteger === $mystring</td>
                            <td><?php echo var_dump($myInteger === $myString); ?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-five table table-success table-striped">
                    <tr><th colspan="2"> 5. PHP Logical Operators </th></tr>
                    <tbody>
                        <tr>
                            <td>5a. $myinteger >= 10 and $myinteger <= 20</td>
                            <td><?php echo var_dump($myInteger >= 10 and $myInteger <= 20); ?></td>
                        </tr>
                        <tr>
                            <td>5b. $myinteger == 10 or $myinteger == 20</td>
                            <td><?php echo var_dump($myInteger == 10 or $myInteger == 20); ?></td>
                        </tr>
                        <tr>
                            <td>5c. $myinteger == 10 xor $myinteger == 20</td>
                            <td><?php echo var_dump($myInteger == 10 xor $myInteger == 20); ?></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            </article>
        </section>
        <!-- FOOTER -->
        <?php include("sections/footer.php");?>
    </body>
</html>
