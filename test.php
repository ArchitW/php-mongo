<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/30/2018
 * Time: 4:17 PM
 */
include('./init.php');

//Projection
$document = $collection_users->findOne(['email'=>'123','password'=>'123'],['projection'=>['_id'=> 0,'admin'=> 0]]);


//Find all / Create Cursor
$document = $collection_users->find();
foreach ($document as $value){
  //  var_dump($value->name);
}

// Use projection + Limit
$document = $collection_users->find([],['limit'=> 2,
    'projection'=>['_id'=> 0,
        'admin'=> 0 ] ] );
foreach ($document as $value){
     var_dump($value);
}

var_dump($document);
