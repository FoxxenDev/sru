<?php
$data = array("content" => "[Civil] souhaite prendre un rendez-vous pour le [date] : [lien de la demande]");
$curl = curl_init("https://discordapp.com/api/webhooks/655488252001910785/e-NV2e5RkawNuvX6xTXqt0mkooPvz2lK9yDIOV0VftieXBtMXZgW2HY4W0p7SzeBRSfw");
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
return curl_exec($curl);