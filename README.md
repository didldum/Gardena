# Notes
This repository contains PHP code and samples for accessing the Gardena Smart API in a quite simple way, e.g. for your home automation solution.

# Usage
You basically only need 3 files:
- gardena.class.inc.php (the main file)
- data.inc.php (see the sample file)
- index.php (modify it for your needs)

# Requirements
php5-curl

# Links
- Blog: http://www.dxsdata.com/2016/07/php-class-for-gardena-smart-system-api/
- Website http://www.dxsdata.com

# Disclaimer
This project is not in any association with Gardena or Husqvarna

# ifttt.com guide
## Checkout
- checkout project to any public webserver.
## Your credentials
- copy data.inc.php.sample to data.inc.php
- enter your Gardena login, password and choose any apikey so only you can control your mover.
## Stop when rain, continue afterwards
- goto ifttt.com, new Applet
- choose service: Weather Underground - Current condition changes to - Rain
- choose action service: Maker webhooks - Make a web request - https://example.com/mower/park.php?apikey=12345
- new Applet
- choose service: ... Current condition changes to - Clear
- choose action service: ... https://example.com/mower/startSched.php?apikey=12345
- new Applet (repeat for condition Cloudy)
