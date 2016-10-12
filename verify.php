<?php
$access_token = 'wIljzOtFJKaX4eVnWA91lbquyqPTvy+MbOfwEiaRFOhBSYjO8bm6CHKGDoeQbVQS+NW7rZLjRFKTt7QXsjr7DQsYOE8VRG4dWVz15U09ydf+BFck0iyi224v3bCauopKqU/f1r/t2G4DZd3d0w5K8AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;