 <?php
if (isset($_POST['submit'])) {
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];

	if ($password !== $repassword) {
		echo "password not match";
	}
	elseif($password && $repassword){
		echo "match";
	}

/*	if (!filter_var($email, FILTER_VALIDATE_EMAIL )) {
 echo "insert valid email address";
}*/
/*$permision=array('jpg','jpeg','png','gif');	
$img= $_FILES['image']['name'];
$img_size= $_FILES['image']['size'];
$tmp=$_FILES['image']['tmp_name'];

$div=explode('.', $img);
$ext=strtolower(end($div));
 $unque_name=substr(md5(time()), 0,10).'.'.$ext;
 $path="loader/".$unque_name;

if (empty($img)) {
	echo "file empty";
}
elseif ($img_size > 40000000) {
	echo "big file size ";
}
elseif (in_array($ext, $permision) === false) {
	echo "approve only 'jpg','jpeg','png','gif'";
}
else{
	
	if (move_uploaded_file($tmp, $path )) {
		echo "moved";
	}
}*/
}
?>
<!-- <!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<input type="file" name="image">
			<input type="email" name="email">
			<button type="submit" name="submit">submit</button>
		</form>
	</body>
</html>  -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="password" name="password">
	<input type="password" name="repassword">
	<button type="submit" name="submit">submit</button>

</form>
</body>
</html>