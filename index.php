<!DOCTYPE html>
<html>
<head>
    <title>9 ЛР Гладышев</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите число x:</p>
        <input type="text" name="x">
        <p>Введите число n:</p>
        <input type="text" name="n">
        <input type="submit" value="OK">
    </form>
    <?php
        $x=$_POST["x"];
        $n=$_POST["n"];
        $b = 0;
        $c = 0;
        $cfac=0;
        if ($n==1) {
            $b=1;
        }
        else{
            for($a=0; $a<$n; $a++){
                $c=$a;
                if ($c!=0) {
                    $cfac = 1;
                    for ($i=1; $i<=$c; $i++) {
                        $cfac=$i*$cfac;
                    }
                }
                else{
                    $cfac=1;
                }
                    
                $b=$b+((((-1)**$a)*($x**($a)))/($cfac));
                    }
            }
        echo $b;
    ?>
</body>
</html>