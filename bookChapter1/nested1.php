<html>
    <head>
        <title>nested</title>
    </head>
    <body>
        <?php
        $i = 1;
        echo "<PRE>\n";
        while ($i < 10){
            $k = 0;
            // вложен цикъл
            for (;$k <= $i; $k++){
                echo $k;
            }
            echo "\n";
            $i++;
        }
        ?>
    </body>
</html>

