<?php
$data = array("user_email" => "ccfiel@gmail.com", "user_token" => "1dfth5fd32yQABQcgv", "mobile_number" => "+639177048787", "message" => "Hello world. Good!");                                                                    
$data_string = json_encode($data);                                                                                   
 
$ch = curl_init('http://smsblastr.com/api/v1/send_message');                                                                      
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
