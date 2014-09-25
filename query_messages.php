<?php
$data = array("user_email" => "ccfiel@gmail.com", "user_token" => "8Z2z5saERcdYtpre--La", "worker_token_id" => "24");                                                                    
$data_string = json_encode($data);                                                                                   
 
$ch = curl_init('http://smsblastr.com/api/v1/query_messages');                                                                      
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
