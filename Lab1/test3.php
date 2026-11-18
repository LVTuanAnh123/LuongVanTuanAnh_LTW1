<?php
$str = "   Hoc lap trinh web 1 PHP va MySQL   ";

// 1. Loai bo khoang trang dau va cuoi bang trim()
echo trim($str) . "<br>";

// 2. Loai bo khoang trang ben trai ltrim() va ben phai rtrim()
echo ltrim($str) . "<br>";
echo rtrim($str) . "<br>";

// 3. Cat chuoi bang substr()
$chuoi = "Lap trinh web 1 voi PHP va MySQL co ban";
echo substr($chuoi, 0, 10) . "<br>"; // Lay 10 ky tu dau
echo substr($chuoi, 4) . "<br>";     // Lay tu ky tu thu 5 den het

// 4. Thay the chuoi bang str_replace()
echo str_replace("PHP", "Java", $chuoi) . "<br>";
?>
