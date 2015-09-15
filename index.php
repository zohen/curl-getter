<?php

//echo $_GET['u'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $_GET['u']);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$response =.
echo curl_exec($ch);
curl_close($ch);

