<?php
// Function to track an IP address using ip-api.com
function track_ip($ip) {
    $url = "http://ip-api.com/json/" . $ip;
    $response = file_get_contents($url);
    return json_decode($response, true);
}

// Example Usage
$ip_to_track = '8.8.8.8'; // Change this to the IP you want to track
$location_data = track_ip($ip_to_track);
print_r($location_data);
?>