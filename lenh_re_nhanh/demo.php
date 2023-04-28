<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Demo php lệnh rẽ nhánh</title>

</head>
<body>
	<!-- if else -->
	<?php 
	$a = 15;
	$b = 20;
	// $c = 30;
	if ($a > $b) {
		echo "Số a lớn hơn số b";
	}else if ($a == $b) {

		echo "Số a = số b";
	}
	else {
		echo "Số a không lớn hơn b";
	}
	?>

	<!-- if else lồng nhau -->
	<?php 
		$a = 95;
		$b = 50;
		$c = 30;

		if($a > $b && $a > $c) {	
			echo "Max là số a = $a";	
		}else if($b > $c && $b > $a) {
			echo "Max là số b = $b";
		}else {
			echo "Max c = $c";
		}

		echo '<br />';
		// switch case
		$a = 1;
		switch ($a) {
			case 1:
				// code...
				echo 'Số 1';
				break;
			case 2:
				echo 'Số 2';
				break;
			default:
				// code...
				echo 'Không hợp lệ Số nhỏ hơn hoặc bằng 5';
				break;
		}

		echo '<br />';

		$year = date('d-m-Y');

		echo $year;
	 ?>
	 


</body>
</html>
