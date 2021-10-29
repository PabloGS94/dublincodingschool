<?php
include_once 'connection.php';
include_once 'contact.php';
include_once 'apiheader.php';

$database = new Database(); 
$db = $database->getConnection();

$contact = new Contact($db);

$stmt = $contact->read();
$num = $stmt->rowCount();
  
if($num > 0){ 
    $contact_arr=array();
    $contact_arr["records"]=array();
  
    $number = 1;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $contact_array=array(
            "Name" => $row['first_name'],
            "Image" =>  $row['last_name'],
            "Email" => $row['email'],
            "Mesage" => $row['message'],
            "Timestamp" => $row['timestamp']
        );

        array_push($contact_arr["records"], $contact_array);
    }
    http_response_code(200);
    echo json_encode($contact_arr);
}else{
    http_response_code(404);
    echo json_encode(
        array("message" => "No contact forms found.")
    );
}
?>