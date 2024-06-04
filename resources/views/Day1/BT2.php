
<!-- // Sắp xếp tăng dần theo Value $array2=array("Linh"=>"1","Duy"=>"30","Minh"=>"31","Khoa"=>"99"); -->

<?php
$array2=array("Duy"=>"30","Minh"=>"31","Linh"=>"1","Khoa"=>"99");

asort($array2);
print_r($array2);
?>
<br/>
<!-- // Sắp xếp tăng dần theo Key $array2=array("Duy"=>"30","Khoa"=>"99","Linh"=>"1","Minh"=>"31"); -->

<?php
$array2=array("Duy"=>"30","Minh"=>"31","Linh"=>"1","Khoa"=>"99");

ksort($array2);
print_r($array2);
?>