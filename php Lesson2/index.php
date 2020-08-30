<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
     
    </head>
    <body>
    <?php


        for ($value = 2; $value <= 50; $value++) {
            if ($value % 2 != 0)
                continue;
                
            print "$value ";
        }
        
        echo "<br/>";

        $value = 2;
        while($value <= 50) {
            if ($value % 2 != 0) {
                $value++;
                continue;
            }

            print "$value ";
            $value++;
        }
    ?>
        
    </body>
</html>



