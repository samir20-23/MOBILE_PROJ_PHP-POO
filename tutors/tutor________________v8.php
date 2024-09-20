<?php
echo 'hello';


<<<<<<< HEAD
//                       method number 1
// Write in terminal
// cd /path/to/your/file
// php -S localhost:8000
// Go to web and write http://localhost:8000/yourfile.php

//                       method number 2
// Install XAMPP
// Start Apache in XAMPP
// Drag your file.php into htdocs
// Go to web and write http://localhost/yourfile.php

//                       method number 3
// Install Nginx
// Open Command Prompt and navigate to Nginx folder
// Start Nginx with 'start nginx'
// Configure nginx.conf to work with PHP-FPM
// Go to web and write http://localhost:80/yourfile.php

//                       method number 4
// Install Docker
// Run the following command:
// docker run -d -p 8000:80 -v /path/to/your/php/files:/var/www/html php:7.4-apache
// Go to web and write http://localhost:8000

//                       method number 5
// Use a cloud platform like Heroku
// Install Heroku CLI
// Create a new project using Git
// Push your code to Heroku with 'git push heroku master'
// Access your application via the provided URL




//                      method number 6: Install Apache Manually
// Download Apache from Apache Lounge: https://www.apachelounge.com/download/
// Extract the downloaded zip file to C:\Apache24 (for example)
// Open Command Prompt as Administrator
// Navigate to Apache's `bin` directory:
// cd C:\Apache24\bin
// Install Apache as a service with the following command:  httpd -k install
// Start the Apache service with:  httpd -k start
// Open a web browser and write http://localhost/
// You should see the Apache welcome page

//                       method number 2: Configure PHP with Apache
// Download PHP from the official PHP site: https://windows.php.net/download/
// Extract PHP to C:\php (for example)
// Open Apache's configuration file httpd.conf located in C:\Apache24\conf
// Add the following lines at the end of the file:
// LoadModule php_module "C:/php/php7apache2_4.dll"
// AddType application/x-httpd-php .php
// PHPIniDir "C:/php"
// Restart Apache with:
// httpd -k restart
// Now place your PHP files in C:\Apache24\htdocs
// Access your PHP files via http://localhost/yourfile.php




// ################
// ipconfig in hhttpd.conf
//sername  192.168.2.38
=======
//write in  terminal
//cd /you_file/file.php
//php -S localhost:8000
//go to web write http://localhost:8000/youfile.php

>>>>>>> a66b5cb417aa114eb7d4b3d7a33e8eb4f106428b
