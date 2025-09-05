<?php
header("Access_Control_Allow_Origin:*");
header("Content-Type: application/json");

$conn = mysqli_connect("localhost", "root", "", "mzika");

if ($conn) {
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        $data = [];
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        echo json_encode($data);
       /*  $message = [
            "message" => "found data in to db users"
        ];
        echo json_encode($message); */
    } else{
        $message = [
            "message" => "no record found in db"
        ];
        echo json_encode($message);

    }
} else {
    $message = [
        "message" => "failed to connected to db"

    ];
    echo json_encode($message);
}
