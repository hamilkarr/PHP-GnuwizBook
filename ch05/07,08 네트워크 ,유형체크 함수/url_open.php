<?php
header('content-type:text/html; charset=euc-kr');
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://etoland.co.kr');
$content = curl_exec($curl);
curl_close($curl);

echo $content;