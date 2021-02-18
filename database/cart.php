<?php
class Cart
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if(!isset($db -> con)) return null;
        $this -> db = $db;
    } 

    public function insertIntoCart($params = null, $table = "cart")
    {
        if($this->db->con!=null){
            if($params!=null){
                $columns = implode(',',array_keys($params));

                $values = implode(',',array_values($params));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }
}