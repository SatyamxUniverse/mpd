<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MPD Content Display</title>
</head>
<body>

<div id="mpdContent"></div>

<?php
// Function to fetch MPD file content
function fetchMPDContent($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $mpdContent = curl_exec($curl);
    curl_close($curl);
    return $mpdContent;
}

// URL of the MPD file
$mpdUrl = "https://bpweb5.akamaized.net/bpk-tv/irdeto_com_Channel_250/output/manifest.mpd";

// Fetch MPD content
$mpdContent = fetchMPDContent($mpdUrl);

// Display MPD content
if ($mpdContent) {
    echo "<pre>" . htmlspecialchars($mpdContent) . "</pre>"; // Use htmlspecialchars to escape HTML special characters
} else {
    echo "Failed to fetch MPD content.";
}
?>

</body>
</html>
