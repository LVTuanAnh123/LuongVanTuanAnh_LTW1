<?php
// 5. Comment 1 dong: Bai thuc hanh Lab 1 - Cau 1
/* 
   Comment nhieu dong:
   Thuc hanh lenh echo, khai bao bien, hang so va phan biet nhay don/nhay kep
*/

// 1. Su dung echo de in ra cac thong tin truc tiep
echo "<h3>1. Thong tin ca nhan:</h3>";
echo "Ho ten: Luong Van Tuan Anh <br>";
echo "Ngay sinh: 08/02/2005 <br>";
echo "Ma so sinh vien: 2125110137 <br>";

// 2. Khai bao 4 bien va in gia tri
echo "<h3>2. Thong tin tu bien:</h3>";
$hoTen = "Luong Van Tuan Anh";
$mssv = "2125110137";
$sdt = "0357284489";
$ngaySinh = "08/02/2005";

echo "Ho ten: $hoTen <br>";
echo "MSSV: $mssv <br>";
echo "SDT: $sdt <br>";
echo "Ngay sinh: $ngaySinh <br>";

// 3. Khai bao hang so ket noi CSDL
echo "<h3>3. Hang so ket noi CSDL:</h3>";
define("HOST", "localhost");
define("DATABASE", "ql_banhang");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";

// 4. Su khac nhau giua chuoi dung dau nhay kep (" ") va nhay don (' ')
echo "<h3>4. Phan biet nhay kep va nhay don:</h3>";
$mon = "Lap trinh Web 1";
echo "Nhay kep (hieu bien): Mon hoc la $mon <br>";
echo 'Nhay don (khong hieu bien): Mon hoc la $mon <br>';
?>
