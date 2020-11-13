<?php
$x = 5;
$y = 10;
$z = 0;

function myTest() {
  global $x, $y , $z;
  $z = $x + $y;
} 

myTest();  //เรียกใช้งานฟังก์ชั่น

echo $z; // ผลลัพธ์เท่ากับ 15
?>