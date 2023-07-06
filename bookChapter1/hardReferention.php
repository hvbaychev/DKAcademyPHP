<html>
    <head>
        <title>string</title>
    </head>
    <body>
        <?php
        $a = 1;
        $link_a = &$a;
        
        $link_a = 2;
        echo $a;
        ?>
    </body>
</html>

