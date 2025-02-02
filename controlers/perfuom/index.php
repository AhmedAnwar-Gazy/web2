<?php
use core\App ;
use core\Database ;
$db = App::resolve(Database::class);


//$heading = "My Notes";


$perfums = $db->query("SELECT * from perfums;")->fetchAll();

dd($perfums);


require "views/notes/index_view.php";


?>