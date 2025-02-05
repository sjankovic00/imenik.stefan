<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$members = $db->query("SELECT * FROM members")->fetchAll();

view('show/admin.view.php', ['members' => $members]);
