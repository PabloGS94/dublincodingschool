<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once 'connection.php';
include_once 'contact.php';
  
$database = new Database();
$db = $database->getConnection();
  
$contact = new Contact($db);

$data = json_decode(file_get_contents("php://input"));
if(
    !empty($data->first_name) &&
    !empty($data->last_name) &&
    !empty($data->email) &&
    !empty($data->message)
){
    $contact->first_name = $data->first_name;
    $contact->last_name = $data->last_name; 
    $contact->email = $data->email;
    $contact->message = $data->message;

    if($contact->create()){
        http_response_code(201);
        echo json_encode(array(
            "message" => "Thank you for getting in contact, I will answer you as soon as possible.",
            "response_code" => 201
        ));
    }
    else{
        http_response_code(500);
        echo json_encode(array(
            "message" => "Unable to send the contact form, please try again later.",
            "response_code" => 500
        ));
    }
}
else{
    http_response_code(400);
    echo json_encode(array(
        "message" => "Unable to send the contact form. Data is incomplete.",
        "response_code" => 400
    ));
}
?>