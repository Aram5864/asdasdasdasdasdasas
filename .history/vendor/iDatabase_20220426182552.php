<?php 

interface Idatabase{
    
    // insert
        
    // this query insert  interfase method

    public function insert($val);


    // Select
        
    // this query Select  interfase method

    public function select($val);


    // this query update  interfase method
    public function update($val);


    // this query delete  interfase method
    public function delete();


    // where
    //this where method
    public function where($WhereFieldVal,$glue);

    // one
    //this one method

    public function one();

    // all
    //this all method
    public function all();






}




?>