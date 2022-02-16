<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    
    class DB {
        public $host;
        public $user;
        public $password;
        public $database;
        public $conn;

        public function __construct($host = 'localhost', $user = 'root', $password = '', $dbname = 'students') {
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->dbname = $dbname;
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname) or die("Failed to connect to MySQLi" . $this->conn->connect_error);
        }

        public function sanitize($field) {
            return htmlentities(trim($field));
        }

        public function getAllStudents($programme) {
            $conn = $this->conn;
            $sql = "select * from students where programme = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('s', $programme);
            $stmt->execute();
            return $stmt->get_result();
            
        }

        public function addStudent($fullName, $mat, $dept, $programme) {
            // $sql = 'insert into students (full_name, mat_no, department, programme) values (?, ?, ?, ?)';
            // $stmt = $this->conn->prepare($sql);
            // $stmt->bind_param('ssss',$fullName, $mat, $dept, $programme);
            // if ($stmt->execute()) {
            //     $this->createStudentProfile($mat);
            //     // echo "success";
            //     return true;
            // }

            // check if mat no already exists
            $mat = strtoupper($mat);
            $sql = 'select id from students where mat_no = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('s', $mat);
            $stmt->execute();
            $stmt->bind_result($id);
            $stmt->fetch();
            if (!$id) {
                $sql = 'insert into students (full_name, mat_no, department, programme) values (?, ?, ?, ?)';
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param('ssss',$fullName, $mat, $dept, $programme);
                if ($stmt->execute()) {
                    $this->createStudentProfile($mat);
                    // echo "success";
                    return true;
                }
            } else {
                return false;
            }
        }

        public function showStudentsWith($course_id) {
            $sql = "select * from students where level = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $level);
            $stmt->execute();
            $students = $stmt->get_result();
            return $students;
        }

        public function editStudent($fullName, $matNo, $dept, $course, $score, $grade, $id) {
            $sql = "UPDATE `students` SET `full_name` = ?, `mat_no` = ?, `department` = ?, `course` = ?, `score` = ?, `grade` = '?' WHERE `students`.`id` = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('ssssisi', $fullName, $matNo, $dept, $course, $score, $grade, $id);
            if ($stmt->execute()) {
                return ['msg', 'Student Record Updated', 'msgClass' => '#success'];
            }
            
        }

        // public function getStudentDetails($user) {
        //     if (!$user) {
        //         // get products from general cart
        //         $query = "SELECT * FROM cart";
        //         $stmt = $this->conn->prepare($query);
        //         $stmt->execute();
        //         return $stmt->get_result();
        //     } else {
        //         $tablename = "{$user}_cart";
        //         $query = "SELECT * FROM $tablename";
        //         $stmt = $this->conn->prepare($query);
        //         $stmt->execute();
        //         return $stmt->get_result();

        //     }
        // }

        public function getRegisteredCourses($mat) {
            $tableName = "{$mat}_table";
            $sql = "select * from $tableName ORDER BY course_code ASC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->get_result();

        }

        public function createStudentProfile($mat) {
            $tablename = strtolower($mat) . '_table';
            $sql = "CREATE TABLE $tablename (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `course_code` varchar(255) NOT NULL,
                `course_name` varchar(255) NOT NULL,
                `course_id` varchar(11) NOT NULL,
                `score` int(11) NOT NULL,
                `grade` varchar(11) NOT NULL,
                PRIMARY KEY (`id`)) ENGINE = InnoDB;
              ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        }

        public function getCourses($programme) {
            $sql = "SELECT * FROM {$programme}_courses order by course_code";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->get_result();
        }

        public function registerCourse($mat, $course_code, $course_name, $course_id, $score, $grade) {
            
            $tableName = "{$mat}_table";
            $sql =  "INSERT INTO $tableName (course_code, course_name, course_id, score, grade) VALUES (?, ?, ?, ?, ?) ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('sssis', $course_code, $course_name, $course_id, $score, $grade);
            if ($stmt->execute()) {
                return ['msg' => "Course Info Added", 'msgClass' => 'success'];
            }
            // $tableName = "{$mat}_table";
            // // check if course is already registered
            // $sql = "SELECT id FROM $tableName where course_code = ?";
            // $stmt = $this->conn->prepare($sql);
            // $stmt->bind_param('s', $course_code);
            // $stmt->execute();
            // $stmt->bind_result($id);
            // $stmt->fetch($id);
            // if (!$id) {
            //     $sql =  "INSERT INTO $tableName (course_code, course_name, course_id, score, grade) VALUES (?, ?, ?, ?, ?) ";
            //     $stmt = $this->conn->prepare($sql);
            //     $stmt->bind_param('sssis', $course_code, $course_name, $course_id, $score, $grade);
            //     if ($stmt->execute()) {
            //         return ['msg' => "Course Info Added", 'msgClass' => 'success'];
            //     }

            // } else {
            //     return ['msg' => "Course Already Registered", 'msgClass' => 'danger'];
            // }
        }

        public function fetchCourse($id, $mat, $programme) {
            $table = "{$mat}_table";
            $sql = "select * from $table where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            return $stmt->get_result();
        }

        public function getCoursesById($programme, $course_id) {
            $table = "{$programme}_courses";
            if ($course_id > 2) {
                $sql = "SELECT * FROM $table WHERE course_id > ? ORDER BY course_id ASC" ;
            } else {
                $sql = "SELECT * FROM $table WHERE course_id < ? ORDER BY course_id ASC" ;
            }
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('s', $course_id);
            $stmt->execute();
            return $stmt->get_result();
        }
    }