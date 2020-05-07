<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if (isset($_SESSION['id'])) {
	echo "u are logged in ";
}else{
	echo " u are logged out";
}
?>

</body>
</html>