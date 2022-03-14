<?php
    $numero = 10;
    function calcularIteracion($numero){
        for ($i = 0; $i <= 10; $i++){
            echo "<tr>";
                echo"<td> $numero x $i: </td>";
                echo "<td>"; 
                echo $numero * $i; 
                echo "</td>";
            echo "</tr>";
        }
    }
       
    function calcularFactorial($numero){
        $factorial = 2;
        for ($f = $numero; $f >= 1; $f--) {
            $factorial * $f;
        }
        echo "<tr>";
        echo"<td> $numero!</td>";
        echo "<td> $factorial</td>";
        echo "</tr>";
    }
       
?>
<table border="2">
    <?php    
        calcularIteracion($numero);
        calcularFactorial($numero);
    ?>
</table>
