<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/30/2018
 * Time: 5:51 PM
 */
include ('../init.php');

if(isset($_POST['insert_book'])) {
 $book   = $_POST['book'];
    $category = $_POST['category'];
    $author = $_POST['author'];
    $price= $_POST['price'];
    $desc= $_POST['description'];
    $file= $_FILES['cover_img']['tmp_name'];

    //File upload
    $booksClass->newBook($book,$author,$category,$price,$desc,$file);

}