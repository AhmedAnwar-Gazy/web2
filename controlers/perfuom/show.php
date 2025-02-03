<?php
$heading = "Note";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;



$perfum = $db->query("SELECT * from perfums where id = :id ", [
  'id' => $_GET['id'],
])->findOrFail();

//authorize($note['other_id'] == $userID);

//dd($perfum);



require "views/homes/show_view.php";
