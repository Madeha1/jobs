<?php
    class adsDB {
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
        //get all shown ads
        public function getShownAds() {
            $query = "SELECT * FROM ads where shows=1" ;
            $conn = $this->connect();
            $result = $conn -> query($query);

            $rows = array();
            while ($row = $result -> fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }
        //get all ads
        public function getAds() {
            $query = "SELECT * FROM ads" ;
            $conn = $this->connect();
            $result = $conn -> query($query);

            $rows = array();
            while ($row = $result -> fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }

        //add an adv
        public function addAd($img ,$link){
            $query = "INSERT into ads (img,link) VALUES ('$img','$link')";
            $conn = $this->connect();
            $result = $conn -> query($query);
            return $result;
        }

        //get an ad by id
        public function getAdById($adId) {
            $query = "SELECT * FROM ads where id = $adId";
            $conn = $this->connect();
            $result = $conn -> query($query);
            $row = $result -> fetch_assoc();
            return $row;
        }
        
        //delete an ad
        public function deleteAd($adId) {
            $query = "DELETE FROM ads where id=$adId";
            $conn = $this->connect();
            $result = $conn -> query($query);
            return $result;
        } 

        //update an ad by id
        public function updateAd($id ,$show){
            $query = "UPDATE ads SET shows='$show' WHERE id=$id";
            $conn = $this->connect();
            $result = $conn -> query($query);
            return $result;
        }
    }
?>
