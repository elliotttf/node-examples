<?php

$ch = curl_init('http://google.com');

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$data = curl_exec($ch);

echo 'I got it!' . PHP_EOL;
echo $data . PHP_EOL;
echo "I'm done." . PHP_EOL . PHP_EOL;
