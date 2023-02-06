<?php
if (isset($_POST['submit'])) {
    $a = $_POST['numbers1'];
    $b = $_POST['numbers2'];

    $num = 1;
    $array = [];
    $array1 = [];

    if ($a > $b) {$max = $a; }
    else { $max = $b; }
    $num = $max;
    while ($num) {
        if ($a % $num == 0) {
            $array[] = $num; }
        if ($b % $num == 0) {
            $array1[] = $num;
        }
        --$num;
    } $bmm = array_intersect($array, $array1); echo "بزرگترین مقسوم علیه مشترک".current($bmm) . '<br>';
    $num = $max;
    while ($num) {
        $array[] = $a * $num; $array1[] = $b *$num;
        --$num;

    } $kmm = array_intersect($array, $array1); echo "کوجکترین مضرب مشترک :" . end($kmm) . "<br>";}
?>
