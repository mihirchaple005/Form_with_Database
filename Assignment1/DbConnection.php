<?php


class DbConnection{
    public function throw_query($name,$email,$gender,$city) {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=assignment1','root','');
        $Name = $name;
        $Email = $email;
        $Gender = $gender;
        $City = $city;

        $sql = 'INSERT INTO assignment (Name,Email,Gender,City) VALUES (:Name,:Email,:Gender,:City)';

        $statement = $pdo->prepare($sql);
        $statement->execute(['Name'=> $Name,'Email'=>$Email,'Gender'=>$Gender,'City'=>$City]);
    }

    public function fetch_data(){
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=assignment1','root','');
        $statement = $pdo->query('SELECT * FROM assignment');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        return $statement;
    }
}

