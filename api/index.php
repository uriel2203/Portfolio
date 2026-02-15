<?php

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // Basic connectivity check
    if (!file_exists(__DIR__ . '/../public/index.php')) {
        throw new Exception("public/index.php not found at " . realpath(__DIR__ . '/../public/index.php'));
    }

    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    // Show the error clearly on the page
    http_response_code(500);
    echo "<h1>Vercel Deployment Error</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " (Line: " . $e->getLine() . ")</p>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    
    // Log to stderr as well for Vercel logs
    error_log("Deployment Error: " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine());
}
