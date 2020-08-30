<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        $a = mt_rand(0, 50);
        echo $a;

        for ($i = 1; $i <= $a; $i++) {
            if ($a % $i == 0) {
                echo $i . "<br>";
            }
        }
    ?>   
    </body>
</html>
