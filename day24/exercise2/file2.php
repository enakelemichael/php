<?php
echo "Value of A: ".$a = $_POST['A'];
echo "<br> Value of B: ".$b = $_POST['B'];
echo "<br> Value of C: ".$c = $_POST['C'];

if ($a > $b && $a > $c)
{
echo "<br> a is bigger";
}  elseif($b > $a && $b> $c)
{
    echo "<br> b is bigger";
}else{
    echo "<br> c is bigger";
}
?>