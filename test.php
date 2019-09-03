<?php
$data = array("content" => "[Civil] souhaite prendre un rendez-vous pour le [date] : [lien de la demande]");
$curl = curl_init("https://discordapp.com/api/webhooks/618516051348422660/gNEqJeYB-YYI7gY-gyj9Ncq1m4_0cjPg7GJNnFtkJqstcx1uyXHy6FixJRcq7v_VAzWm");
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
return curl_exec($curl);