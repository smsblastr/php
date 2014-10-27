<?php
$data = array("user_email" => "smsblastr@gmail.com", "user_token" => "xxxxxxxxxxxxxxxxx", "list_token" => "K0s1vrG41gJRpdykk3vaOA", "message" => "This is a test message. Please ignore");                                                                    
$data_string = json_encode($data);                                                                                   
 
$ch = curl_init('http://smsblastr.com/api/v1/send_list');                                                                      
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
