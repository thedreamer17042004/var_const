<!-- những hàm hay dùng -->
<?php 
	// $a = 12;
	// $b = 'abc';


	// if(is_numeric($a) && is_numeric($b)){
	// 	echo $a + $b;

	// }else{
	// 	echo 'giá trị không phải là số';
	// }
	// var_dump(is_numeric($a));//hỏi xem là số không


	// round làm tròn lên
	// $a = 14.15555;
	// echo round($a, 1);

	// floor làm tròn xuống
	// $a = 12.88888;
	// echo floor($a);

	// ceil luôn làm tròn lên
	// $c = 12.0000011;
	// echo ceil($c);

	// number_format
	// $a = 140000000;
	// // echo number_format($a, 2, null, ':');
	// echo number_format($a, 2);



	// hàm xử lý ngày tháng
	date_default_timezone_set("Asia/Bangkok");
	// $d = date('D/m/Y h:m:i');//Y là ra full năm y là ra hai số cuối của năm

	$ngay_sinh = '1995-10-12 08:15:30';
	// $t = time();// trả về số giây tính từ năm 1970

	$t = strtotime($ngay_sinh);//lấy ra số giây
	$d = date('d-m-Y', $t);
	echo $d;


	// 
	$this_year = date('Y');
	$nam_50 = $this_year - 50;
	$nam_18 = $this_year - 18;
	// for ($i = $nam_50; $i <= $nam_18 ; $i++) {
	// 	echo $i .'<br/>';
	// }
?>

<select name="age" id="">
	<option value="">Ngày sinh</option>
	<?php for ($i = 1; $i <= 31 ; $i++) {
		$i = $i < 10 ? '0' .$i : $i;
	 ?>
	<option value="<?php echo $i ?>"><?php echo $i ?></option>
	<?php } ?>
</select>

<select name="age" id="">
	<option value="">Tháng sinh</option>
	<?php for ($i = 1; $i <= 12 ; $i++) { 
		$i = $i < 10 ? '0' .$i : $i;
		
	 ?>
	<option value="<?php echo $i ?>"><?php echo $i ?></option>
	<?php } ?>
</select>

<select name="age" id="">
	<option value="">Năm sinh</option>
	<?php for ($i = $nam_18; $i >= $nam_50 ; $i--) { ?>
	<option value="<?php echo $i ?>"><?php echo $i ?></option>
	<?php } ?>
</select>