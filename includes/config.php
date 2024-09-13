<?php

class dbConnection{
    private $connection;
    private$db_type;
    private$db_host;
    private$db_port;
    private$db_user;
    private$db_pass;
    private$db_name;
    public function __construct($db_type, $db_host, $db_port, $db_user, $db_pass, $db_name){
        $this->db_type = $db_type;
        $this->db_type = $db_host;
        $this->db_type = $db_port;
        $this->db_type = $db_user;
        $this->db_type = $db_pass;
        $this->db_type = $db_name;
        $this ->connection($db_type,$db_host,$db_port,$db_user,$db_pass,$db_name);
    }
    public function connection($db_type,$db_host,$db_port,$db_user,$db_pass,$db_name){
        switch($db_type){
            case 'PDO':
                if($db_port<>Null){
                    $db_Hostg.=":".$db_port;
                    
                }try {
                    $conn = new PDO("mysql:host=$servername;dbname=api", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Connected successfully";
                  } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                  }
                  break;
            case 'MySQLi':
                if($db_port<>Null){
                    $db_host.=":".$db_port;

                }
                $this-> connection = new mysqli($db_host,$db_user,$db_user,$db_pass,$db_name);      
                if($this->connection->connect_error){
                    return "Connection failed: ".$this->connnection->connect_error;
                                }
                            else{
                                echo "Connected succesfully";
                            }        break; 
            }

        }
    }


?>