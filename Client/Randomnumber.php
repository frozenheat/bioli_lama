<?php

$array_word=array('0','1','2','3','4','5','6','7','8','9');

shuffle($array_word);
reset($array_word);

$no=0;
foreach($array_word as $line)
{
@$acak.=strtoupper($line);
$no++;
if (($no >= 5)) break;
}
//echo "$acak";
?>