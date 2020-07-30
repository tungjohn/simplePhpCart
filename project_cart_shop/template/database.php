<?php
    class Database {
        public $host = "localhost";

        public $user = "root";

        public $password = "";

        public $database = "project_cart_shop";

        public $connection;
        
        //Phương thức khởi tạo
        public function __construct()
        {
            $this->connection = $this->connectDatabase();
        }

        //Phương thức kết nối đến CSDL
        public function connectDatabase() 
        {
            $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
            return $connection;
        }

        //Phương thức chạy câu truy vấn SQL
        public function runQuery($sql)
        {
            $data = array();
            $result = mysqli_query($this->connection, $sql);

            while ($row = mysqli_fetch_assoc($result))
            {
                $data[] = $row;
            }
            
            return $data;
        }

        //Phương thức đếm số bản ghi trong câu lệnh query
        public function numRow($sql)
        {
            $result = mysqli_query($this->connection, $sql);
            $count  = mysqli_num_rows($result);
            return $count;
        }

        public function numProduct($data) {
            $result = 0;
            if(isset($data) && !empty($data)) {
                foreach ($data as $value) {
                    $result += $value['quantity'];
                    
                }
                
            } 
            return $result;
        }
        
    }
    

?>