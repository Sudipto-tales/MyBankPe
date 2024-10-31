<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Base Site URL
$config['base_url'] = 'http://localhost/MyBankPe/';

// Index File
$config['index_page'] = ''; // Leave blank if using mod_rewrite to remove index.php

// URI Protocol
$config['uri_protocol'] = 'REQUEST_URI';

// URL Suffix
$config['url_suffix'] = '';

// Default Language
$config['language'] = 'english';

// Default Character Set
$config['charset'] = 'UTF-8';

// Enable/Disable System Hooks
$config['enable_hooks'] = FALSE;

// Class Extension Prefix
$config['subclass_prefix'] = 'MY_';

// Composer auto-loading
$config['composer_autoload'] = TRUE;

// Allowed URL Characters
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

// Enable Query Strings
$config['enable_query_strings'] = FALSE;

// Error Logging Threshold
$config['log_threshold'] = 1; // Change to a higher level if you want more logging

// Encryption Key (add a secure key here)
$config['encryption_key'] = 'your_random_encryption_key_here';

// Session Variables
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_samesite'] = 'Lax';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = sys_get_temp_dir(); // Make sure this directory is writable

// Cookie Related Variables
$config['cookie_secure'] = TRUE; // Set to TRUE for HTTPS

// Cross Site Request Forgery
$config['csrf_protection'] = TRUE;

// Cache Include Query String
$config['cache_query_string'] = FALSE;

// Other settings remain as default unless you need changes
