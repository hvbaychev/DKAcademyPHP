<html>
    <head>
        <title>text pole</title>
    </head>
    <body>
        <input type ="text" name ="mytext">
        <input type ="password" name ="pass">
        <input type ="hidden" name="hidden_text"><!-- dostyp do tqh mojem da poluchim chrez: -->
        
        <?php
            echo $_REQUEST['mytext'];
            echo $_REQUEST['pass'];
            echo $_REQUEST['hidden_text']
                    
        ?>
    </body>
</html>
