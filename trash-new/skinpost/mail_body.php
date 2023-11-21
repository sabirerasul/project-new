<?php

function mailBody($arr){
    $tBody = '<tr>';
    $tHead = '<tr>';
    foreach ($arr as $key => $value) {
        $tHead .= '<th>'.strtoupper($key).'</th>';
        $tBody .= '<td>' . $value . '</td>';
    }
    $tHead .= '</tr>';
    $tBody .= '</tr>';

    $message = "
    <html>
    <head>
    <title>Feedback Form Results</title>
    <style>
    table{
        border-collapse: collapse
    }
    table th,td{
        padding:10px
    }
    th{
        background-color:#dfdfdf;
    }
    </style>
    </head>
    <body>
    <p>The mail details given below</p>
    <table border='1'>
    <thead>
    {$tHead}
    </thead>
    <tbody>
    {$tBody}
    </tbody>
    </table>
    </body>
    </html>
    ";

    return $message;
}

function mailHeader($from){
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <'. $from. '>' . "\r\n";
    //$headers .= 'Cc: '. $from . "\r\n";

    return $headers;
}

function word_filter($string){
    $filterArr = [
        'sexy','sex','tiktok','pornstar',
        'ass', 'porn','xxx','flash',
        'movies','movie','fuck','fuck you',
        'shit','piss off','dick head','asshole',
        'bastard','bitch','damn','dumb',
        'nerd','bimbo','piss','jerk',
        'stupid','wimp','lame','idiot',
        'fool','retard','loser','rubbish',
        'shag','wanker','twat','bollocks',
        'bugger','choad','crikey','bloody',
        'hell','bloody oath','get stuffed',
        'bugger','cheesy','creepy','clown',
        'weird','cock','titties','boner',
        'muff','pussy','cunt','cockfoam',
        'nigger','motherfuck'
    ];

    $word = implode('|', $filterArr);
    $regex = '/[-+]?(' .  $word . ')/';

    preg_match($regex, $string, $matches);
    return ($matches) ? $matches[0]:true;
}

function name_filter($name){
    return (preg_match ('/^[A-Za-z\s]+$/', $name)) ? true:false;
}

function number_filter($number){
    return (preg_match ("/^[1-9]{1}[0-9]{9}$/", $number)) ? true:false;
}

function email_filter($email){
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? true:false;
}

?>