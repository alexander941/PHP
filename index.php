<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
     
    </head>
    <body>
        <table>
            
            <?PHP

            for($f=0;$f<10;$f++){

                echo '<tr>';

                for($k=0;$k<10;$k++) {
                
                    echo '<td style="color:'.($k % 2 ? 'red' : 'black').'">'.($f*10+$k+1).'<td>';
                 
                }
                echo '</tr>';
            }

            ?>
        </table> 
        
    </body>
</html>



