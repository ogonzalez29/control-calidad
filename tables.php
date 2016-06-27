<?php
	$m1_el1 = $_POST['matrix_1'][1];
	// $el2 = $_POST['matrix_1'][2];
	// $el3 = $_POST['matrix_1'][3];
	// $el4 = $_POST['matrix_1'][4];
	// $el5 = $_POST['matrix_1'][5];
	// $el6 = $_POST['matrix_1'][6];
	// $el7 = $_POST['matrix_1'][7];
	// $el8 = $_POST['matrix_1'][8];
	// $el9 = $_POST['matrix_1'][9];
	// $el10 = $_POST['matrix_1'][10];
	// $el11 = $_POST['matrix_1'][11];
	// $el12 = $_POST['matrix_1'][12];
	// $el13 = $_POST['matrix_1'][13];
	// $el14 = $_POST['matrix_1'][14];
	// $el15 = $_POST['matrix_1'][15];
	// $el16 = $_POST['matrix_1'][16];
	// $el17 = $_POST['matrix_1'][17];

 	mysql_query("INSERT document SET m1_el1='$m1_el1'
 								   ")
 		or die(mysql_error());

 // 	foreach ($_POST['matrix_1'] as $row) {
 // 		if(empty($_POST['matrix_1'][$row])){
	// 	echo "True";
	// 	echo "<p></p>";
	// }
 // 	}
	
	// $matrix_1 = $_POST['matrix_1'];
	// echo $_POST['matrix_1'][1];
	// echo "<p></p>";

	// if(empty($_POST['matrix_1'][2])){
	// 	echo "True";
	// 	echo "<p></p>";
	// }
	// else{
	// 	echo $_POST['matrix_1'][2];
	// 	echo "<p></p>";
	// }
 // // var_dump($_POST);
 // var_dump($matrix_1);
 ?>