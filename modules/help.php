<?php

function help() {
  system("clear");
  echo <<<EOL

\033[01;33m
╔════════════════════════════════════════════════════════════╗
║                    IP-TRACE HELP MENU                      ║
╚════════════════════════════════════════════════════════════╝

\033[01;36mOPTION 1: Track IP Address
\033[01;37m  - Allows you to track any IP address
  - Enter the IP address you want to trace
  - Returns location, ISP, and other details
  - Powered by ip-api.com

\033[01;36mOPTION 2: Track Your IP Address
\033[01;37m  - Automatically detects your current public IP
  - Shows your location and network information
  - No input required

\033[01;36mOPTION 3: About Us
\033[01;37m  - Display information about the tool
  - Author and version details
  - API information

\033[01;36mOPTION 4: Help
\033[01;37m  - Shows this help menu
  - Information about all available options

\033[01;36mOPTION 5: Update IP-Tracer
\033[01;37m  - Downloads the latest version from GitHub
  - Updates your installation

\033[01;36mOPTION X/EXIT
\033[01;37m  - Exits the application

\033[01;33m╔════════════════════════════════════════════════════════════╗
║               IMPORTANT NOTES                               ║
╚════════════════════════════════════════════════════════════╝

\033[01;31m⚠ USAGE LIMITS:
\033[01;37m  - Maximum 150 requests per minute
  - Exceeding limits will result in IP ban
  - Be respectful of API usage

\033[01;32m✓ FEATURES:
\033[01;37m  - Country and City Information
  - ISP Details
  - Latitude and Longitude
  - Timezone Information
  - Connection Type

\033[01;33m? TROUBLESHOOTING:
\033[01;37m  - If no data returns, check your internet connection
  - Ensure you're not exceeding rate limits
  - Try again in a few moments

\033[01;00m
EOL;
  sleep(2);
  $back = readline("\n\033[01;32m[Press Enter to go back to menu]\033[00m ");
  menu();
}

?>