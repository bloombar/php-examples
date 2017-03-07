<?php

session_start();

$cxn = new mysqli('warehouse', 'amos', 'pqvksah8', 'amos_db_design_spring_2016');

$user_id = $cxn->real_escape_string(session_id());

$q = "SELECT * FROM to_do_list WHERE user_id='{$user_id}' ORDER BY created ASC";

$result = $cxn->query($q);

?>
<!doctype html>
<html>
	<head>
		<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<title>To-Do List Web App</title>
<script>
$(function() {
	$("input[name='task']").focus();
});
</script>
	</head>
	<body>
		<div class="container">
			<h1>To-Do List Web App</h1>
			
			<form action="add_task.php" method="POST">
				<input type="text" name="task" />
				<input type="submit" value="Add Task!" />
			</form>

			<ol>
<?php while ($row = $result->fetch_assoc()) : ?>

				<li <?php if ($row['done'] == 1) : ?>class="done"<?php endif; ?>>
					<span class="task"><?php print($row['task']); ?></span>
					<a class="action delete" href="delete_task.php?id=<?php print($row['id']); ?>">delete</a>
					<a class="action done" href="done_task.php?id=<?php print($row['id']); ?>">mark as done</a>
				</li>
<?php endwhile; ?>				
			</ol>

		</div>
	</body>
</html>
