<?php
fscanf(STDIN, "%d", $a);  // 총 금액
fscanf(STDIN, "%d", $b);  // 구매한 물건의 종류 수
$e = 0;
for ($i=0; $i < $b; $i++) {
    fscanf(STDIN, "%d %d", $c, $d);
    $e = $e + ($c * $d);
}
if($a === $e)
{
    fprintf(STDOUT, 'Yes');
}
else
{
    fprintf(STDOUT, 'No');
}

// fscanf(STDIN, "%d %d %d", $a, $b, $c);
// fprintf(STDOUT,"%d", $a + $b + $c);
?>
