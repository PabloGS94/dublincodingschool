<?php
class Contact{
    private $conn;
    private $table_name = "contact";
  
    public $first_name;
    public $last_name;
    public $email;
    public $message;
    public $timestamp;
  
    public function __construct($db){
        $this->conn = $db;
    }

    public function read(){        
        $stmt = $this->conn->prepare("SELECT * FROM contact");
        $stmt->execute();    
        return $stmt;
    }

    function create(){
        $query = "INSERT INTO contact
                    SET
                    first_name = :first_name,
                    last_name = :last_name,
                    email = :email,
                    message = :message ";
                    
        $stmt = $this->conn->prepare($query);

        $this->first_name=htmlspecialchars(strip_tags($this->first_name));
        $this->last_name=htmlspecialchars(strip_tags($this->last_name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->message=htmlspecialchars(strip_tags($this->message));
      
        $stmt->bindParam(":first_name", $this->first_name);
        $stmt->bindParam(":last_name", $this->last_name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":message", $this->message);
      
        if($stmt->execute()){
            return true;
        }      
        return false;          
    }    
}
?>