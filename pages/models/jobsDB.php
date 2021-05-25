<?php
    class jobsDB {
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
        //get all job offers
        public function getJobs() {
            $query = "SELECT * FROM jobsoffering" ;
            $conn = $this->connect();
            $result = $conn -> query($query);

            $rows = array();
            while ($row = $result -> fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }
        //add a job offer
        public function addJob($jobtittle, $companyname, $category, $street, $city, $jobdes, $jobreq, $salary,
        $teleNo, $email, $job_type, $name, $target_dir, $target_file, $user_id) {
            if($target_file == $target_dir){
			$query = "INSERT into jobsoffering ( `image`, `job_title`, `company_name`,`category`,`street`, `city`, `job_description`, `job_requirements`, `salary`, `teleNo`, `email`,`job_type`, user_id) 
			VALUES ('../assests/img/user.png','$jobtittle','$companyname','$category', '$street', '$city', '$jobdes', '$jobreq', '$salary',$teleNo, '$email','$job_type' ,'$user_id')";
            } else {
                $query = "INSERT into jobsoffering ( `image`, `job_title`, `company_name`,`category`,`street`, `city`, `job_description`, `job_requirements`, `salary`, `teleNo`, `email`,`job_type`) 
                VALUES ('$target_file','$jobtittle','$companyname','$category', '$street', '$city', '$jobdes', '$jobreq', '$salary',$teleNo, '$email','$job_type')";
    
            }
            $conn = $this->connect();
            $result = $conn -> query($query);
            return $result;
        }

        //get job offers depending on the view number 
        public function getViewdJobs(){
            $query = "SELECT * FROM jobsoffering where sponsored = 0 order by mostview desc limit 5" ;
            $conn = $this->connect();
            $result = $conn -> query($query);

            $rows = array();
            while ($row = $result -> fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }

        //get a job by id
        public function getJobById($jobId) {
            $query = "SELECT * FROM jobsoffering where id = $jobId";
            $conn = $this->connect();
            $result = $conn -> query($query);
            $row = $result -> fetch_assoc();
            return $row;
        }

        //update mostview counter
        public function updateMostview($jobId,$mostview) {
            $newMostView = $mostview + 1;
            $query = "UPDATE jobsoffering SET mostview=$newMostView WHERE id=$jobId";
            $conn = $this->connect();
            $result = mysqli_query($conn, $query);
        }
        
        //delete a job
        public function deleteJob($jobId) {
            $query = "DELETE FROM jobsoffering where id=$jobId";
            $conn = $this->connect();
            $result = $conn -> query($query);
            return $result;
        } 

        //update a job by id
        public function updateJob($id, $job_title, $company, $city, $street,$job_desc,$job_req,$salary,$telNo,$email){
            $query = "UPDATE jobsoffering SET job_title='$job_title', email='$email',
            telNo=$telNo, company_name='$company', city='$city', street='$street', job_des='$job_desc',
            job_req ='$job_req', salary='$salary' WHERE id=$id";
            $conn = $this->connect();
            $result = $conn -> query($query);
            return $result;
        }

    }
?>
