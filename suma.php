<?php 
//foreach 1 array

$v = [1,5];

$suma = 0;
foreach ($v as $f)
{$suma = $suma + $f;}

echo $suma;

//foreach arrays multiples

/*$w = 
[
   [1,5],
   [4,6]

];

$suma = 0;
foreach ($w as $f){
    foreach ($f as $g)
{$suma = $suma + $g;}
}
echo $suma; */


$w = 
[
   [1,5],
   [4,6]

];

$suma = 0;
for($i = 0; $i < count ($w); $i++){
    for($o = 0; $o < count ($w[$i]); $o++){
$suma = $suma + $o;}
}
echo $w[$o][$i]; 
?>