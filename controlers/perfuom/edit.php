<?php
$heading = "Edit Notes";

use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;
$amount = 2;


$note = $db->query("UPDATE  perfums set quantity = (quantity - :amount ) where id = :id ;", [
  'id' => $_GET['id'],
  'amount'=>$amount,
])->findOrFail();

//authorize($note['other_id'] == $userID);






//require "views/notes/edit_view.php";
