<?php
use core\App ;
use core\Database ;
$db = App::resolve(Database::class);


//$heading = "My Notes";

if( $_GET["asearch"]){
//dd(!empty($_GET['sercah']) ? $_GET['sercah'] : 'Parfum');
    $perfums = $db->query("SELECT * FROM perfums WHERE MATCH (name ,prand ,type ,discription) AGAINST (' Parfum ' in NATURAL LANGUAGE MODE) and pric BETWEEN :min and :max ;",[
        'min' => !empty($_GET['min']) ? $_GET['min'] : 0,
        'max' => !empty($_GET['max']) ? $_GET['max'] : 9999999,

    ])->fetchAll();
   
}else{
  $perfums = $db->query("SELECT * from perfums;")->fetchAll();  
}








//dd("");




require "views/test/search_view.php";


?>