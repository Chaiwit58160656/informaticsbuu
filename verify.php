<?php
$access_token = '6AHRcWetHgf0rYxUUTGKVYeLmyztVD1ontI5HsAiuG7oRR61IZ1iS1ZombwCifqKVoTBhRftQ0n6Syors2QuO1MtV6DW5ZFFzDiK6aytBvlFa7hLeWrYH+1cs50rBaxXpQSXJYbKCIGJysLDu50BvwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
