<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CSS Template</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="styling/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="img-container">
                <img src="assets/icon.png" class="icon" alt="icon">
            </div>
            
                <table class="header-info">
                    <tr>
                        <td><?php echo NAME; ?></td>
                        <td><?php echo ADDRESS; ?></td>
                        <td><?php echo LAB_TITLE; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo STUDENT_NUMBER; ?></td>
                        <td><?php echo CONTACT_NUMBER; ?></td>                        
                        <td><?php echo DESCRIPTION; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo EMAILADDRESS; ?></td>
                        <td><?php echo WEB_ADDRESS; ?></td>
                    </tr>
                </table>
        </header>
    </body>
</html>
