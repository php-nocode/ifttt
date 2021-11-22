<?php

// Capture inputs
$event = $_REQUEST["ifttt_event"];
$webhooksKey = $_REQUEST["ifttt_webhooks_key"];
$value1 = $_REQUEST["value1"];
$value2 = $_REQUEST["value2"];
$value3 = $_REQUEST["value3"];

// Prepare webhook payload
$url = "https://maker.ifttt.com/trigger/{$event}/with/key/{$webhooksKey}";
$body = "value1={$value1}&value2={$value2}&value3={$value3}";

// Prepare curl request
$request = curl_init($url);
curl_setopt($request, CURLOPT_POST, 1);
curl_setopt($request, CURLOPT_POSTFIELDS, $body);

// Execute and capture response
$response = curl_exec($request);
curl_close($request);

