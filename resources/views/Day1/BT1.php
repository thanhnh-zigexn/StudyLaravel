<?php					
$a = array(array(1,2,3),array(4,5,6));					
$b = array('duy','linh');					
$c = array();					
					
for($i = 0 ; $i < count($a); $i ++ )					
{					
$item = $a[$i];					
$item[] = $b[$i];					
$c[] = $item;					
}					
					
function printArray($array) {					
	foreach($array as $item) {				
	echo $item;	 			
}					
}					
					
foreach($c as $c_item) {					
	printArray($c_item);				
echo          "<br/>";					
					
}					
					
					
?>					
					
					
					
					
					