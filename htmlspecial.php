<?php
$title = $_GET['title'];

echo '<h2>Добавить статью</h2>';
echo '<input type="text" name="title" value="'.htmlspecialchars($title).'" />';
