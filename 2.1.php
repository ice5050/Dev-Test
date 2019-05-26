<?php
$id = $_GET['id'];
$id = mysqli_real_escape_string(Db, $id);
$sql = 'DELETE FROM table_001 WHERE data_id = ' . $id;
$effected_rows = Db::query($sql);
?>
