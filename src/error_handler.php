<?php

// error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    http_response_code(666);
    if (!DEBUG){
        exit();
    }

    echo "<h1>falha</h1>";
    switch ($errno) {
        case E_USER_ERROR:
            echo "<b>My ERROR</b> [$errno] $errstr<br />\n";
            echo "  Fatal error on line $errline in file $errfile";
            echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
            echo "Aborting...<br />\n";
            exit(1);
            break;
        case E_USER_WARNING:
            echo "<b>My WARNING</b> [$errno] $errstr<br />\n";
            break;
        case E_USER_NOTICE:
            echo "<b>My NOTICE</b> [$errno] $errstr<br />\n";
            break;
        default:
            echo "Unknown error type: [$errno] $errstr<br />\n";
            break;
    }
    echo "<ul>";
    foreach (debug_backtrace() as $error) {
        if (!empty($error['file'])) {
            echo "<li>";
            echo $error['file'] . ':';
            echo $error['line'];
            echo "</li>";
        }
    }
    echo "</ul>";

    exit();
//    /* Don't execute PHP internal error handler */
//    return true;
}

set_error_handler('myErrorHandler');
set_exception_handler('myErrorHandler');
