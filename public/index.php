<?php
$links = [
    "https://nonton.site:8443/live/J321f/sevdua/35.m3u8",
    "https://nonton.site:8443/live/O3Uy9/sevdua/35.m3u8",
    "https://nonton.site:8443/live/u2R0r/sevdua/35.m3u8",
    "https://nonton.site:8443/live/TMjtO/sevdua/35.m3u8"
];
$chosen = $links[array_rand($links)];
header("Location: $chosen");
exit;
?>
