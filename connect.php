<?php

    // $name= $_POST['name'];
    // $email = $_POST['email'];
    // $number= $_POST['number'];
    // $emailSub= $_POST['emailSub'];
    // $message = $_POST['message'];

    // //Database connection

    // $conn = new mysqli('localhost','root@','root','htmlform');
    // if($conn->connect_error){
    //     die('Connection Failed : '.$conn->connect_error);
    // }else{
    //     $stmt = $conn->prepare("insert into registration(name, email, number, emailSub, message) values(?,?,?,?,?) ");
    //     $stmt->bind_param("sssssi", $name, $email, $number, $emailSub,$message);
    //     $stmt->execute();
    //     echo "registration Successfully...";
    //     $stmt->close();
    //     $conn->close();

    // }


// Get POST data and sanitize
//     $name= $_POST['name'];
//     $email = $_POST['email'];
//     $number= $_POST['number'];
//     $emailSub= $_POST['emailSub'];
//     $message = $_POST['message'];
// // $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
// // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
// // $number = filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT);
// // $emailSub = filter_var($_POST['emailSub'], FILTER_SANITIZE_STRING);
// // $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

// // Database connection
// $servername = "localhost:3306";
// $username = "root";
// $password = "Payal@07";
// $dbname = "htmlform";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die('Connection Failed: ' . $conn->connect_error);
// } else {
//     // Prepare and bind
//     $stmt = $conn->prepare("INSERT INTO form (name, email, number, emailSub, message) VALUES (?, ?, ?, ?, ?)");
//     if ($stmt === false) {
//         die('Prepare Failed: ' . $conn->error);
//     }

//     $bind = $stmt->bind_param("ssiss", $name, $email, $number, $emailSub, $message);
//     if ($bind === false) {
//         die('Bind Failed: ' . $stmt->error);
//     }

//     $exec = $stmt->execute();
//     if ($exec === false) {
//         die('Execute Failed: ' . $stmt->error);
//     } else {
//         echo "Registration Successfully...";
//     }

//     $stmt->close();
//     $conn->close();
// }

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// var_dump($_POST);


  $name= $_POST['name'];
    $email = $_POST['email'];
    $number= $_POST['number'];
    $emailSub= $_POST['emailSub'];
    $message = $_POST['message'];

// Database connection
$servername = "localhost";
$username = "PostgreSQL 14";
$password = "root";
$dbname = "htmlform";

$conn = pg_connect("host=$servername dbname=$dbname user=$username password=$password");

// Check connection
if (!$conn) {
    die('Connection Failed: ' . pg_last_error());
} else {
    // Prepare and bind
    $query = "INSERT INTO form (name, email, number, emailSub, message) VALUES ($1, $2, $3, $4, $5)";
    $result = pg_query_params($conn, $query, array($name, $email, $number, $emailSub, $message));

    if (!$result) {
        die('Execute Failed: ' . pg_last_error());
    } else {
        echo "Registration Successfully...";
    }

    pg_close($conn);
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
var_dump($_POST);
?>