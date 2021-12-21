<?php
    // require '../config/DB.php';
    // $db = new DB();

// if (isset($_POST['submit'])) {
//     $fullName = $_POST['fullname'];
//     $mat = $_POST['mat'];
//     $dept = $_POST['dept'];
//     $course = $_POST['course'];
//     $score = $_POST['score'];
//     $grade = $_POST['grade'];
//     $id = $_POST['id'];
//     // $res = $db->editStudent($fullName, $mat, $dept, $course, $score, $grade, $id);
//     // echo json_encode($res);
// // }
    // if (isset($_POST)) {
    //     echo "<pre>"; 
    //     print_r($_POST);
    //     echo "</pre>"; 
    // }
// echo $fullName, $mat, $dept, $course, $score, $grade, $id;
header("Content-Type: application/json; charset=UTF-8");
$fullName = $_POST['fullname'];
echo $fullName;