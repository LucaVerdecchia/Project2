<?php 
    
	$errors = "";

	
	$db = mysqli_connect("localhost", "root", "", "todo");

		if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
	}	

	


?>

<html>
<head>
	<title>ToDo List Application PHP and MySQL</title>


</head>
<body>
	<div class="heading">
		<h2>ToDo List </h2>
	</div>
	<form method="post" action="index.php" class="input_form">
		<?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
<?php } ?>

		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>
	
</body>
</html>
