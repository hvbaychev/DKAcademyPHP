<html>
    <head>
        <title>check set or get</title>
    </head>
    <body>
        <?php
        if (isset($_GET['page'])){
            echo 'say hello';
        }
        else{
            echo 'Variable page is not set';
        }
        ?>
    </body>
</html>
