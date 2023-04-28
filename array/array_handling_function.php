<?php 
	$mang = array('a', 'c', 'x', 'b');
	$mang1 = array('a', 'c', 'x', 'b');
	$mang2 = array('a', 'c', 'x', 'b');
	$m = '';

	echo '<pre>';
	asort($mang);// arrange theo value
	arsort($mang1);//sắp xếp giảm dần
	ksort($mang2);// sắp xếp theo key
	krsort($mang2);// sắp xếp theo ngược lại key
	print_r($mang);
	print_r($mang1);
	print_r($mang2);
	echo count($mang);// đếm số lượng phần tử in mảng

	echo '<br>';

	// hàm kiểm tra đó là mảng hay k
	var_dump(is_array($m));
	if(is_array($mang)){
		echo count($mang);
	}else{
		echo 'tham số hàm count() phải là mảng';
	}

	// inner array là check a value in array
	echo '<br>';

	if(in_array('A', $mang)){
		echo 'ok a có trong mảng';
	}else{
		echo 'a không có trong mảng';
	}
	echo '<br>';
	$string = implode(' = ', $mang);// dấu nối

	echo $string;



	echo '<br>';
	$string1 = json_encode($mang);

	echo $string1;



	// for example
	echo '<br>';

	$array = [
		'id' => 'đjkskksk',
		'name' => 'Long cô cô',
	];

	if(array_key_exists('email', $array)){
		echo  $array['email'];
	}else{
		echo $array['name'];
	}
 ?>