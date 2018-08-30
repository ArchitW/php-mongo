<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/29/2018
 * Time: 4:37 PM
 *"jenssegers/mongodb": "2.0"
 *
 * table == collection
 * rows/column = document
 * returns Bson
 */


session_start();

require './vendor/autoload.php';
include './class/users.php';
include './class/books.php';

//Connection to server
$connection = new MongoDB\Client;
//connection to database
$db = $connection->bookstore;
//connection to collection (table)
$collection_users = $db->users;
$collection_books = $db->books;
//Objects
$userClass = new Users($collection_users);
$booksClass= new Books($collection_books);
//var_dump($userClass);
//exit;



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