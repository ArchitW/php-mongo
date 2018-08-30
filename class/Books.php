<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/30/2018
 * Time: 5:55 PM
 */

class Books
{

    protected $collection_books;


    function __construct($collection_books)
    {
        $this->collection_books = $collection_books;
    }

    function newBook($booktitle, $auth, $cat,$price,$desc,$img){
/*
        $book = $this->collection_books->findOne([
            'bookTitle'=> $booktitle,
            'category'=> $cat
                    ], ['projection'=>['_id'=>1]]);

        //check if book exists if not insert
        if(is_null($book->_id)){
            $insertBook = $this->collection_books->insertOne([
                'bookTitle'=>$booktitle,
                'auth'=>$auth,
                'category'=>$cat,
                'price'=>$price,
                'desc'=>$desc,
                'img'=>new MongoDB\BSON\Binary(file_get_contents($img),MongoDB\BSON\Binary::TYPE_GENERIC),
            'created_at'=> new MongoDB\BSON\UTCDateTime()
            ]);
        }
        else{
            //update
            $upodateBook = $this->collection_books->findOneAndUpdate(['_id'=>new MongoDB\BSON\ObjectId($book)],
                [
                    '$set'=>[
                        'bookTitle'=>$booktitle,
                        'auth'=>$auth,
                        'category'=>$cat,
                        'price'=>$price,
                        'desc'=>$desc,
                        'img'=>new MongoDB\BSON\Binary(file_get_contents($img),MongoDB\BSON\Binary::TYPE_GENERIC),
                        'updated_at'=>new MongoDB\BSON\UTCDateTime()
                    ]


                ]);
        }
*/
    }

}