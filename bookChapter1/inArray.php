<html>
    <head>
        <title>in array</title>
    </head>
    <body>
        <?php
            $validValues = ["foo", "boo", "baz"];
            $value = 0;
            var_dump(in_array($value, $validValues));
            //bool(false)???      
        ?>
    </body>
</html>
