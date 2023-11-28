<?php

    class Database {
        
        public $conn = null;
        public $server = 'localhost';
        public $dbname = 'benhvienthongnhat';
        public $user = 'root';
        public $password = '';


        //Hàm kết nối
        public function connect() {
            $this->conn = new mysqli($this->server,$this->user,$this->password,$this->dbname);

            if ($this->conn->connect_error) {
                print($this->conn->connect_error);
                exit();
            }
            $this->conn->set_charset('utf8');
        }

        // Hàm đóng kết nối CSDL
        public function closeDatabase()
        {
            if ($this->conn) {
                $this->conn->close();
            }
        }
    }
?>