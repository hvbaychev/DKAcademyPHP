<html>
    <head>
        <title>ternary operator</title>
    </head>
    <body>
        <?php
        //$action = isset($_POST['action']) ? $_POST['action'] : 'index'; // ?
        $action = $_POST['action'] ?? 'index'; // вършат една и съща работа
        
        ?>
    </body>
</html>

