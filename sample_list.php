<?php
$data = array("user_email" => "ccfiel@gmail.com", "user_token" => "8Z2z5saERcdYtpre--La", "list_token" => "vKvTFBwhcrAdyhnJPVeCnQ", "message" => "Hello world. Good!");                                                                    
$data_string = json_encode($data);                                                                                   
 
$ch = curl_init('http://localhost:3000/api/v1/send_list');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',     
    'Accept: application/json',                                                                           
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
 
$result = curl_exec($ch);
echo $result;
echo '\n';
?>
