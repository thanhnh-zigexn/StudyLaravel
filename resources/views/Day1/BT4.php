
<!-- Viết PHP script để thay thế từ trong chuỗi bằng từ khác.
$string = "Học Lập trình không vui"; -->

<?php
$string = "Học Lập trình không vui";
echo str_replace("không vui","vui Lắm","Học Lập trình không vui");
?>