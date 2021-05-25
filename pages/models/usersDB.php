<?php
    class usersDB {
        private static $connection;
        public function connect() {
            if (!isset(self::$connection)) {
                self::$connection = new mysqli("127.0.0.1", "job_user", "job_user123", "jobs-project");
            }
            if (self::$connection == false) {
                echo "NO connection " . self::$connection->connect_error;
            }
            return self::$connection;
        }
       
        //add a new user
        public function adduser($sname, $spassword, $semail, $saddress, $stelNo, $stype, $sjobtype) {
            $query = "INSERT INTO users( username, password, email, address, telNo, type, job_type)
            VALUES ('$sname', '$spassword', '$semail','$saddress',$stelNo,$stype,'$sjobtype')";
            $conn = $this->connect();
            $result = $conn->query($query);
            return $result;
        }

        //get all users
        public function getusers() {
            $query = "SELECT * FROM users" ;
            $conn = $this->connect();
            $result = $conn -> query($query);
            $rows = array();
            while ($row = $result -> fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }

        //get a user by id
        public function getUserById($userId) {
            $query = "SELECT * FROM users where id = $userId";
            $conn = $this->connect();
            $result = $conn -> query($query);
            $row = $result -> fetch_assoc();
            return $row;
        } 
        
        //delete a user by id
        public function deleteUser($userId) {
            $query = "DELETE FROM users where id=$userId";
            $conn = $this->connect();
            $result = $conn -> query($query);
            return $result;
        } 

        //update a user by id
        public function updateUser($id, $username, $email, $address, $telNo){
            $query = "UPDATE users SET username='$username', email='$email', address='$address' , telNo=$telNo WHERE id=$id";
            $conn = $this->connect();
            $result = $conn -> query($query);
            return $result;
        }
    }
?>