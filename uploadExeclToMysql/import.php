<?php
if(!empty($_FILES["employee_file"]["name"])){
	 $connect = mysqli_connect('localhost', 'root', 'thetechthirsty', 'temp');
	 $allowed_ext = array("csv");
	 $extension = end(explode(".",$_FILES["employee_file"]["name"]));
	 if(in_array($extension,$allowed_ext)){
	 	$file_data = fopen($_FILES["employee_file"]["tmp_name"],'r');
	 	fgetcsv($file_data);
	 	while($row = fgetcsv($file_data)){
	 		$name=mysqli_real_escape_string($connect,$row[0]);
	 		$address=mysqli_real_escape_string($connect,$row[1]);
	 		$gender=mysqli_real_escape_string($connect,$row[2]);
	 		$designation=mysqli_real_escape_string($connect,$row[3]);
	 		$age=mysqli_real_escape_string($connect,$row[4]);
	 		$query = "INSERT INTO tbl_employee (name,address,gender,designation,age) VALUES ('$name','$address','$gender','$designation','$age') ";
	 		mysqli_query($connect,$query);
	 	}
	 }
}else{
	echo "Error";
}
?>
