<?php
//Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // start the session if not already started.

}

date_default_timezone_set('Africa/Nairobi'); //Change to your timezone

// Set base URL dynamically
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 433) ? "https://" : "http://";
$base_url = $protocol . $_SERVER['HTTP_HOST']. '/';

//Data base configuration
$conf['db_type'] = 'pdo'; //Options:'mysqli' or 'pdo'
$conf['db_host'] = 'localhost'; // Use local host for local development
$conf['db_user'] = 'root'; //Use 'root' for local development
$conf['db_pass'] = ''; //use '' for local development
$conf['db_name'] = 'no1'; //Database name

// Site Information
$conf['site_name'] = 'ICS Community';
$conf['site_initials'] = 'icsc';
$conf['site_domain'] = 'icscommunity.com';
$conf['site_slogan'] = 'Connecting Minds, Building Futures';
$conf['site_url'] = $base_url. $conf['db_name']. '/';
$conf['site_title'] = $conf['site_name'] . ' _ ' . $conf['site_slogan'];
$conf['site_desc'] = 'Join' . $conf['site_name'] . 'to connect with fellow students, share knowledge and build brighter futures together';
$conf['site_authors'] = ['Christian Karanja', $conf['site_name']];
$conf['site_email'] = 'admin@' . $conf['site_domain'];
$conf['version'] = 'v1.0.0';

//Site language = 'en';
require_once __DIR__ . "/Lang" . $conf['site_lang'] . ".php"; // Include language file

//Email Configuration
$conf['mail_type'] = 'smtp'; // Options 'smtp' or 'mail'
$conf['smtp_host'] = 'smtp.gmail.com'; //For Gmail SMTP
$conf['smtp_user'] = 'yOur_email@gmail.com'; // Your email address
$conf['smtp_pass'] = 'secretpassword'; // Use app password if 2FA is enabled
$conf['smtp_port'] = 465; //For SSL
$conf['smtp_secure'] = 'ssl'; // Options 'ssl' or 'tsl'
$conf['mail_form'] = 'no-reply@' . $conf['site_domain'];
$conf['mail_form_name'] = $conf['site_name'] . 'Team' ;


 // Valid password length
$conf['min_password_length'] = 4;

// Valid email domains
$conf['valid_email_domains'] = [$conf['site_domain'], 'gmail.com', 'yahoo.com', 'outlook.com', 'strathmore.edu'];

// Set verification code
$conf['verification_code'] = rand(100000, 999999); // Example 6-digit code
