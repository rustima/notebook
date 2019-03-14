<?php
// $mysqli = new mysqli();
// $mysqli->connect("localhost","root","123456");
// $mysqli->select_db($dbname);
// $mysqli->query($query);
// $mysqli->close();
class PDOtest{
    public $hostname = "";
    public $user = "";
    public $pwd = "";
    public $db = "";
    public $conn = "";
    final public function __construct($hostname,$user,$pwd,$db){
        $this->hostname = $hostname;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->db = $db;
    }
    
    public function conn(){
        if($this->hostname&&$this->user&&$this->pwd&&$this->db){
            $this->conn = mysqli_connect($this->hostname,$this->user,$this->pwd,$this->db);
//             echo "111";
        }else echo "setting error:";
//         echo "some";
        return $this->conn;
    }
    
    public function add(){
    
    }    
    
    public function alter(){}
    
    public function delete(){}
    public function query($link,$query){
        if(@$result = mysqli_query($link,$query)){
        return $result;
        }else echo "query error:";
        
    }
    
    public function fetch($result){
        foreach($result as $result){
            $arr[] = $result;
        }
        return $arr;
    }
    
    public function close(){
        mysqli_close($this->conn);
    }
    
}