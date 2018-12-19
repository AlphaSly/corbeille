<?php
$par = "tHIS STATEMENT IS FALSE! <br />";
$par = ucfirst($par);
echo $par;

$ad = 'nEW mISSION: rEFUSE tHIS mISSION! <br />';
$ad = ucwords($ad);
echo $ad;

$o = 'DOES A SET OF ALL SETS CONTAIN ITSELF?';
$o = str_replace(' ','_',$o);
echo $o . '<br />';

$xe = 'WHICH ONE CAME FIRST EGG OR CHICKEN? ';
echo $xe;
$xe = str_word_count($xe,0);
echo $xe;
?>
