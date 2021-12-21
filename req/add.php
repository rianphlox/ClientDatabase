<?php
    require_once '../config/DB.php';
    $db = new DB();


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $userMat = $_POST['mat'];
        $courseCode =  $_POST['course_code'];
        $courseName = $_POST['course_name'];
        $courseId = $_POST['course_id'];
        $scoreAcq = $_POST['score'];
        $gradeAcq = $_POST['grade'];
        
        $res = $db->registerCourse($userMat, $courseCode, $courseName, $courseId, $scoreAcq, $gradeAcq);
        echo json_encode($res);
        // echo $res;

    }
// if (isset($_POST['submit'])) {
//         // echo "<pre>";
//         // print_r($_POST);
//         // echo "</pre>";
//     }

    ?>