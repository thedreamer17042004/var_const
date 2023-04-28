<!-- in ra các số chẵn nhỏ hơn 10  -->
<!-- in ra tổng các số nhỏ hơn 10 -->
<!-- in ra bảng cửa chương -->
<!-- in ra bàn cờ vua 8 cột 8 dòng và có hai màu đỏ và trắng -->
<?php 
	// tổng các số nhỏ hơn 10
	$a = 10;
	$sum = 0;
	for ($i = 0; $i < $a; $i++) {
		$sum += $i;
		
	}
	echo "$sum <br/>";

	echo 'hello world';

	// bảng cửa chương
	// $a = 9;
	// // $c = 0;
	// for ($i = 0; $i < 11 ; $i++) {
	// 	$c = $a * $i;
	// 	echo "$a * $i = $c <br />";
	// }

	echo "stop <br/>";
	for ($a = 1; $a < 11; $a++) {
		for ($i = 1; $i < 11 ; $i++) {
			$c = $a * $i;
			echo "$a * $i = $c <br />";
		}
	}

	
 ?>
 <!-- 2*1 = 2
 2*2 = 4 -->
 <!-- .$i là để nối chuỗi -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<h1>Bảng cửa chương</h1>
	<table border="1" cellspacing="0" cellpadding="10">
	<?php for($i = 1; $i < 11; $i++): ?>
		<tr>
			<?php for($j = 1; $j < 10; $j++): ?>
			<td><?php echo $j ?> x <?php echo $i ?> = <?php echo $i*$j ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
	</table>


	<h1>Vẽ Bàn cờ</h1>
	<table border="1" cellspacing="0" cellpadding="10">
	<?php for($k = 0; $k < 8; $k++): ?>
		<tr>
			<?php for($q = 0; $q < 8; $q++):
				$t = $q + $k;

			 ?>


			<?php if($t % 2 == 0){ ?>
			<td style="width: 50;height: 50;">
			</td>

			<?php } else { ?>
			<td style="width: 50;height: 50;background-color: black;">
			</td>

			<?php } ?>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
	</table>

</div>
</body>
</html>
