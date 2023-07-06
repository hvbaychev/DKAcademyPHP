<?php

echo date("d/m/Y");
echo 'File index.php was last changed at' . date("d/m/Y", filectime("index.php"));  // Първото извикване на фунцкията показва текущото време в указаният формат, а второто - датата на последното изменение на файла.