```php
$file = fopen("path/to/file.txt", "r");
if ($file === false) {
    $error = error_get_last();
    $errorMessage = "Error opening file: " . ($error ? $error['message'] : 'Unknown error');
    // Log the error or handle it appropriately
    error_log($errorMessage);
    die($errorMessage); // Stop execution and provide feedback
} else {
    // Process the file...
    while (($line = fgets($file)) !== false) {
        // Process the line...
    }
    fclose($file);
}
```