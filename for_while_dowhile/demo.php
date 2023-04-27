<?php 
// vòng lặp in php
/*
	vòng lặp là một cấu trúc cho phép lặp đi lặp lại một thao tác nào đó
*/
for ($i = 0; $i < 10; $i++) {
	echo "<li>Vòng lặp thứ $i</li>";
}

// while
$i = 0;
while ($i <= 10) {
	echo "<li>$i</li>";
    $i++;
}

// do-while
do{
	echo "<li>$i</li>";
}while($i<=10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>demo php page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<!-- nên viết như này nha nó dễ thôi -->
		<?php 
		   for ($i = 0; $i < 8; $i++) { ?>
			<div class="col-md-3">
				<h1>Vòng lặp thứ <?php echo $i; ?></h1>
			</div>
		    
		<?php } ?>
	</div>

	<!-- cách viết khác -->
	<div class="container">
		<!-- nên viết như này nha nó dễ thôi -->
		<?php 
		   for ($i = 0; $i < 8; $i++) : ?>
			<div class="col-md-3">
				<h1>Vòng lặp thứ <?php echo $i; ?></h1>
			</div>
		    
		<?php endfor; ?>
	</div>
</body>
</html>