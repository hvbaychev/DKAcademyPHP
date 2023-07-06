<html>
    <head>
        <title>referention</title>
    </head>
    <body>
        <?php
        $a = 1;
        $la = "a";
        
        echo $$la; // 1
        echo $la; // a
        
        ?>
    </body>
</html>

