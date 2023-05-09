<?php
fscanf(STDIN, "%d %d", $a, $b);
$three = $a * substr((string)$b, 2);
$four = $a * substr((string)$b, 1, 1);
$five = $a * substr((string)$b, 0, 1);
$six = $three + (int)$four * 10 + (int)$five * 100;
fprintf(STDOUT,"%d\n%d\n%d\n%d", $three, $four, $five, $six);