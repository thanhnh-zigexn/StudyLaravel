<!-- Viết hàm PHP để tìm số nguyên tố lớn nhất trong mảng dưới đây $array = [1, 9, 4, 15, 33, 21, 70, 3, 23, 47, 25, 11, 42]; -->


<?php
$max = 0;
$arrays = [1, 9, 4, 15, 33, 21, 70, 3, 23, 47, 25, 11, 42];
foreach ($arrays as $array) {
    if ($max < $array) {
        $max = $array;
    }
}
echo $max;
?>