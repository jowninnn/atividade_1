
<?php
$num = 10;
$div = 0;
$i = 1;


while ($i <= $num) {
    if ($num % $i == 0) {
        $div = $div + 1;
    }
    $i = $i + 1;
}







if ($div == 2) {
    echo $num . ' ele é primo';
} else {
    echo $num . 'num é primo';
}
?>