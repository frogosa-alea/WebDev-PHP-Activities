<?php

    // Define Constants
    define("NAME","Alea B. Frogosa");
    define("STUDENT_NUMBER","2018-01383-MN-0");
    define("ADDRESS","80 J Sto Nino St., Holy Spirit, QC");
    define("EMAILADDRESS","benitezalea.f@gmail.com");
    define("CONTACT_NUMBER","+639478481554");
    define("WEB_ADDRESS","localhost/Frogosa");
    define("LAB_TITLE","Laboratory Activity No. 4");
    define("DESCRIPTION","Functions & Control Structures – Number to Words");

    //FUNCTION    
    $number = (int)(isset($_POST['number']) ? $_POST['number'] : 0);
    if (($number < 1) or ($number > 999)) {
        if (count($_POST) > 0) {
            $words = 'Sorry, I can process 1 to 999 only!';
        }
        else {
            $words = '&nbsp;';
        }
    }
    else {
        $words = $number . ' in words is ' . NumberToWords($number);
    }

    // CONVERSION
    function NumberToWords($number) {
        $words = '';
        $hundreds = floor($number / 100);
        $tens = floor($number % 100);
        $ones = floor($tens % 10);
        $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
            'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
        );
        $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
        if($number > 19 && $number < 100 ){
            $words .= $list2[(int)($number/10)] . " ";
            $words .= $list1[$ones];
        }
        elseif($number > 100 && $number % 100){
            $words .= NumberToWords((int)($hundreds % 10)); 
            $words .= " hundred "; 
            $words .= NumberToWords(($number % 100), "");
        }
        elseif($number % 100 == 0){
            $words .=$list1[(int)($hundreds)] . " hundred";
        }
        else{
            $words .= $list1[$number];
        }
        return $words;
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
            <form action="" method="post" >
                <table class="table table-success table-striped" cellpadding=4 border=1 style="border-collapse:collapse; text-align:center;">
                    <tr><td style="text-align: center; vertical-align: middle;"><strong>Number to Words</strong></td></tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle;">Enter a number (1-999)
                        <input type=text name=number>
                        <input class="btn btn-secondary" type="submit" value="Convert to words"></td>
                    </tr>
                    <tr><td style="text-align: center; vertical-align: middle;"><strong><?php echo $words; ?></strong></td></tr>
                </table>
            </form>
            </article>
        </section>
        <!-- FOOTER -->
        <?php include("sections/footer.php");?>
    </body>
</html>
