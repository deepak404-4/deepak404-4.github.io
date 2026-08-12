<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

$apps = [

    [
        "appName" => "Name Wallpaper Maker",

        "appDescription" => "Create Stunning Personalized Wallpapers! Transform your phone with custom wallpapers featuring your name, quotes, or special messages!",

        "appUrl" => "https://play.google.com/store/apps/details?id=com.calvintechnoliges.wallpaper&hl=en_IN",

        "appIcon" => "https://play-lh.googleusercontent.com/yZAzK837ucrPqpAAbQQQcuPsD-16nm2pv0ih5LYqF453DUvzBUrqbIJTBvlwhe-skvGuSrh_Q2kH6XxSafAyUBA=w240-h480-rw"
    ],

    [
        "appName" => "Phone Screen Lock",

        "appDescription" => "🔐 Phone Screen Lock – PIN, Pattern, Fingerprint & Custom Lock Screen",

        "appUrl" => "https://play.google.com/store/apps/details?id=com.screenlock.screenlockapp&hl=en_IN",

        "appIcon" => "https://play-lh.googleusercontent.com/XLcwCVRvcqPSaT1Hx3_27x6EBFAuM3EFoD8tqAE4R6UsxU13BxzFH4MwWajzZqyCsnegnAr9QHNN1kfKEF4L=w240-h480-rw"
    ]

];

echo json_encode(
    $apps,
    JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
);

?>
