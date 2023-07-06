<html>
    <head>
        <title>switch-break</title>
    </head>
    <body>
        <?php
            $year = 2011;
            switch ($year){
                case 2010 : echo "Year = 2010" . "<br>";
                case 2011 :
                    echo "Year = 2011". "<br>";
                    break;
                case 2012 : echo "Year = 2012" . "<br>";
                case 2013 : echo "Year = 2013" . "<br>";
                default : echo "Unknown year" . "<br>";
            }
            
        ?>
    </body>
</html>

