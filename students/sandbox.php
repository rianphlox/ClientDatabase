<?php

    $conn = new mysqli('localhost', 'root', '', 'students') or die("failed to connect to mysqli" . $conn->connect_error);
    
    $course_id = '2.1';
    if ($course_id < 2) {
        // $sql = "SELECT * FROM diploma_courses WHERE course_id > $course_id ORDER BY course_id ASC" ;
        $sql = "SELECT * FROM `diploma_courses` WHERE course_id > 1 AND course_id < 2 ORDER BY course_id ASC";
    } elseif ($course_id > 2) {
        $sql = "SELECT * FROM `diploma_courses` WHERE course_id > 2 ORDER BY course_id ASC" ;
    }
    // $sql = "SELECT * FROM diploma_courses WHERE course_id < $course_id ORDER BY course_id ASC" ;
    $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
    // if ($result->num_rows > 0) {
        
    // }
    foreach($result as $res) {
        echo "<pre>";
        print_r($res);
        echo "</pre>";
    }