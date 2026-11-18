<?php
// 1. Khai bao hai so nguyen va thuc hien cac phep toan
echo "<h3>1. Phep toan so hoc:</h3>";
$a = 15; 
$b = 4;
echo "Cong ($a + $b): " . ($a + $b) . "<br>";
echo "Tru ($a - $b): " . ($a - $b) . "<br>";
echo "Nhan ($a * $b): " . ($a * $b) . "<br>";
echo "Chia ($a / $b): " . ($a / $b) . "<br>";
echo "Chia lay du ($a % $b): " . ($a % $b) . "<br>";

// 2. So sanh so nguyen (int) va chuoi so (string)
echo "<h3>2. Toan tu so sanh:</h3>";
$so = 10; 
$chuoi = "10";
echo "== : "; var_dump($so == $chuoi); echo "<br>";
echo "=== : "; var_dump($so === $chuoi); echo "<br>";
echo "!= : "; var_dump($so != $chuoi); echo "<br>";
echo "<> : "; var_dump($so <> $chuoi); echo "<br>";
echo "!== : "; var_dump($so !== $chuoi); echo "<br>";
// Khac nhau: ==, !=, <> chi so sanh gia tri; === va !== so sanh ca gia tri lan kieu du lieu.

// 3. Phep tang truoc (++$x) va tang sau ($x++)
echo "<h3>3. Tang truoc va tang sau:</h3>";
$x = 5;
echo "Truoc ++\$x: $x | Trong luc chay: " . (++$x) . " | Sau: $x <br>";

$y = 5;
echo "Truoc \$y++: $y | Trong luc chay: " . ($y++) . " | Sau: $y <br>";
// Khac nhau: ++$x tang gia tri roi moi in; $x++ in gia tri hien tai roi moi tang.

// 4. Noi chuoi bang toan tu . va .=
echo "<h3>4. Noi chuoi:</h3>";
$s1 = "Xin chao "; 
$s2 = "PHP";
echo "Dung (.): " . ($s1 . $s2) . "<br>";
$s1 .= $s2;
echo "Dung (.=): $s1 <br>";
// Khac nhau: (.) noi va tra ve chuoi moi; (.=) noi truc tiep va ghi de vao bien ben trai.

// 5. Dem so luong ky tu voi strlen() va mb_strlen()
echo "<h3>5. Dem ky tu:</h3>";
echo "strlen (khong dau): " . strlen("Lap trinh") . "<br>";
echo "mb_strlen (co dau): " . mb_strlen("Lập trình", "UTF-8") . "<br>";
// Khac nhau: strlen dem theo byte (sai voi tieng Viet co dau); mb_strlen dem dung so ky tu UTF-8.

// 6. Chuyen chuoi thanh chu in hoa va chu thuong
echo "<h3>6. Hoa va thuong:</h3>";
$txt = "Hoc PHP co ban";
echo "strtoupper: " . strtoupper($txt) . "<br>";
echo "strtolower: " . strtolower($txt) . "<br>";
// Khac nhau: strtoupper/strtolower chi doi chu khong dau; mb_strtoupper/mb_strtolower doi duoc ca tieng Viet co dau.

// 7. Ep kieu chuoi ve int va hien thi bang var_dump()
echo "<h3>7. Ep kieu int:</h3>";
$c1 = "123 abc"; 
$c2 = "abc 123";
var_dump((int)$c1); echo "<br>";
var_dump((int)$c2); echo "<br>";

// 8. Khai bao cac kieu du lieu va dung var_dump()
echo "<h3>8. Kieu du lieu:</h3>";
$kieuInt = 2026;
$kieuFloat = 9.5;
$kieuString = "LTW1";
$kieuBool = true;

var_dump($kieuInt); echo "<br>";
var_dump($kieuFloat); echo "<br>";
var_dump($kieuString); echo "<br>";
var_dump($kieuBool); echo "<br>";
?>
