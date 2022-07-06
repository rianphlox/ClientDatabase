<?php
    require_once '../config/DB.php';
    $db = new DB();
    $conn = $db->conn;

    $id = htmlspecialchars($_GET['id']);
    $page = htmlspecialchars($_GET['p']);

    $sql = "SELECT mat_no from students where id = $id ";
    $result = $conn->query($sql)->fetch_assoc();
    $mat_no = $result['mat_no'];

    $tablename = "{$mat_no}_table";
    $conn->query("DROP TABLE $tablename");
    $sql = "DELETE FROM students WHERE `students`.`id` = $id";
    $conn->query($sql);
    header("location: $page");