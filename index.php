<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

header('Content-Type: application/json');

$newMail = $_REQUEST['mail'];

include("connectdb.php");
$sql = "SELECT Email FROM email WHERE Email = '$newMail'";
$req = $pdo->query($sql);
$res = $req->fetchAll(PDO::FETCH_OBJ);

// data in json format
$data = [
    'exist' => true
];

if (count($res) == 0) {
    $data['exist'] = false;
    $sql = "INSERT INTO email (Email) VALUES ('$newMail')";
    $req = $pdo->query($sql);
    $res = $req->fetchAll(PDO::FETCH_OBJ);
}

echo json_encode($data);

var_dump($data);
?>