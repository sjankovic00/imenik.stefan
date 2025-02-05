<?php

use \Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $member = $db->query("SELECT * FROM members WHERE id = ?", [$id])->fetch();

    if($member){
        view('single.view.php', ['member' => $member]);
    }
}
