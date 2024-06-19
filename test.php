<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

use api\classes\Contact;

// Check if the Contact class exists
if (class_exists('api\classes\Contact')) {
    echo "Contact class found.<br>";
} else {
    echo "Contact class not found.<br>";
}

// Check if the Database class exists
if (class_exists('api\classes\Database')) {
    echo "Database class found.<br>";
} else {
    echo "Database class not found.<br>";
}
