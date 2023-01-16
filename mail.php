<?php
require_once('mailgun.php'); 
require 'vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// import mailgun api key
// collect it from .env file
function postCurl($url, $data, $mailgunApi)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_USERPWD,$mailgunApi);
    $o = curl_exec($ch);
    curl_close($ch);
    return $o;
}

function sendMail($mail, $username,$MAIL_GUN_API_KEY)
{
    $phpmailerContent = "<html lang=\"fr\">
    <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <style>
    @import url(\"https://fonts.googleapis.com/css2?family=Roboto&display=swap\");
    </style>
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: \"Roboto\", sans-serif;
    }
    header {
    background-color: #5271ff;
    color:white;
    width: 100vw;
    height: 10vh;
    display: flex;
    justify-content: center;
    align-items: center;
    }
    main {
    width: 100vw;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    }
    </style>
    </head>
    <body>
    <header><div style=\"font-size: 3em\">512 Bank</div></header>
    <main>
    <h2>Bonjour $username</h2>
    <p>
    Nous vous confirmons votre inscription sur notre site
    <a href=\"http://seinksansdoozebank.engineer/app/\"
    >seinksansdoozebank.engineer</a
    >
    </p>
    </main>
    </body>
    </html>";
    # Instantiate the client.
    postCurl(
        "https://api.eu.mailgun.net/v3/seinksansdoozebank.engineer/messages",
        array(
            'from' => '512Admin mailgun@seinksansdoozebank.engineer',
            'to' => 'User ' . $mail,
            'subject' => 'Confirmation d\'inscription',
            'html' => $phpmailerContent
        ),$MAIL_GUN_API_KEY
    );



}
sendMail("payip59376@tingn.com", "Clement",$MAIL_GUN_API_KEY);