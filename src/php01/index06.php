<?php

function add($a, $b){
    $sum = $a + $b;
    return $sum;
}

$sum = add(2,3);
echo $sum;
echo "<br />";

function result($score1, $score2, $score3){
    $total = $score1 + $score2 + $score3;
    if( $total > 210) {
        $kekka = "合計点は".$total."なので合格です";
        return $kekka;
    }else{
        $kekka = "合計点は".$total."なので不合格です";
        return $kekka;
    }
}

$gouhi = result(80,95,40);
echo $gouhi;
echo "<br />";

function triangle($a,$b){
    $result = $a * $b /2;
    return $result;
}

function square($a,$b){
    $result = $a * $b;
    return $result;
}

function trapezoid($a,$b,$c){
    $result = ($a + $b) * $c / 2;
    return $result;
}

$sankaku = triangle(5,8);
echo $sankaku."<br />";

$shikaku = square(4,6);
echo $shikaku."<br />";

$daikei = trapezoid(2,3,6);
echo $daikei."<br />";


function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);