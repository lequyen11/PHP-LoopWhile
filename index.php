<?php

//  11.1: Viết chương trình tính tổng các số từ 1 đến 100

$sum = 0;
$i = 1;
while($i <= 100) {
    $sum += $i;
    $i++;
}

echo ("11.1: Tổng các số từ 1 => 100 = ".$sum);
echo "<br>-----<br>";



// 11.2: Viết chương trình nhập vào một số tự nhiên n. Tính tổng các số chia hết cho 3 bé hơn.


$n = 20;
$sum2 = 0;
$i = 1;
while($i <= $n) {
    if($i % 3 == 0 && $i < $n) {
        $sum2 += $i;
    }
    $i++;
}

echo ("11.2: Tổng các số chia hết cho 3 bé hơn " . $n . " = " .$sum2);
echo "<br>-----<br>";

// 11.3: Viết chương trình in ra 100 số Fibonacci đầu tiên.


function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;

    if($n < 0) {
        return -1;
    } else if($n == 0 || $n == 1) {
        return $n;
    }else {
        for($i = 2; $i < $n; $i++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}

echo ("100 số đầu tiên của dãy số fibonacci:<br> ");
$i = 0;
while($i < 100) {
    echo (fibonacci ( $i ) . ", ");
    $i++;
}
echo "<br>----<br>";


// 11.4: Viết chương trình kiểm tra một số nguyên n có phải là số polinom.


 function isPolinom($n) {
     $n = (string)$n; // Chuyển số nguyên thành chuỗi để dễ xử lý
     $length = strlen($n); // Độ dài của chuỗi
 
     // Sử dụng hàm str_split để chuyển chuỗi thành mảng ký tự
     $characters = str_split($n);
 
     // Sử dụng hàm array_reverse để đảo ngược mảng
     $reversedCharacters = array_reverse($characters);
 
     // Sử dụng hàm implode để nối mảng ký tự thành chuỗi và so sánh với chuỗi gốc
     $reversedN = implode('', $reversedCharacters);
 
     if ($n === $reversedN) {
         return true; // Nếu bằng nhau, thì đây là số palindromic
     } else {
         return false; // Nếu không bằng nhau, thì đây không phải số palindromic
     }
 }
 
 // Số nguyên cần kiểm tra
 $n = 148841;
 
 if (isPolinom($n)) {
     echo "$n là số polinom.";
 } else {
     echo "$n không phải là số polinom.";
 }

 
echo "<br>";


// 11.5: Viết chương trình liệt kê các số từ 100 đến 999 có tổng các chữ số chia hết cho 3.


 $i = 100;
while($i <= 900) {
    if($i % 3 == 0) {
        echo ($i);
        echo ("<br>");
    }
    $i++;
}
?>