<?php
    $conn = new mysqli('localhost', 'root', '') or die("Failed to connect to MYSQLi" . $conn->connect_error);
    $sql = "CREATE DATABASE students ";
    $conn->query($sql);


    $queries = array(
          "CREATE TABLE `diploma_courses` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `course_id` varchar(11) NOT NULL,
            `course_code` varchar(255) NOT NULL,
            `credit_load` int(11) NOT NULL,
            `course_name` varchar(255) NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB ", 
          
        //   "INSERT INTO `diploma_courses` (`id`, `course_id`, `course_code`, `credit_load`, `course_name`) VALUES
        //   (1, '1.1', '605', 2, 'Who knows'), 
        //   (2, '1.1', '605', 2, 'Who knows'), 
        //   (3, '1.1', '605', 2, 'Who knows'), 
        //   (4, '1.1', '605', 2, 'Who knows'), 
        //   (5, '1.1', '605', 2, 'Who knows'), 
        //   (6, '1.1', '605', 2, 'Who knows'), 
        //   (7, '1.1', '605', 2, 'Who knows'), 
        //   (8, '1.1', '605', 2, 'Who knows'), 
        //   (9, '1.1', '605', 2, 'Who knows'), ",
          
          
          "CREATE TABLE `masters_courses` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `course_id` varchar(11) NOT NULL,
            `course_code` varchar(255) NOT NULL,
            `credit_load` int(11) NOT NULL,
            `course_name` varchar(255) NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB ", 
          
          
          
          "INSERT INTO `masters_courses` (`id`, `course_id`, `course_code`, `credit_load`, `course_name`) VALUES
          (1, '1.1', '701', 2, 'Workshop Practice & Lab I'),
          (2, '1.1', '711', 2, 'Manufacturing Technology'),
          (3, '1.1', '721', 2, 'Engineering Drawing'),
          (4, '1.1', '731', 2, 'Applied Material Science'),
          (5, '1.1', '741', 3, 'Electrical Engineering'),
          (6, '1.1', '751', 2, 'Engineering Mathematics'),
          (7, '1.2', '702', 2, 'Workshop Practice & Lab II'),
          (8, '1.2', '712', 2, 'Applied Statistics'),
          (9, '1.2', '722', 2, 'Engineering Mathematics'),
          (10, '1.2', '732', 2, 'Design of Machine Elements and Materials Selection'),
          (11, '1.2', '742', 2, 'Strength of Materials'),
          (12, '1.2', '752', 2, 'Engineering Mathematics II');" ,
          
           
          
          
          "CREATE TABLE `part_time_courses` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `course_id` varchar(11) NOT NULL,
            `course_code` varchar(255) NOT NULL,
            `credit_load` int(11) NOT NULL,
            `course_name` varchar(255) NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB ", 
          
          
          "INSERT INTO `part_time_courses` (`id`, `course_id`, `course_code`, `credit_load`, `course_name`) VALUES
          (1, '1.1', '811', 4, 'Computer Programming & Application'),
          (2, '1.1', '812', 3, 'Operators Research I'),
          (3, '1.1', '813', 3, 'Engineering Economics'),
          (4, '1.2', '821', 3, 'Operations Research II'),
          (5, '1.2', '822', 3, 'Industrial Maintenance and Reliability Management'),
          (6, '1.2', '823', 3, 'Applied Engineering Statistics'),
          (7, '1.2', '824', 2, 'Human Factors Engineering'),
          (8, '2.1', '831', 3, 'Production Management'),
          (9, '2.1', '832', 2, 'Management of Human Resources'),
          (10, '2.1', '833', 3, 'Planning & Control of Projects'),
          (11, '2.1', '834', 3, 'Quality Engineering Management'),
          (12, '2.2', '841', 2, 'Materials Management'),
          (13, '2.2', '842', 2, 'Manufacturing Systems Analysis OR'),
          (14, '2.2', '843', 2, 'Construction Management'),
          (15, '2.2', '844', 2, 'Work System Design & Measurement'),
          (16, '2.2', '899', 3, 'Project')" ,
          
           
          
          "CREATE TABLE `students`.`students` (`id` INT NOT NULL AUTO_INCREMENT , `full_name` TEXT NOT NULL , `mat_no` TEXT NOT NULL , `department` TEXT NOT NULL , `course` TEXT NOT NULL , `score` INT(11) NOT NULL , `grade` TEXT NOT NULL , `course_id` VARCHAR(10) NOT NULL , `programme` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;",
          
          
    );

    $conn->select_db('students');
    $count = 0;
    while ($count < count($queries)) { 
        $conn->query($queries[$count]);
        $count += 1;
        }

    header('Location: students\user.php');