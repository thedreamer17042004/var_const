<?php 
	$string = 'Lorem ipsum dolor sit amet ,consectetur adipisicing elit. Molestiae magni voluptas, natus ut similique sit eaque voluptates <b>consectetur asperiores obcaecati </b> pariatur nemo deleniti quisquam minima corrupti ipsam neque officiis eveniet!';

	// echo strlen($string);//tổng số ký tự cả dấu cách
	// echo str_word_count($string);//tổng số từ in a string
	// $mang = explode('p', $string);

	// // mảng thì phải dùng print_r khong dùng echo dc
	// echo '<pre>';
	// print_r($mang);

	// $str1 = str_replace('pro', 'advanced', $string);
	// echo $str1;// thay thế từ in string

	$n = strpos($string, 'mvc');//tìm vị trí ký tự gặp lần đầu
	echo $n;


	// $n = strpos($string, ',');

	// echo substr($string, 0, $n);//cắt từ in string


	$str1 = strip_tags($string);// loại bỏ các thẻ html in string
	$n1 = strpos($str1, ',');
	echo substr($str1, 0, $n1+4);

?>

