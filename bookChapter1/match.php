<html>
    <head>
        <title>match</title>
    </head>
    <body>
        <?php
            $v = "EDNO";
            echo match ($v){
                0 => 'FOO',
                "EDNO" => 'BAR',
                2 => 'BAZ',
            }        
        ?>
    </body>
</html>

