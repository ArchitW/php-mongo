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

//time stamp conversion from unix TT to calender format
echo date('Y-m-d', 1535630380);



/*
 * Mongo Refresher
 * show dbs - shows database
 * use collection : used if available or creates 1
 * db.createCollection("CollectionName)
 * db.collectionName.insertOne("Test Doc":"123") # key:value
 *  => returns insertedId
 * db.getCollectionNames(); ##shows all table
db.collectionName.find(); #dspaly all rows

select
db.CollectionName.find({'Key':'$gt:2'})
->Find Documents from Collection which have key greater than 2
$gt: Greater than
$lt: Less Then
$eq: Equal

*** Projection ***
 *
 * sql : select id, name , email where name ="A"
 * mongo : db.collectionName.find({email:"A"},{"name":1, "status":1})
 *
 * Return all exclude few
 *db.collectionName.find({email:"A"},{"name":0})
 *
 *
 * *** UPDATE ***
 * db.collectionName.updateOne(
 * {'find':'value'},
 * {$set:{'field':'value','field1':'value1'}})
 *

* */