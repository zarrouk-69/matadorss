<?php 
    session_start();
    require_once('event.php');
    require_once('ticket.php');

    class dbconfig
    {
        
        public $connection;

        public function __construct()
        {
            $this->db_connect();
        }
       
        public function db_connect()
        {
            $this->connection = mysqli_connect('localhost','root','','db1');
            if(mysqli_connect_error())
            {
                die(" Connect Failed ");
            }
        }

        public function check($a)
        {
            $return = mysqli_real_escape_string($this->connection,$a);
            return $return;
        }
        
        /*
        public function __construct()
        {
            $this->db_connect();
        }
        function db_connect () {
            $servername = 'localhost';	
            $username = 'root';	
            $password = '';       
            $dbname = 'db1';	
            try {
                $pdo = new PDO(
                    "mysql:host=$servername;dbname=$dbname", 
                    $username, 
                    $password,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
                return $pdo;
            }
            catch(PDOException $e) {
                echo "Connection failed: ". $e->getMessage();
            }
        
        }
        */
    }
?>