<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ Iframe Player                                   │
 │ Version   │ V1.0                                            │
 │ Provider  │ Multi                                           │
 │ Support   │ Web Iframe Player                               │
 │ Licence   │ MIT                                             │
 │ Author    │ Olsion Bakiaj                                   │
 │ Email     │ TRC4@USA.COM                                    │
 │ Author    │ Endrit Pano                                     │
 │ Email     │ INFO@ALBDROID.AL                                │
 │ Website   │ https://kodi.al                                 │
 │ Facebook  │ /albdroid.official/                             │
 │ Github    │ github.com/SxtBox/                              │
 │ Created   │ 13 January 2021                                 │
 │ Modified  │ 00:0000:0000                                    │
 └─────────────────────────────────────────────────────────────┘
*/

/*
HOSTED APIS https://paidcodes.albdroid.al/Players/Embed_Player/
Playing From: YouTube, Google Drive, Facebook, Twitch, Dailymotion, Wistia, Vudeo.net vimeo And External Sources With Clappr & JW Player
RULES AL: Ky API Eshte Vetem Per Demostrim, Nese Ju e Keqperdorni Do Te Humbisni Komunikimin Me Serverat Tane
RULES EN: This API is For Demonstration Only, If You Misuse It You Will Lose Communication With Our Servers
Generator @ Kodi dot AL Dev Tools
Code For PHP 5/7
*/

error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

/*
Allowed links
https://vudeo.net/embed-xxxxxxxx.html
https://vudeo.net/xxxxxxxx.html
*/
$API_HOST = "https://paidcodes.albdroid.al/Players/ADS_Remover/";
$CALL_URL = "?url=";
$URL = "https://vudeo.net/6i1y8a1xl6j7.html"; // Just Link Change

$API_CALL = $API_HOST. $CALL_URL . $URL;

$DATA = file_get_contents($API_CALL);
echo $DATA;
?>