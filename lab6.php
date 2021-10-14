<?php

    // Define Constants
    define("NAME","Alea B. Frogosa");
    define("STUDENT_NUMBER","2018-01383-MN-0");
    define("ADDRESS","80 J Sto Nino St., Holy Spirit, QC");
    define("EMAILADDRESS","benitezalea.f@gmail.com");
    define("CONTACT_NUMBER","+639478481554");
    define("WEB_ADDRESS","localhost/Frogosa");
    define("LAB_TITLE","Laboratory Activity No. 6");
    define("DESCRIPTION","String Functions in PHP");

    
    
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
            <div class="display-lab-six">
                <?php
                    $string = isset($_POST['string']) ? htmlspecialchars($_POST['string']) : null;
                    echo '<form method=post action="">';
                    echo '<h1>String Functions in PHP</h2>';
                    echo '<input type="text" name="string" value="', $string, '" size=100 required/><br /><br />';
                    echo '<input class="btn btn-outline-success" type="submit" value="Apply Functions">&nbsp;';                   
                    echo '<input class="btn btn-outline-success" type="reset" value="Reset"" ><br/><br/>';
                    echo '</form>';
                    
                ?>
                </div>
                <div class="display-lab-six-output">
                    <table class="output-table table table-success table-striped">
                        <tr><th> No. </th> <th> Description </th> <th> Output </th></tr>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Original value of $string</td>
                                <td>
                                    <?php echo '*' ,$string ,'*'; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Number of characters</td>
                                <td>
                                    <?php echo '*' ,strlen($string) ,'*';?>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Number of words</td>
                                <td>
                                    <?php echo '*' , str_word_count($string) ,'*'; ?>
                                </td>
                                
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>4.</td>
                                <td>First character to uppercase</td>
                                <td>
                                    <?php echo '*' , ucfirst(strtolower($string)),'*'; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>First character of each word to uppercase</td>
                                <td>
                                    <?php echo '*' , ucwords($string) ,'*'; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>To lowercase</td>
                                <td>
                                    <?php echo '*' , strtolower($string) ,'*'; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>To uppercase</td>
                                <td>
                                    <?php echo '*' , strtoupper($string) ,'*'; ?>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>8.</td>
                                <td>Without leading spaces</td>
                                <td>
                                    <?php echo '*' ,ltrim($string) ,'*'; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Without trailing spaces</td>
                                <td>
                                    <?php echo '*' ,rtrim($string) ,'*'; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>Without leading and trailing spaces</td>
                                <td>
                                    <?php echo '*' ,trim($string) ,'*'; ?>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>11.</td>
                                <td>MD5 value of $string</td>
                                <td>
                                    <?php echo '*' ,md5($string) ,'*'; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>12.</td>
                                <td>Base64 value of $string</td>
                                <td>
                                    <?php echo '*' ,base64_encode($string),'*'; ?>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>13.</td>
                                <td>First 16 characters</td>
                                <td>
                                    <?php echo '*' ,substr($string,0,16),'*'; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>14.</td>
                                <td>Last 4 characters</td>
                                <td>
                                    <?php echo '*' ,substr($string,-4),'*'; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>15.</td>
                                <td>4 characters starting from the 20'th position</td>
                                <td>
                                    <?php echo '*' ,substr($string,20,4),'*'; ?>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>16.</td>
                                <td>Position of the word "guide"</td>
                                <td>
                                    <?php 
                                        echo '*';
                                        var_dump(stripos($string,'guide')); 
                                        echo '*';
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>17.</td>
                                <td>Position of the word UE</td>
                                <td>
                                    <?php
                                        echo '*';
                                        var_dump(strpos(utf8_encode($string), 'UE')); 
                                        echo '*';
                                    ?>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>18.</td>
                                <td>"HTML" word in uppercase</td>
                                <td>
                                <?php
                                    $lower= strtolower($string);
                                    $newString=str_replace("html","HTML","$lower");
                                    echo '*' , $newString,'*';
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>19.</td>
                                <td> &lt;INPUT&gt; word in uppercase </td>
                                <td>
                                    <?php
                                        $lower= strtolower($string);
                                        $newString=str_replace("<input>","<INPUT>","$lower");
                                        echo '*' , $newString,'*';
                                    ?>
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>20.</td>
                                <td>Strings converted to array</td>
                                <td>
                                    <?php
                                        $arr = explode(' ',$string);
                                        foreach($arr as $item){ 
                                        echo '*' , $item, '*' . "<br>"; 
                                        }
                                    ?>
                                </td>
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
