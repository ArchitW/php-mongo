<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/29/2018
 * Time: 8:30 PM
 */



class Users
{

    protected $collection_users; //bookstore.users


    public function __construct($collection_users)
    {
        $this->collection_users = $collection_users;
    }

    /*
     * input Clean-up
     */
    public function checkInput($var){
        $var = htmlspecialchars($var);
        $var = trim($var);
        $var = stripcslashes($var);

        return $var;

    }

    public function register($name, $password, $email){
        $date = new DateTime();
        echo $date->getTimestamp();
        //insert function
        $document = $this->collection_users->insertOne([
            'name'=>$name,
            'email' => $email,
            'password' => $password,
            'admin' => 'no',
            'date_register' => new MongoDB\BSON\UTCDateTime($date)
            ]);
        //setting us session variable to last inserted id
        $_SESSION['user_id'] = $document->getInsertedId();
    }

    public function userData($id){
        //$this->collection_users->findOne(['_id' => $id]);
        // ^ not/ some times going to work since _id is object , need to use constructor
        //db.CollectionName.find({'Key':'$gt:2'})
        $userFields = $this->collection_users->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

        return $userFields;
    }

    public function logIn($name , $password){

     $document = $this->collection_users->findOne(['name' => $name , 'password' => $password],
         ['projection'=> ['_id'=> 1,'admin'=> 1 ]]
         );

     if(!empty($document->_id)){

             $_SESSION['user_id']=$document->_id;
             $_SESSION['admin'] = $document->admin;
     }
     else{
         return false;
     }

    }

    public function logOut(){
    $_SESSION = array(); // safer then unset
    session_destroy();
    header('location:index.php');
    }
}