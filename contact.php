<?php

include "db.php";

header("Content-Type: application/json");


// Receive JSON data from frontend

$data = json_decode(
    file_get_contents("php://input")
);


// Get values

$name = $data->name;
$email = $data->email;
$message = $data->message;



// Validation

if(empty($name) || empty($email) || empty($message)){

    echo json_encode([

        "status"=>"error",

        "message"=>"All fields are required"

    ]);

    exit;

}



// Insert data into database

$sql = "

INSERT INTO messages(name,email,message)

VALUES(

'$name',

'$email',

'$message'

)

";



if($conn->query($sql)){


    echo json_encode([

        "status"=>"success",

        "message"=>"Message sent successfully"

    ]);


}

else{


    echo json_encode([

        "status"=>"error",

        "message"=>"Something went wrong"

    ]);


}


?>