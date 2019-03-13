<?php

//create function with an exception
try {
    $error = 'Always throw this error';
    throw new Exception($error);
    
    // Code following an exception is not executed.
    echo 'Never executed';
    
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}