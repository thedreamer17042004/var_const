<?php 
// in php số và chuỗi không cần đồng nhất dữ liệu
$mang = array('PHP', 'HTML', 'CSS', 125, 15.5, 'lavarel');
$mang1 =['PHP', 'HTML', 'CSS', 125, 15.5];

	// có hai loại mảng 
	// mảng số
	// mảng kết hợp hay còn gọi là chuỗi
$cat = [
	[
		'id' => 1,
		'name' => 'PHP Developer',
		'email' => 'demo@gmail.com',
	],

	[
		'id' => 2,
		'name' => 'PHP Developer',
		'email' => 'demo@gmail.com',
	]
];
// echo '<pre>';
print_r($mang);
print_r($cat[0]['name']);

// cách duyệt mảng dùng for
for ($i = 0; $i < count($mang); $i++) {
	echo $mang[$i]. '<br />';
	
}
foreach ($mang as $k => $val) {
	echo $val.'<br />';
	
}
foreach ($cat as $k => $val) {
	print_r($val);
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th><ID/th>
					<th>Name</th>
					<th>email</th>
				</tr>
			</thead>
			<tbody>
				<!-- bắt đầu duyệt -->
				<?php foreach ($cat as $k => $val) {  ?>
				<tr>
					<td><?php echo $val['id'] ?></td>
					<td><?php echo $val['name'] ?></td>
					<td><?php echo $val['email'] ?></td>
				</tr>

			<?php } ?>
				<!-- kết thúc duyệt -->
			</tbody>
		</table>
	</div>
</body>
</html>