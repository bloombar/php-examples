<?php

session_start();

$cxn = new mysqli('warehouse', 'amos', 'pqvksah8', 'amos_db_design_spring_2016');

$task = $cxn->real_escape_string($_POST['task']);
$user_id = $cxn->real_escape_string(session_id());

$q = "INSERT INTO to_do_list (task, user_id) VALUES ('{$task}', '{$user_id}')";

$result = $cxn->query($q);

header("Location: ./");

?>
