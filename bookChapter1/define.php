<html>
    <head>
        <title>define</title>
    </head>
    <body>
        <?php
            define('E_CODE', 1, false);
            echo error_reporting(). "<br>";
            echo E_CODE. "<br>";
            echo PHP_OS. "<br>";
            echo PHP_VERSION. "<br>";
            echo PHP_MAJOR_VERSION. "<br>";
            echo PHP_MINOR_VERSION. "<br>";
            echo PHP_RELEASE_VERSION. "<br>";
            echo PHP_VERSION_ID. "<br>";
            echo PHP_ZTS. "<br>";
            echo PHP_DEBUG. "<br>";
        ?>            
    </body>
</html>
