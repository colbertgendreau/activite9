<?php
$num = [1,2,3,4,5,6,7,8,9,10,11,12,13];
$suits = ["♦","♣","♥","♠"];

for ($i=0;$i<count($suits);$i++) {
    for ($j=0;$j<count($num);$j++) {
        $deck[] = $num[$j]."-".$suits[$i];
    }
}
$firsthalf = array_slice($deck, 0, count($deck) / 2);
$secondhalf = array_slice($deck, count($deck) / 2);
for ($i=0;$i<count($deck)/2;$i++) {
    $newdeck[] = $firsthalf[$i];
    $newdeck[] = $secondhalf[$i];
}
$x = 0;
for ($i=0;$i<count($suits);$i++) {
    for ($j=0;$j<count($num);$j++) {
        echo $newdeck[$x]." ";
        $x += 1;
    }
    echo "<br>";
}

?>