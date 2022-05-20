<?php
    include_once './iDatabase.php';

class Database{

    protected $table = null;
    protected $conn  = null;
    protected $query = null;


    // This construct params name table

    public function __construct($table)
    {
        $this->table = $table;
        $this->conn();
    }

    // Insert

    public function insert($val)
    {
        $keyField =[];
        $values =[];

        foreach($val as $key=>$value){
            $keyField[] = "`$key`";
            $values[] = "'$value'";
        }
        $fields = implode(',',$keyField);
        $valuest = implode(',',$values);


     $this->query = ("INSERT INTO `$this->table` ($fields) VALUES ($valuest)");
        return $this->save();
    }


    // SELECT

    public function select($val)
    {
        if (is_string($val) && $val != "*") {
            $fields = "`$val`";
        }else if(is_array($val)){

            $valuesFields = [];

            foreach($val as $value)

            $valuesFields[] = "`$value`";

            $fields = implode(',',$valuesFields);
        }else{
            $fields = "*";
        }

        $this->query = "SELECT $fields FROM `$this->table`";
        $this->save(); 
        return $this;

    }

    // Update

    public function update($val)
    {
        if (is_array($val)) {

            $keyfields = [];
            foreach($val as $key=>$value){
                $keyfields[] = "`$key` = '$value'";
            }
            $updatekey = implode(',',$keyfields);
        }

       $this->query = "UPDATE `$this->table` SET $updatekey"; 
       return $this;
    }


    //Delete

    public function delete()
    {
        $this->query ="DELETE FROM `$this->table`";
        return $this;
    }

    //Where

    public function where($WhereFieldVal, $glue)
    {
        $glueval=[];
        if ($glue == "AND") {
            $glueval = " AND ";
        }else{
            $glueval = " OR ";
        }
        
        if (is_string($WhereFieldVal)) {
            $whereVal = "$WhereFieldVal";;
        }elseif (is_array($WhereFieldVal)) {
            foreach($WhereFieldVal as $key=>$value){
                $keyfields[] = "`$key` = '$value'";
            }
            $whereVal = implode($glueval,$keyfields);
        }
         
        
        $this->query .= " WHERE $whereVal";
        $this->save();
        return $this;
    }



    // get data one && all

    public function one()
    {
       return $this->save()->fetch_assoc();
    }

    public function all()
    {
        return $this->save()->fetch_all(MYSQLI_ASSOC);
    }
        // SAVE IN DATABASE
    public function save()
    {
        return    $this->conn->query($this->query);
    }

    // Connection
    public function conn()
    {
        $conv = parse_ini_file('../configs/db.ini');
   
        $this->conn =  new mysqli($conv['host'],$conv['username'],$conv['password'],$conv['dbname']);

    }

}