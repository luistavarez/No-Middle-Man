<?php
//include_once("dbConnect.php");
if(isset($_POST['tourist']))
{
	$tourist = $_POST['tourist'];
	//$query = pg_query($dbconn,"SELECT * FROM Tourist WHERE \"tEmail\" = '$tourist'");
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php include 'header.php';?></head>
<body>
<?php include 'navbar.php';?>
<h2>Search results for: <?php echo $tourist; ?></h2>
<div class="list-group"> <a href = "#" class="list-group-item">Email: pedro@gmail.com | Name: Pedro Petigrew </a> </div>
</body>
</html>